<?php

	require_once('../service/userService.php');

	if (isset($_POST['submit'])) {
		# code...
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if(empty($username) || empty($password) || empty($email))
		{
			header('location: ../views/signup.php?error=null_value_found');
		}
	
	else
	{
		$user = [
					'username' =>$username,
					'password' =>$password,
					'email' => $email
				];

				$status = create($user);

				 if ($status) {
					
				 	header('location: ../views/login.php?msg=success');

				 }
				 else
				 {
				 	header('location: ../views/signup.php?error=dberror');
				 }
	}
}

?>