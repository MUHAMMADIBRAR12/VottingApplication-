<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['add'])){
		
		$province = $_POST['provinceadd'];
		$tahseal = $_POST['tahsealadd'];
		$cityid = $_POST['city'];
		$seatno = $_POST['seatnumber'];
		
		$sql = "INSERT INTO provincial_seats (province,tahseal,seat_no,city_id) VALUES ('$province','$tahseal','$seatno','$cityid')";
		 
		if($conn->query($sql)){
			$_SESSION['success'] = 'Provincial seats added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: provincialseats.php');
?>