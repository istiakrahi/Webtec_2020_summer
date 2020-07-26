

<html>
<head>
	<title>HTML Forms</title>
</head>
<body>
	<form method="post" action="backend.php">
			<table border="1">
				<tr>
					<td colspan="3"><center><h2>PERSON PROFILE</center></h2></td>
				</tr>
				<tr>
					<td size="30%">Name</td>
					<td size="40%"><input type="text" value="" name="sname"></td> 
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Email</td>
					<td size="40%"><input type="text" value="" name="s_email"></td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Gender</td>
					<td size="40%"><input type="radio" value="female" name="s_gender" > Male <input type="radio" value="male" name="s_gender" > Female <input type="radio" value="other" name="s_gender" > Other </br></td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Date of birth</td>
					<td size="40%"><input type="text" value="" name="dob_day">/<input type="text" value="" name="dob_month">/<input type="text" value="" name="dob_year">(dd/mm/yyyy)</td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Blood Group</td>
					<td size="40%">Select: 
				<select name="s_bloodgroup">
					<option value=""></option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
				<br></td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Degree</td>
					<td size="40%"><input type="checkbox" value="ssc" name="s_degree"> SSC <input type="checkbox" value="hsc" name="s_degree" > HSC <input type="checkbox" value="bsc" name="s_degree"> BSC. <input type="checkbox" value="msc" name="s_degree"> MSC. </td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td size="30%">Photo</td>
					<td size="40%"><input type="button" value="Browse" > No file selected.</td>
					<td size="30%">    </td>
				</tr>
				<tr>
					<td colspan="3" ></td>
				</tr>
				<tr>
					<td colspan="3" align="right"><input type="submit" name="" value="Submit"> <input type="Reset" name="" value="Reset"></td>
				</tr>


			</table>
		</form>





</body>
</html>