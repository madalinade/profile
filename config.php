<?php

$host= 'localhost';
$databasename= 'profile';
$dbusername='root';
$dbpassword='';

try{
	
	$conn = new PDO ("mysql:host=$host;
                 dbname=$databasename",
				 $dbusername,
				 $dbpassword
				);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//echo"Connection is made";
	
	
   } catch(PDOException $e) {
	
	//echo "Connection is failed: ". $e->getMessage();
	
}

 

?>