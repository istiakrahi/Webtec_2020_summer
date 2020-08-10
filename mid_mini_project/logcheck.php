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
		 	$connection = mysqli_connect('127.0.0.1','root','','registration');
		 	$result = mysqli_query($connection,"SELECT COUNT(uname) FROM infos WHERE uname='".$uname."' AND password= '".$password."' ");
		 	$data = mysqli_fetch_assoc($result);

		 	if ($data['COUNT(uname)'] == 1) {
		 		# code...
		 		header('location: home.php');

		 		

		 		
		 	}

		 	else
		 	{
		 		echo "invalid user name or password";
		 	}

		 	//header('location: home.php');
		 }
		  	
		 


}
else
{
	header('location: login.php');
}

?>