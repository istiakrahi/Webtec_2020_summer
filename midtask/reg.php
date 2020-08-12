<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="regcheck.php" method="post" enctype="multipart/form-data" name="reg_main">
		
		<fieldset>
			<legend>SingUp</legend>
			<table>
				
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>

				</tr>

				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
					

				</tr>

				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>

				</tr>
				
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirmpassword"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address"></td>
				</tr>

				<tr>
					<td>Upload Image</td>
					<td><input type="file" name="userphoto"></td>
				</tr>

				<td>Gender</td>
				<tr>
					
					<td>Male</td>
					<td><input type="radio" name="gender" value="Male"></td>

				</tr>

				<tr>
					<td>Female</td>
					<td><input type="radio" name="gender" value="Female"></td>

				</tr>

				<tr>

					<td></td>
					<td> <input type="submit" name="submit" value="submit"></td>

				</tr>

			</table>

		</fieldset>

	</form>


</body>
</html>