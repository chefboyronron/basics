<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "basics";

//Procedural
/*
	$connect = mysqli_connect($host, $username, $password, $database);
	$sql = "CREATE TABLE IF NOT EXISTS employee(
				id INT(11) UNSIGNED AUTO_INCREMENT,
				name VARCHAR(255) NOT NULL,
				address VARCHAR(255) NOT NULL,
				timestamp DATETIME,
				PRIMARY KEY (id)
			);
		   ";
	$query = mysqli_query($connect, $sql);
	if($query){
		echo "Table created.";
	}else{
		echo "failed";
	}
*/

//Mysqli OOP
/*
	$connect = new mysqli($host, $username, $password, $database);
	$sql = "CREATE TABLE IF NOT EXISTS employee(
				id INT(11) UNSIGNED AUTO_INCREMENT,
				name VARCHAR(255) NOT NULL,
				address VARCHAR(255) NOT NULL,
				timestamp DATETIME,
				PRIMARY KEY (id)
			)
		";
	if($connect->query($sql)){
		echo "Table created.";
	}else{
		echo "failed";
	}
*/

//PDO
/*
	try{
		$connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
		$connect->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE TABLE IF NOT EXISTS employee(
				id INT(11) UNSIGNED AUTO_INCREMENT,
				name VARCHAR(255) NOT NULL,
				address VARCHAR(255) NOT NULL,
				timestamp DATETIME,
				PRIMARY KEY (id)
			)
		";
		$connect->exec($sql);
		echo "Table created.";
	}catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
	$connect = NULL;
*/
?>