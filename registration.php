
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['name'];
    $user_surname = $_POST['surname'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    $error = [
        'user_name'=>'',
        'user_surname'=>'',
        'user_email'=> '',
        'user_password'=>''
    ];

    if($user_name ==''){
        $error['user_name'] = 'Name canot be empty';
    }

    if($user_surname ==''){
        $error['user_email'] = 'Surname cannot be empty';
    }

    if($user_password ==''){
        $error['user_email'] = 'Password cannot be empty';
    }

    if($user_email ==''){
        $error['user_email'] = 'Email cannot be empty';
    }

    if(email_exists($user_email)){
        $error['user_email'] = 'This email is already registered!, <a href="signin.php">Please signin</a>';
    }

    foreach($error as $key => $value){
        if(empty($value)){
            unset($error[$key]);
        }
    }

    if(empty($error)){
        register_user($user_name,$user_surname,$user_email,$user_password);
        login_user($user_email,$user_password);
    }
}

?>


<div id="account-bg">
    <div class="container">
        <div class="signup">
            <h2>Sign Up</h2>
            <form action="registration.php" method="post" autocomplete="off">
                

                <div class="inputBox name">
                    <span>Name</span>
                    <input type="text" name="name" placeholder="Name" required>
                    <p><?php echo isset($error['user_name']) ? $error['user_name'] : '' ?></p>
                </div>
                <div class="inputBox">
                    <span>Surname</span>
                    <input type="text" name="surname" placeholder="Surname" required>
                    <p><?php echo isset($error['user_surname']) ? $error['user_surname'] : '' ?></p>
                </div>
                <div class="inputBox">
                    <span>Email</span>
                    <input type="email" name="email" placeholder="Email" required>
                    <p><?php echo isset($error['user_email']) ? $error['user_email'] : '' ?></p>
                </div>
                <div class="inputBox">
                    <span>Password</span>
                    <input type="password" id="pass" name="password" placeholder="Password" minlength="8" maxlength="16" required>
                    <p><?php echo isset($error['user_password']) ? $error['user_password'] : '' ?></p>
                </div>
                <div class="inputBox">
                    <span>Confirm Password</span>
                    <input type="password" id="con_pass" name="con_password" placeholder="Confirm Password" minlength="8" maxlength="16" required>
                    <div id="message"></div>
                </div>
                <div class="notify">
                    <label><input type="checkbox">Please sende me HolidayRoad.com emails with travel deals,special offers and other information.</label>
                </div>

                <div class="inputBox">
                    <input type="submit" name="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#pass, #con_pass').on('keyup', function() {
        if ($('#pass').val() == $('#con_pass').val()) {
            $('#message').html('');
        } else
            $('#message').html('**Password not matching').css('color', 'red');
    });
</script>
<?php include "includes/footer.php"; ?>