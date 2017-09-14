<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "basics";

$id = 1;
$name = "ron seminiano";
$address = "555 tuna street !@#^($*&)85-_)(#&*$''";
$name = ucwords($name);
$address = ucwords($address);

//procedural
/*
	$connection = mysqli_connect($host, $username, $password, $database);
	$sql = "UPDATE employee SET name='$name', address='$address' WHERE id=$id";
	$query = mysqli_query($connection, $sql);
	if($query === TRUE){
		echo "Record has been updated.";
	}else{
		echo "ERROR!";
	}
*/

//mysqli OOP
/*
	$connection = new mysqli($host, $username, $password, $database);
	$sql = "UPDATE employee SET name='$name', address='$address' WHERE id=$id";
	$query = $connection->query($sql);
	if($query === TRUE){
		echo "Record has been updated.";
	}else{
		echo "ERROR!";
	}
*/

//mysqli OOP using prepared statement;
/*
	$connection = new mysqli($host, $username, $password, $database);
	$sql = "UPDATE employee SET name=?, address=? WHERE id=?";
	$prep = $connection->prepare($sql);
	//s = string, d = double or integer
	$prep->bind_param('ssd', $name, $address, $id);
	$prep->execute();
	if($prep->errno){
		echo "ERROR!";
	}else{
		echo "Record has been updated.";
	}
*/

//PDO prepared statement
/*
	try{
		$connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
		$connection->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE employee SET name=:name, address=:address WHERE id=:id";
		$stm = $connection->prepare($sql);
		$stm->bindParam(':name', $name);
		$stm->bindParam(':address', $address);
		$stm->bindParam(':id', $id);
		$stm->execute();
		echo "Record has been updated.";
	}catch(PDOException $e){
		echo "Error" . $e->getMessage();
	}
	$connection = NULL;
*/

?>