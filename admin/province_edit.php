<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		 $province_name = $_POST['province_name'];
		
		$sql = "UPDATE province SET province_name = '$province_name' WHERE id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'province updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: province.php');

?>