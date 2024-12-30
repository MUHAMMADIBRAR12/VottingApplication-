<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['edit'])){
	  $id = $_POST['id'];
	  $position_id = $_SESSION['user_id'];
	  $firstname=$_POST['firstname'];
	  $lastname=$_POST['lastname'];
	  $platform=$_SESSION['user_id'];
	  $cnic = $_POST['cnic'];
	  $city= $_POST['cityadd'];
	  $province = $_POST['province'];
	  $ph_number = $_POST['ph_number'];
	 
	  $sql="SELECT * FROM  candidates where id='$id'";
		 	$sql=mysqli_query($conn,$sql);
		 	$row=mysqli_fetch_assoc($sql);
		 	$type=$row['type'];
    if(($province=='PLEASE SELECT') OR ($city=='PLEASE SELECT')){
		 	$sql="SELECT * FROM  candidates where id='$id'";
		 	$sql=mysqli_query($conn,$sql);
		 	$row=mysqli_fetch_assoc($sql);
		 	if(($province=='PLEASE SELECT') AND ($city=='PLEASE SELECT')){

		 		$province = $row['prov_id'];
		 		$city= $row['city_id'];
		 	}
		 	elseif($province=='PLEASE SELECT'){
		 		$province = $row['prov_id'];
		 		
		 	}
		 	else{
		 		$city= $row['city_id'];
		 	}
		 }

		// $sql = "SELECT * FROM parties where id = '$id'";	
		// $query = mysqli_query($conn,$sql);
		// $row = mysqli_fetch_assoc($query);

		// if($password == $row['password']){
		// 	$password = $row['password'];
		// }
		// else{
		// 	$password = password_hash($password, PASSWORD_DEFAULT);
		// }

		 $sql = "UPDATE candidates SET firstname= '$firstname',lastname='$lastname', cnic = '$cnic',platform='$platform',ph_number='$ph_number' WHERE id = '$id'";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'party updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}
	if($type==0){
		header('location: candidates.php');
	}
	else{
		header('location: prov_candidate.php');
	}
	

?>