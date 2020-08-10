<?php

  session_start();

	if(isset($_SESSION['status'])){

		if($_SESSION['status'] == "OK"){

		

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
		<h3>welcome admins home </h1><br>
		
		<h2>Welcome bob!</h2>

		<a href="profile.html">profile</a>
		<a href="changepass.html">changepass</a>
		<a href="users.html">View users</a>
		<a href="logout.php">logout</a>

			
</body>

<body>
	<h3>Welcome anne!</h3>
	<a href="profile.html">profile </a><br>
	<a href="changepass.html"> change password</a><br>
	<a href="logout.php">Logout</a><br>
</body>

</html>

<?php

}else
{
	header('location: login.php');
}

}
else
{
	header('location: login.php');
}

?>