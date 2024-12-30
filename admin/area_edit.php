<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		 $area_name = $_POST['area_name'];
	    	$tehseel_id=$_POST['city'];
	
		 if($tehseel_id=='PLEASE SELECT'){
		 	$sql="SELECT * FROM  area where area_id='$id'";
		 	$sql=mysqli_query($conn,$sql);
		 	$row=mysqli_fetch_assoc($sql);
		 	$tehseel_id = $row['tehseel_id'];
		 }
	$sql = "UPDATE area SET area_name = '$area_name',tehseel_id='$tehseel_id' WHERE area_id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'area updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: area.php');

?>