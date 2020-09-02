<?php
	
	//session_start();
	
	if(isset($_POST['submit'])){

		$id 		= $_POST['id'];
		$password 		= $_POST['password'];
		$confirmpassword 	= $_POST['confirmpassword'];
		
		$email 	= $_POST['email'];
		

		if(empty($id) || empty($password) || empty($confirmpassword) || empty($name) || empty($email) ){
			echo "null submission found!";
		}else{
			$user = [
				'id'       =>$id,
				'password'	=>$password,
				'confirmpassword'  =>$confirmpassword,
				
				'email'		=>$email
			];

			$status = create($user);
		
			if($status){
				echo "Success";
				//header('location: ../views/login.php?msg=success');
			}else{
				//header('location: ../views/signup.php?error=dberror');
				echo "Error2";
			}
		}
		
	}

	



?>