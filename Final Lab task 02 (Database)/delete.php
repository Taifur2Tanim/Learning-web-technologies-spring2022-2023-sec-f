<?php

session_start();

$con = mysqli_connect('localhost','root','','product_db');
//print_r($_SESSION);
$reciv = $_SESSION['name'];

//echo $reciv;

$query= "DELETE FROM products WHERE name='{$reciv}'";

$delected = mysqli_query($con,$query);
if($delected){
    header("location: display.php?delete");
} 

?>