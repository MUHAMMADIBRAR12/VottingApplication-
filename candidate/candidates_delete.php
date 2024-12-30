<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['delete'])){
	 $id = $_POST['id'];
	 
	  $sql="SELECT * FROM  candidates where id='$id'";
		 	$sql=mysqli_query($conn,$sql);
		 	$row=mysqli_fetch_assoc($sql);
		 	$type=$row['type'];

		 $sql = "DELETE FROM candidates WHERE id = '$id'";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'candidates deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}
if($type==0){
		header('location: candidates.php');
	}
	else{
		header('location: prov_candidate.php');
	}
	
?>