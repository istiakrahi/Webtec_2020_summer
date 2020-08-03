<?php
session_start();

if (isset($_POST['register'])) {
	

	$id = $_POST['id'];
	$password = $_POST['password'];
	$confirm_password = $_POST['password'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];


	if(empty($uname) || empty($password) || empty($email) || empty($id) || empty($confirm_password))
	{
		echo "null submission found!";
	}

	else
	{
		$_SESSION['uname'] = $uname;
		$_SESSION['password'] = $password;
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $id;
		$_SESSION['confirm_password'] = $confirm_password;

		echo "done!!";

	}
}
else
{
	echo "invalid request";
	header('location:login.php'); 
}

?>