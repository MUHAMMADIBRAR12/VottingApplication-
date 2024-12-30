<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['add'])){
		$seat_number = $_POST['seat_number'];
		$province = $_POST['provinceadd'];
		$city = $_POST['cityadd'];
		$tahseal = $_POST['tahseal'];
		$area = $_POST['area'];

		// $sql = "SELECT * FROM city ORDER BY priority DESC LIMIT 1";
		// $query = $conn->query($sql);
		// $row = $query->fetch_assoc();

		// $priority = $row['priority'] + 1;
		
		 $sql = "INSERT INTO national_seats (seat_number, province,city,tahseal,area_id) VALUES ('$seat_number','$province','$city','$tahseal','$area')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'National seats added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: nationalseats.php');
?>