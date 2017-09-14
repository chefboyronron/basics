<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "basics";
$id = 2;

//procedural
/*
	$connection = mysqli_connect($host, $username, $password, $database);
	$sql = "DELETE FROM employee WHERE id=$id LIMIT 1";
	$query = mysqli_query($connection, $sql);
	if($query){
		echo "Record has been deleted.";
	}else{
		echo "failed";
	}
*/

//mysqli OOP
/*
	$connection = new mysqli($host, $username, $password, $database);
	$sql = "DELETE FROM employee WHERE id=$id LIMIT 1";
	$query = $connection->query($sql);
	if($query){
		echo "Record has been deleted.";
	}else{
		echo "failed";
	}
*/
//PDO
/*
	try{
		$connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stm = $connection->prepare("DELETE FROM employee WHERE id=$id LIMIT 1");
		$stm->execute();
		echo "record has been deleted.";
	}catch(PDOException $e){
		echo "Error" . $e->getMessage();
	}
*/
?>