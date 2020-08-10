<?php

	session_start();

	if (isset($_POST['submit'])) {

		$id = $_POST['id'];
		$uname  = $_POST['uname'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$email = $_POST['email'];

		if (empty($id) || empty($uname) || empty($password) || empty($email) || empty($confirmpassword))  {
			# code...
			echo "null submition found";

			if ($password != $confirmpassword) {
				
				echo "Password doesn't match!!";
			}
			if(!ctype_alpha($uname))
			{
				echo "name can't contain numbers!!";
			}
		


		}
		else
		{
			$connection = mysqli_connect('127.0.0.1','root','','registration');
			$result = mysqli_query($connection,"INSERT INTO infos (id,uname,password,confirmpassword,email) VALUES ('".$id."','".$uname."','".$password."','".$confirmpassword."','".$email."')");

			echo "successful connection";


			header('location: login.php');
		}
		
	}
	else
	{
		#header('location:login.php');
	}




?>