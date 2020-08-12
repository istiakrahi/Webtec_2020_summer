<?php

session_start();

if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
	$password = $_POST['password'];

	if (empty($uname) || empty($password)) {
		echo "null submission found";
	}
	/*else
	{
	 $connection = mysqli_connect('127.0.0.1','root','','student');

		$result = mysqli_query($connection, "SELECT COUNT(uname) FROM userinfo where uname='".$uname."' AND password ='".$password."'");

		$data = mysqli_fetch_assoc($result);


		if ($data['COUNT(uname)'] == 1)
		{
			header('location:home.php');
		}
		
		echo "hwjcjdknj";
		//header('location:home.php');
	}*/

	else
	{
		$con = mysqli_connect('127.0.0.1','root','','student1');
		$sql = "SELECT * from userinfo where uname='".$uname."' and password='".$password."'";

		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0)
		{
			$_SESSION['status'] = "OK";
			header('location: home.php');
		}
		else
		{
			 header('location: login.php?msg=invalid_username/password');
			//header('location:login.php');
			//echo "user name or password doesn't match";
		}


	}

}

else
{
	//echo "invalid request";
	header('location:login.php');
}

?>