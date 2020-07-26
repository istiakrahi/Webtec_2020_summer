
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['sname'];
		if($name == ""){ echo "name cannot be empty!;}
		
		$email = $_POST['s_email'];
		if($email == ""){ echo "*email cannot be empty!";}
		
		$gender = $_POST['s_gender'];
		if (empty($_POST['s_gender'])) {echo "*gender is required!";}
		
		$day = $_POST['dob_day'];
		if (empty($day)) {echo "*day is required in DOB!";}
		if ($day<1 || $day>31) {echo "*day is invalid!"; }
		$month = $_POST['dob_month'];
		if (empty($month)) {echo "*month is required in DOB!";}
		if ($month<1 || $month>12) {echo "*month is invalid!"; }
		$year = $_POST['dob_year'];
		if (empty($year)) {echo "*year is required in DOB!";}
		if ($year<1900 || $year>2016) {echo "*year is invalid!"; }
		$bloodgroup = $_POST['s_bloodgroup'];
		if (empty($bloodgroup)) {echo "*bloodgroup is required!";}
		$degree = $_POST['s_degree'];
		if (empty($_POST['s_degree'])) {echo "*atleast one degree must be selected!";}


		





	}

?>