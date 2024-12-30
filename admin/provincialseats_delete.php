<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM provincial_seats WHERE pr_id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'provincial Seats deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: provincialseats.php');
	
?>