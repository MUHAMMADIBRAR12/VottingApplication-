<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$tahseal_name = $_POST['tahseal_name'];
		$city=$_POST['city'];
	
		 if($city=='PLEASE SELECT'){
		 	$sql="SELECT * FROM  tehsil where thsl_id='$id'";
		 	$sql=mysqli_query($conn,$sql);
		 	$row=mysqli_fetch_assoc($sql);
		 	$city = $row['thsl_cid'];
		 }
		 $sql = "UPDATE tehsil SET thsl_name = '$tahseal_name',thsl_cid='$city' WHERE thsl_id = '$id'";
		

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

	header('location: tahseal.php');

?>