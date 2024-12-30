<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['add'])){
		$province_name = $_POST['province_name'];
		

		// $sql = "SELECT * FROM city ORDER BY priority DESC LIMIT 1";
		// $query = $conn->query($sql);
		// $row = $query->fetch_assoc();

		// $priority = $row['priority'] + 1;
		
		$sql = "INSERT INTO province (province_name) VALUES ('$province_name')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'province name added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: province.php');
?>