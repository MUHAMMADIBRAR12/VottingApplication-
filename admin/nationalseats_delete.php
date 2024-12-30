<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM national_seats WHERE na_id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'National Seats deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: nationalseats.php');
	
?>