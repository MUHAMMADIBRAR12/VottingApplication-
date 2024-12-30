<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		 $city_name = $_POST['city_name'];
		$province = $_POST['province'];
	
		 if($province=='PLEASE SELECT'){
		 	$sql="SELECT * FROM  city where ci_id='$id'";
		 	$sql=mysqli_query($conn,$sql);
		 	$row=mysqli_fetch_assoc($sql);
		 	$province = $row['Province'];
		 }
		$sql = "UPDATE city SET city_name = '$city_name', province = '$province' WHERE ci_id = '$id'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'city updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: city.php');

?>