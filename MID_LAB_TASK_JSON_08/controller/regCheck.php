<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
				$juser = json_encode($user);

				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['current_user'] = $user;

				$myfile = fopen('../model/users.json', 'a');
				$data = fwrite($myfile, $juser);
				

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>