<?php
	
	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup page</title>
</head>
<body>
	<form action="../php/regController.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Employer name</td>
					<td><input type="text" name="empname"></td>
				</tr>
				<tr>
					<td>Company name</td>
					<td><input type="text" name="companyname"></td>
				</tr>
				<tr>
					<td>Contact no</td>
					<td><input type="text" name="contactno"></td>
				</tr>
				<tr>
					<td>User name</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>