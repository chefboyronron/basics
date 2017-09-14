<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "basics";
//Procedural
/*
	$connection = mysqli_connect($host, $username, $password, $database);
	$sql = "SELECT * FROM employee WHERE id=1 ORDER BY id ASC";
	$query = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($query);
	if($count > 0){
		while($row = mysqli_fetch_assoc($query)){
			var_dump($row);
		}
	}else{
		echo "No records or not exists on database";
	}
*/

//myslqi OOP
/*
	$connection = new mysqli($host, $username, $password, $database);
	$sql = "SELECT * FROM employee WHERE id=2 ORDER BY id ASC";
	$query = $connection->query($sql);
	$count = $query->num_rows;
	if($count > 0){
		while($row = $query->fetch_assoc()){
			var_dump($row['name']);
		}
	}else{
		echo "No records or not exists on database";
	}
*/

//PDO
/*
	$connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
	$sqlCount = "SELECT COUNT(*) FROM employee WHERE id=1";
	$stmCount = $connection->prepare($sqlCount);
	$stmCount->execute();
	$count = $stmCount->fetchColumn();
	if($count > 0){
		$sql = "SELECT * FROM employee WHERE id=1 ORDER BY id ASC";
		$stm = $connection->prepare($sql);
		$stm->execute();
		$stm->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stm->fetchall();
		foreach($result as $row){
			var_dump($row['name']);
		}
	}else{
		echo "No records or not exists on database";
	}
*/
?>