<?php
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST['sname'];

			if($name == "")
				{echo "name is required";}

			//elseif ($name == "") {}
			if (["REQUEST_METHOD"] == "POST") {
			$email = $_POST['email1'];
			if ($email == "")
			{
				echo "mail is is requard";
			}
		}
		}	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		name:<input type="text" name="sname" value="" placeholder="">
		
		<br>

		email:<input type="text" name="email1" value="" placeholder="">
	   <?php

	   		if(!isset($email)){echo "cannot be empty";} 	


		?>
		<br>
		<input type="submit" name="" value="submit">

	</form>



</body>
</html>