<?php

	session_start();

	if (isset($_POST['submit'])) {
		
		$uname  = $_POST['uname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$photo = $_FILES['userphoto']['tmp_name'];


		if (empty($uname) || empty($password) || empty($email) ||empty($confirmpassword) || empty($address) || empty($gender) || empty($photo)) {
			
			echo "null submition found";

			if ($password != $confirmpassword) {
				
				echo "Password doesn't match!!";
			}
			if(!ctype_alpha($uname))
			{
				echo "name can't contain numbers!!";
			}
			if((!strpos($email,'@')) || ((!strpos($email,'.'))))
			{
				echo "not a valid email address!";
			}
		


		}
		else
		{
			$connection = mysqli_connect('127.0.0.1','root','','student1');
			$result = mysqli_query($connection,"INSERT INTO userinfo (uname,password,email,confirmpassword,address,gender,photo) VALUES ('".$uname."','".$password."','".$email."','".$confirmpassword."','".$address."','".$gender."','".$photo."')");

			echo "successful connection";


			header('location: login.php');
		}
		
	}
	else
	{
		#header('location:login.php');
	}




?>