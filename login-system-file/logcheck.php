<?php

session_start();

if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['password'];

		if (empty($uname) || empty($password)) {
			# code...
			echo "null submission found";
		}
		 else 
		  	
		  { 

		 	$file = fopen('user.txt','r');
		 	$data = fread($file, filesize('user.txt'));
		 	fclose($data);

		 	$user = explode('|', $data);
			}



		 #	$user = explode('|', $data);

		 	if ($uname == trim($user[0]) && $password == trim($user[1])) {
		 		# code...
		 		$_SESSION['status'] = "OK";
		 		header('location:home.php');
		 	}
		 	else{
		 		header('location:login.php?msg=invalid_username/password');


		 #	print_r("invalid_username");
		 	

		 		#header('location:login.php');

		 		#print_r("invalid_username");
		 	}
		 }
 	



else
{
	header('location: login.php');
}

?>