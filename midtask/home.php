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
		<h1>welcome student </h1><br>
		
        <li>
		<b><a href="checkatt.html">Check attendence</a></b> <br>
		</li>
			
		<li>
		<b><a href="selectcourse.html">Courses</a></b><br>
		</li>
		
			
		<li>	
		<b><a href="classschedule.html">Class Schedule</a></b><br>
		</li>
		
			<li>
			<b><a href="stask.html">Select task</a></b><br>
			</li>
			
			<li>
		    <b><a href="submittion.html"> Submit Task</a></b><br>
			</li>
			
			<li>
			<b><a href="joinclass.html">join Class</a></b><br>
			</li>
				
			<li>
			<b><a href="fees.html">Accounts</a></b><br>
			</li>
			
			<li>
			<b><a href="reasult.html">Result</a></b><br>
			</li>
			 
			<li>
			<b><a href="fees.html">Account</a></b><br>
			</li>

			<li>
				<b><a href="massage.html">Chat Box</a></b><br>
			</li>
			<li>
				<b><a href="addcomment.html">comment</a></b><br>
			</li>
			<li>
				<b><a href="comres.html">comment on result</a></b><br>
			</li>
			<br>
			
			<tr>
				<td><center><a href="logout.php"> Logout</center> </a></td>
			</tr>

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