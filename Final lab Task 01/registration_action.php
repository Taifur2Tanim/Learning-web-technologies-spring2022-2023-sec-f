<?php
session_start();

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];

	$_SESSION['user'] = array(
		'name' => $name,
		'phone' => $phone,
		'password' => $password
	);

	header('Location: login.php');
	exit();
}
?>
