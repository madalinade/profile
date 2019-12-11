<?php
	

include_once('config.php');
	
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql= "SELECT * FROM `users` 
	WHERE email = :email and password = :password " ;
	
	$stmt = $conn->prepare($sql);
	$stmt->bindParam('email', $email);
	$stmt->bindParam('password', $password);
	$stmt->execute();



	if ($stmt->rowCount() >=1){
		session_start();
			$_SESSION['user']= 'valid';
			header('location:userlist.php');
		
		
	} else{
	
			header('location:userlist.php');
		
		
		
	}



?>