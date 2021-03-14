<?php
	
	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$id = $_POST['id'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$userType = $_POST['userType'];

		if(empty($id) || empty($password) || empty($email) || empty($name) || empty($confirmPassword) || empty($userType))
	{
		echo "null submission".'<a href="registration.html"><u>Home</a>';
	}
	else 
	{

		if($password!=$confirmPassword)
		{
			echo "Password not matched".'<a href="registration.html"><u>Home</a>';
		}
		else
		{

		$user = ['name'=> $name, 'id'=> $id, 'email'=>$email, 'password'=> $password, 'usertype'=> $userType];
		$juser = json_encode($user);
		$file=fopen('user.jason','a');
		fwrite($file,$juser);
		fclose($file);

		header('location: ../view/login.html');
		}
	}
	}
	else
	{
	
	echo "Not Set YET";
	}

?>