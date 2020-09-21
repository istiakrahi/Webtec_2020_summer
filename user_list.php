<?php
	require_once('../php/sessionController.php');
	require_once('../service/userService.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>user List</title>
</head>
<body>

	<h1><?=$_SESSION['username']?>'s Profile</h1>

	<?php
		$users = getprofile($_SESSION['username']);
		//$user = getById($_GET['id']);
	?>

	<table border=1> 
		<tr>
			<td>ID</td> 
			<td>NAME</td> 
			<td>Password</td>  
			<td><center>Email</center></td> 
			<!-- <td>Type</td>  -->
			<!-- <td><center>Action</center></td> -->
		</tr>

		<tr>
			<td><?=$users['id']?></td>
			<td><?=$users['username']?></td>
			<td><?=$users['password']?></td>
			<td><?=$users['email']?></td>
			<!-- <td><?=$users['type']?></td> -->
		</tr>
		
	</table>

<table>
			
				<tr><td>
					<a href="home.php"><button>Back</button></a>
				</td></tr>
 


				</table>
</body>
</html>