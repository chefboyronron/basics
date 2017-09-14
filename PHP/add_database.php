<?php

$host = "localhost";
$username = "root";
$password = "";

//Procedural
/*
	$connect = mysqli_connect($host, $username, $password);
	if($connect){
		$query = mysqli_query($connect, "CREATE DATABASE IF NOT EXISTS basics");
		if($query){
			echo "Database created!";
		}else{
			echo "Database creation failed";
		}
	}
	else {
		echo "failed";
	}
*/

//Mysqli OOP
/*
	$connect = new mysqli($host, $username, $password);
	if(!$connect->connect_error){
		$sql = "CREATE DATABASE IF NOT EXISTS basics";
		if($connect->query($sql) === TRUE){
			echo "Database created";
		}else{
			echo "Database creation failed";
		}
	}else{
		echo "failed";
	}
*/

//PDO
/*
	try{
		$connect = new PDO("mysql:host=$host", $username, $password);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE IF NOT EXISTS basics";
		$connect->exec($sql);
		echo "Database created";
	}catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
	$connect = null;
*/

?>