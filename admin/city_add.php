<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['add'])){
		$city_name = $_POST['city_name'];
		$province = $_POST['province'];

		// $sql = "SELECT * FROM city ORDER BY priority DESC LIMIT 1";
		// $query = $conn->query($sql);
		// $row = $query->fetch_assoc();

		// $priority = $row['priority'] + 1;
		
		echo $sql = "INSERT INTO city (city_name, province) VALUES ('$city_name','$province')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'city added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: city.php');
?>