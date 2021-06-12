
<?php include "includes/db.php";?>

<?php display_message(); ?>


<?php
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
     login_user($_POST['email'],$_POST['password']);
   
 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
</head>

<body>

    <div id="account-bg">
        <div class="container">
            <div class="signin">
                <h2>Sign In</h2>
                <form action="signin.php" method="post" autocomplete="off" >
                <p><?php display_message(); ?></p>
                    <div class="inputBox">
                        <span>Email</span>
                        <input type="email" name="email" placeholder="email" required>
                    </div>
                    <div class="inputBox">
                        <span>Password</span>
                        <input type="password" name="password" placeholder="password" minlength="8" required>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox">Remember me</label>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="submit" value="Sign In">
                    </div>
                    <div class="inputBox">
                        <p>Don't have an account? <a href="registration.php">Sign up</a></p>
                    </div>
                </form>
                <h3>Login with social media</h3>
                <ul class="scm">
                    <li><img src="css/fb.png" ></li>
                    <li><img src="css/insta.png" ></li>
                    <li><img src="css/twit.png" ></li>
                </ul>
            </div>
        </div>
    </div>

    </body>

</html>
