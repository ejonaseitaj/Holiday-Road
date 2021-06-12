<?php ob_start();
session_start();
// session_destroy();

$connection = mysqli_connect('localhost','root','root','holidayroad');

// if($connection){
//     echo "WE are connected";
// }
require_once("fun.php");
require_once("cart.php");
?>