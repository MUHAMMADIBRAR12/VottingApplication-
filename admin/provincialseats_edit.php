<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
        $province = $_POST['province'];
		$tahseal = $_POST['tahseal'];


		 if($province=='PLEASE SELECT'){
		 	$sql="SELECT * FROM  provincial_seats where pr_id='$id'";
		 	$sql=mysqli_query($conn,$sql);
		 	$row=mysqli_fetch_assoc($sql);
		 	$province = $row['province'];
		 }

		  $sql = "UPDATE provincial_seats SET  province = '$province',  tahseal = '$tahseal' WHERE pr_id = '$id'";
		
		 if($conn->query($sql)){
			$_SESSION['success'] = 'provincial Seats updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: provincialseats.php');

?>