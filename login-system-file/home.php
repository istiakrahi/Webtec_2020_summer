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
		<h1>welcome home</h1><br>
		<h3>first Home!!!<h3>

			<a href="checkatt.html">check attendence</a>
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