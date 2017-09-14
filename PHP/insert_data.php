<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "basics";

//Procedural
/*
	$connection = mysqli_connect($host, $username, $password, $database);
	if($connection){
		$name = "ron gerald";
		$address = "555 tuna street";
		$name = ucwords($name);
		$address = ucwords($address);
		//validation
		$sql = "SELECT * FROM employee WHERE name='$name' LIMIT 1";
		$query = mysqli_query($connection, $sql);
		$count = mysqli_num_rows($query);
		if($count <= 0){
			$sql = "INSERT INTO employee (name, address, timestamp)
					VALUES ('$name', '$address', NOW())
				";
			$insert = mysqli_query($connection, $sql);
			if($insert){
				echo "success";
			}else{
				echo "failed";
			}	
		}else{
			echo "exist";
		}
		
	}else{
		echo "Failed to connect on the database.";
	}
*/

//Mysqli OOP
/*
	$connection = new mysqli($host, $username, $password, $database);

	$name = "kyle gerald";
	$address = "555 tuna street";
	$name = ucwords($name);
	$address = ucwords($address);
	// validation
	$sql = "SELECT * FROM employee WHERE name='$name' LIMIT 1";
	$query = $connection->query($sql);
	$count = $query->num_rows;
	if($count <= 0){
		// insert
		$sql = "INSERT INTO employee (name, address, timestamp) VALUES ('$name', '$address', NOW())";
		if($connection->query($sql)){
			echo "success";
		}else{
			echo "failed";
		}
	}else{
		echo "exist";
	}
*/

//PDO
/*
	try{
		$name = "kyle gerald";
		$address = "555 tuna street";
		$name = ucwords($name);
		$address = ucwords($address);
		$connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
		$connection->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//validation
		$sql = "SELECT COUNT(*) FROM employee WHERE name='$name' LIMIT 1";
		$stm = $connection->prepare($sql);
		$stm->execute();
		$count = $stm->fetchColumn();
		if($count <= 0){
			$sql = "INSERT INTO employee (name, address, timestamp) VALUES ('$name', '$address', Now())";
			$connection->exec($sql);
			echo "success";	
		}else{
			echo "exist";
		}
	}catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
*/
?>