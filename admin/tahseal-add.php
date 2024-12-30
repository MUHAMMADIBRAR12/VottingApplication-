<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['add'])){
		$tahseal_name = $_POST['tahseal_name'];
		$city = $_POST['city'];

		// $sql = "SELECT * FROM city ORDER BY priority DESC LIMIT 1";
		// $query = $conn->query($sql);
		// $row = $query->fetch_assoc();

		// $priority = $row['priority'] + 1;
		
		 $sql = "INSERT INTO tehsil (thsl_name, thsl_cid) VALUES ('$tahseal_name','$city')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'city added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: tahseal.php');
?>