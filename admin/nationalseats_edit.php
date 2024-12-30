<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$seat_number = $_POST['seat_number'];
        $province = $_POST['province'];
		$city    = $_POST['city'];
		$tahseal = $_POST['tahseal'];

		if(($province=='PLEASE SELECT') OR ($city=='PLEASE SELECT')){
		 	$sql="SELECT * FROM  national_seats where na_id='$id'";
		 	$sql=mysqli_query($conn,$sql);
		 	$row=mysqli_fetch_assoc($sql);
		 	if(($province=='PLEASE SELECT') AND ($city=='PLEASE SELECT')){

		 		$province = $row['province'];
		 		$city= $row['city'];
		 	}
		 	elseif($province=='PLEASE SELECT'){
		 		$province = $row['Province'];
		 		
		 	}
		 	else{
		 		$city= $row['city'];
		 	}
		 }


		$sql = "UPDATE national_seats SET seat_number = '$seat_number', province = '$province', city = '$city', tahseal = '$tahseal' WHERE na_id = '$id'";
		 if($conn->query($sql)){
			$_SESSION['success'] = 'National Seats updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: nationalseats.php');

?>