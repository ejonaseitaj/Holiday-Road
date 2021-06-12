<?php

if(isset($_GET['p_id'])){

    $the_package_id = $_GET['p_id'];

}


$query = "SELECT * FROM package WHERE package_id = $the_package_id  ";
$select_package_by_id = mysqli_query($connection,$query);  

while($row = mysqli_fetch_assoc($select_package_by_id)) {
    $package_id               = $row['package_id'];
    $package_destination_id   = $row['package_destination_id'];
    $package_image            = $row['package_image'];
    $package_title            = $row['package_title'];
    $package_description      = $row['package_description'];
    $package_price            = $row['package_price'];

    $package_tags             = $row['package_tags'];
    
     }

 if(isset($_POST['update_package'])){

    // Assigning new values :
    $package_destination_id   = $_POST['package_destination_id'];
    $package_title            = $_POST['package_title'];

    $package_image            = $_FILES['image']['name'];
    $package_image_temp       = $_FILES['image']['tmp_name'];

    $package_description      = $_POST['package_description'];
 
    $package_price    = $_POST['package_price'];
    $package_tags             = $_POST['package_tags'];

    move_uploaded_file($package_image_temp, "./images/$package_image");

    if(empty($package_image)){
        $query = "SELECT * FROM package WHERE package_id = $the_package_id";
        $select_image = mysqli_query($connection,$query);

        $package_image = $row['package_image'];
    }
    
    $query = "UPDATE package SET ";
    $query .="package_title  = '{$package_title}', ";
    $query .="package_destination_id = '{$package_destination_id}', ";
    $query .="package_description = '{$package_description}', ";
    $query .="package_tags   = '{$package_tags}', ";
    
    $query .="package_price= '{$package_price}', ";
    $query .="package_image  = '{$package_image}' ";
    $query .= "WHERE package_id = {$the_package_id} ";
  
  $update_package = mysqli_query($connection,$query);
    confirmQuery($update_package);

 }

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
       <label for="package_destination_id">Categories</label>
       <select name="package_destination_id" id="">
           
       <?php
      $query = "SELECT * FROM destinations";
      $select_destination= mysqli_query($connection, $query);

      confirmQuery($select_destination);

      while ($row = mysqli_fetch_assoc($select_destination)) {
        $package_destination_id = $row['package_destination_id'];
        $destination_name = $row['destination_name'];

        echo "<option value='{$package_destination_id}'>{$destination_name}</option>";
        
      }
      ?>
           
       </select>

      </div>

    <div class="form-group">
        <img width="100" src="../images/<?php echo $package_image ?>" alt="">
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="package_title">Package Title</label>
        <input value="<?php echo $package_title ;?>" type="text" class="form-control" name="package_title">
    </div>

    <div class="form-group">
        <label for="package_description">Post Content</label>
        <textarea class="form-control" name="package_description" id="" rows="10" cols="30"><?php echo $package_description ;?>
        </textarea>
    </div>

    

    <div class="form-group">
        <label for="package_price">Package Price</label>
        <input value="<?php echo $package_price ;?>" type="text" class="form-control" name="package_price">
    </div>

    <div class="form-group">
        <label for="package_tags">Package Tags</label>
        <input value="<?php echo $package_tags ;?>" type="text" class="form-control" name="package_tags">
    </div>

    <div class="form-group">
        <input  class="btn btn-primary" type="submit" name="update_package" value="Update Package">
    </div>
</form>