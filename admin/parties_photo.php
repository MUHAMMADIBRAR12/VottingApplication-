<?php
session_start();
include '../includes/dbcon.php';
	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$img = $_FILES['photo']['name'];

		$img_tmp = $_FILES['photo']['tmp_name'];
		$img_size = $_FILES['photo']['size'];
		$img_ext = explode('.', $img);
		$img_ext = strtolower(end($img_ext));
		$img_new = uniqid().'.'. $img_ext;

		if(!empty($img)){
			move_uploaded_file($img_tmp,'../parties/'.$img_new);	
		}
		
		$sql = "UPDATE parties SET logo = '$img_new' WHERE prty_id= '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = "Photo updated successfully";
?>
			 


<?php

		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select party to update photo first';
	}

	header('location:parties.php');
?>