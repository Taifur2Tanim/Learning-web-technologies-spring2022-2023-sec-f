<?php
session_start();

if($_POST['name'] == 'admin' && $_POST['password'] == 'admin'){
	header('Location: admin.php');
	exit();
}



if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$password = $_POST['password'];

	if(isset($_SESSION['user']) && $_SESSION['user']['name'] == $name && $_SESSION['user']['password'] == $password){
		$_SESSION['logged_in'] = true;
		header('Location: analyst.php');
		exit();
	} else {
		echo 'Invalid login credentials';
	}
}
?>

