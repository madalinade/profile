<?php

include_once("config.php");


$fullname= $_POST['fullname'];
$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];
$gender= $_POST['gender'];

if(isset($_FILES['fileToUpload'])){
$file_name= $_FILES['fileToUpload']['name'];
$file_size= $_FILES['fileToUpload']['size'];
$file_type= $_FILES['fileToUpload']['type'];
$file_source= $_FILES['fileToUpload']['tmp_name'];

	
	
	

}


$sql= "INSERT INTO `users` (`fullname`, 
                             `username`,
						     `email`, 
						     `password`, 
							 `gender`,
							 `file`)
	VALUES ( :fullname, :username, :email, :password, :gender, :file)";
	//connect php to database
$query=$conn->prepare($sql);
$query->bindParam(':fullname',$fullname);
$query->bindParam(':username',$username);
$query->bindParam(':email',$email);
$query->bindParam(':password',$password);
$query->bindParam(':gender',$gender);
$query->bindParam(':file',$file_name);
$query->execute();

move_uploaded_file($file_source, 'img/'.$file_name);
$conn=null;


session_start();
			$_SESSION['user']= 'valid';
			header('location:userlist.php');
		
?>