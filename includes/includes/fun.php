<?php

// Helper Function

function set_message($msg)
{
  if (!empty($msg)) {
    $_SESSION['message'] = $msg;
  } else {
    $msg = "";
  }
}


function display_message()
{
  if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }
}

function send_message(){
  if(isset($_POST['submit'])){

    $to          ="ejona.seitaj@fshnstudent.info";
    $name        = $_POST['name'];
    $last_name   = $_POST['last_name'];
    $email       = $_POST['email'];
    $number      = $_POST['number'];
    $subject     = $_POST['subject'];
    $message     = $_POST['message'];

    $headers = "From: {$name} {$email}";

    $result = mail($to, $subject, $message,$headers);

    if(!$result){
      set_message("Sorry, we couldn't send you message!");
      redirect("contact.php");
    } else {
      set_message("Your message has been sent!");
    }

  }
}

//  Ends here


function redirect($location)
{
  return header("Location: $location");
}

function query($sql)
{
  global $connection;
  return mysqli_query($connection, $sql);
}

function confirm($result)
{
  global $connection;
  if (!$result) {
    die("Query Failed " . mysqli_error($connection));
  }
}

function fetch_array($result)
{
  return mysqli_fetch_array($result);
}


function escape_string($string)
{
  global $connection;
  return mysqli_real_escape_string($connection, trim($string));
}

function get_package()
{
  $query = query("SELECT * FROM package");
  confirm($query);

  while ($row = fetch_array($query)) {
    $package = <<<DELIMETER
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="packges.php" method="post">
              <div class="card shadow">
                <div id="inner">
                  <img src="admin/images/{$row['package_image']}" alt="" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                  <h5>{$row['package_title']}</h5>
                  <p class="card-text">
                  {$row['package_description']}
                  </p>
                  <h5>
                  <span class="price">&#36;{$row['package_price']}</span>
                  </h5>
                  <a class="btn btn-warning my-3" target="_blank" href="cart.php?add={$row['package_id']}">Add to Cart <i class="fas fa-shopping-cart"></i></a>
                </div>
              </div>
            </form>
          </div>
        DELIMETER;

    echo $package;
  }
}

function search() {
  global $connection;
  if(isset($_POST['submit'])) {

    $search = $_POST['searchBar'];

    $query = query("SELECT * FROM package WHERE package_tags LIKE '%$search%' ");
    confirm($query);

    $count = mysqli_num_rows($query);
    if($count == 0){
      echo "Nothing";
    } else {
      while ($row = fetch_array($query)) {
        $package = <<<DELIMETER
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="packges.php" method="post">
                  <div class="card shadow">
                    <div id="inner">
                      <img src="admin/images/{$row['package_image']}" alt="" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                      <h5>{$row['package_title']}</h5>
                      <p class="card-text">
                      {$row['package_description']}
                      </p>
                      <h5>
                      <span class="price">&#36;{$row['package_price']}</span>
                      </h5>
                      <a class="btn btn-warning my-3" target="_blank" href="cart.php?add={$row['package_id']}">Add to Cart <i class="fas fa-shopping-cart"></i></a>
                    </div>
                  </div>
                </form>
              </div>
            DELIMETER;
    
        echo $package;
      }
    } 
  }
}


function get_destinations()
{
  global $connection;
  $query = query("SELECT * FROM destinations");
  confirm($query);

  while ($row = fetch_array($query)) {
    //   echo "<li><a class='dropdown-item' href='#'>{$row['destination_name']}</a></li>";
    $destination_link = <<<DELIMETER
    <li><a class="dropdown-item" href="destination.php?id={$row['package_destination_id']}">{$row['destination_name']}</a></li>
    DELIMETER;

    echo $destination_link;
  }
}


function get_package_in_des_page()
{
  $query = query("SELECT * FROM package WHERE package_destination_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

  while ($row = fetch_array($query)) {
    $package = <<<DELIMETER
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="packges.php" method="post">
              <div class="card shadow">
                <div id="inner">
                  <img src="admin/images/{$row['package_image']}" alt="" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                  <h5>{$row['package_title']}</h5>
                  <p class="card-text">
                  {$row['package_description']}
                  </p>
                  <h5> 
                  <span class="price">&#36;{$row['package_price']}</span>
                  </h5>
                  <a class="btn btn-warning my-3" target="_blank" href="cart.php?add={$row['package_id']}">Add to Cart <i class="fas fa-shopping-cart"></i></a>
                </div>
              </div>
            </form>
          </div>
        DELIMETER;

    echo $package;
  }
}

function login_user($user_email,$user_password) {

  global $connection;

    $user_email = escape_string($user_email);
    $user_password = escape_string($user_password);

    $query = query("SELECT * FROM user WHERE user_email = '{$user_email}' ");
    confirm($query);

    if (mysqli_num_rows($query) == 0) {
      set_message("*** This email does not exsists");
    } else {
      $row = mysqli_fetch_array($query);
      $db_user_name = $row['user_name'];
      $db_user_surname = $row['user_surname'];
      $db_user_role = $row['user_role'];
      $db_user_password = $row['user_password'];

      if (password_verify($user_password, $db_user_password)) {
       
        $_SESSION['firstname'] = $db_user_name;
        $_SESSION['lastname'] = $db_user_surname;
        $_SESSION['user_role'] = $db_user_role;
        
        if(isset($_SESSION['user_role'])){
          if($_SESSION['user_role'] == 'admin'){
            redirect("admin");
          } else {
            redirect("index.php");
          }
        }
        
      } else {
        set_message("*** Wrong password!");
      }
    }

  
}

function email_exists($user_email){
  global $connection;
  $query = query("SELECT user_email FROM user WHERE user_email = '$user_email' ");
  confirm($query);

  if(mysqli_num_rows($query)>0) {
    return true;
  }else {
    return false;
  }
}

function register_user($user_name,$user_surname,$user_email,$user_password){
  global $connection;
   
    $user_name = escape_string($user_name);
    $user_surname = escape_string($user_surname);
    $user_email = escape_string($user_email);
    $user_password = escape_string($user_password);

    $user_password = password_hash($user_password, PASSWORD_BCRYPT,array('cost'=>12));

    $query = "INSERT INTO user (user_name, user_surname, user_email, user_password) ";
    $query .= "VALUES ('{$user_name}', '{$user_surname}', '{$user_email}','{$user_password}')";
 
    $register_user_query = query($query);
    confirm($register_user_query);
    
  }



