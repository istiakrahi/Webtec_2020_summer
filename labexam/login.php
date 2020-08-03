<?php

	if (isset($_GET['msg'])) {
		
		echo $_GET['msg'];
	}




?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="logincheck.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>User Id</td>
					<td><input type="text" name="uid"></td>

				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				

				<tr>
					
					<td><input type="button" value="login"></td>
					<td> <a href="registration.php"> Register</td>


				</tr>

			</table>

		</fieldset>

	</form>

</body>
</html>

<?php

if (isset($_SESSION['type'])) {
	
	if($_SESSION['type'] == "user")
	{
		header('location:uhp.php');
	}
	else if($_SESSION['type'] == "admin")
	{
		header('location:ahp.php');
	}
}



?>

