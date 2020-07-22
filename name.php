<?php
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST['sname'];

			if($name == "")
				{echo "name is required";}
			//elseif ($name == "") {}
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
		<input type="submit" name="" value="submit">

	</form>

</body>
</html>