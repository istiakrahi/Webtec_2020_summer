<?php 
	session_start();

	if(isset($_POST['login']))
	{

		 $uid = $_POST['uid'];
		 $password = $_POST['password'];

		 if (empty($uname) || empty($password)) {
		 	echo "null submission found!";
		 }
		 else{

		 	if(isset($_SESSION['uid']) && isset($_SESSION['password']))
		 	{
		 		if ($uname == $_SESSION['uid'] && $password == $_SESSION['password']) {
		 			
		 			$_SESSION['status'] = "OK";
		 			header('location: home.php');
		 		}
		 		else{
		 			header('location: login.php?msg=invalid_username/password');
		 		}
		 		}
		 		else{

		 			echo "dont have any account!";
		 		}
		 	
		 }
	}

	else
	{
		header('location: login.php');
	}

 ?>