<?php
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$empname    = $_POST['empname'];
		$companyname= $_POST['companyname'];
		$contactno  = $_POST['contactno'];
		$username   = $_POST['username'];
		$password 	= $_POST['password'];
		

		if(empty($empname)|| empty($companyname) || empty($contactno) || empty($username) || empty($password)){
			header('location: ../views/signup.php?error=null');
		}else{
			
			$user = [
				'empname'   =>$empname,
				'companyname'=>$companyname,
				'contactno'  =>$contactno,
				'username'	=>$username,
				'password'	=>$password,
				
			];

			$status = create($user);
		
			if($status){
				header('location: ../views/login.php?msg=success');
			}else{
				header('location: ../views/signup.php?error=dberror');
			}
		}
		
	}
?>