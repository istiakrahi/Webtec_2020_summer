<?php

	session_start();

	if (isset($_POST['submit'])) {
		
		$uname  = $_POST['uname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if (empty($uname) || empty($password) || empty($email)) {
			# code...
			echo "null submition found";
		}
		else
		{
			$file = fopen('user.txt','w');
			$user = $uname.'|'.$password.'|'.$email;
			fwrite($file,$user);
			fclose($file);

			


			header('location:login.php');
		}
	}
	else
	{
		header('location:login.php');
	}




?>