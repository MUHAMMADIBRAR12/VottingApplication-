<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM area WHERE area_id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'area deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: area.php');
	
?>