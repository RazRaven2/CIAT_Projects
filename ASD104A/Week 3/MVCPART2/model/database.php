<?php

	$dsn = 'mysql:host=localhost;dbname=customer_records';
	$username = "root";
	$password = '';
	
	try{
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e){
		$error_message = $e->getMessage();
		include('database_error.php');
		exit();
	}
?>


