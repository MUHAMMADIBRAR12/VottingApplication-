<?php
session_start();
	
 include'../includes/dbcon.php';
	if(isset($_POST['delete'])){
		 $id = $_POST['id'];
		
		 $sql = "DELETE FROM voters WHERE id = '$id'";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter deleted successfully';
		}
		else{
			$_SESSION['error'] = mysqli_error($conn);
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: voters.php');
	
?>