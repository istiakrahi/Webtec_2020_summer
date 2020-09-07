<?php
	require_once('../service/userService.php');

	
	

	//update new user
	if(isset($_POST['update'])){

		$empname    = $_POST['empname'];
		$companyname= $_POST['companyname'];
		$contactno  = $_POST['contactno'];
		$username   = $_POST['username'];
		$password 	= $_POST['password'];
		$id  = $_POST['id'];

		if(empty($empname)|| empty($companyname) || empty($contactno) || empty($username) || empty($password)){
			header('location: ../views/edit.php?id='.$id);
		}else{
			$user = [
				'empname'   =>$empname,
				'companyname'=>$companyname,
				'contactno'  =>$contactno,
				'username'	=>$username,
				'password'	=>$password,
				'id' => $id
				
				

			];

			$status = update($user);
			if($status){
				header('location: ../views/employee_list.php?msg=success');
			}else{
				header('location: ../views/edit.php?id='.$id);
			}
		}	
	}



if (isset($_POST['delete'])) {
	# code...
	    $empname    = $_POST['empname'];
		$companyname= $_POST['companyname'];
		$contactno  = $_POST['contactno'];
		$username   = $_POST['username'];
		$password 	= $_POST['password'];
		$id  = $_POST['id'];


if(empty($empname)|| empty($companyname) || empty($contactno) || empty($username) || empty($password))
	 {
		header('location: ../views/delete.php?id='.$id);

	}
	else
	{
		$user = [
			    'empname'   =>$empname,
				'companyname'=>$companyname,
				'contactno'  =>$contactno,
				'username'	=>$username,
				'password'	=>$password,
				'id' => $id

		];

		$status = delete($user);
		if ($status) {
			header('location: ../views/employee_list.php?msg=success');
		}
		else
		{
			header('location: ../views/delete.php?id= '.$id);
		}
	}
}
?>
?>