<?php ob_start(); ?>
<?php session_start(); ?>

<?php 

$_SESSION['username'] = '';
$_SESSION['firstname'] = '';
$_SESSION['lastname'] = '';
$_SESSION['user_role'] = '';


header("Location: ../index.php");

?>