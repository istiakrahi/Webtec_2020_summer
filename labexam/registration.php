<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<form action="regischeck.php" method="post">
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>

				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>

				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm_password"></td>
				</tr>

				<tr>
					<td>Name</td>
					<td><input type="text" name="uname"></td>

				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>

				</tr>
				
				

				<tr>
					
					<select name="username" 
					>
						<option value="User"> user </option>
						<option value= "admin"> admin</option>

					</select>

				</tr>

				<tr>
					
					<td><input type="button" value="registar"></td>
					<td> <a href="login.php">login</a> </td>

				</tr>


			</table>

		</fieldset>

	</form>
</body>
</html>