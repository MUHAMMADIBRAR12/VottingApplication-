<?php
session_start();
	include '../includes/dbcon.php';

	if(isset($_POST['edit'])){
		 $id = $_POST['id'];
		 $party_name = $_POST['party_name'];
	  $chairman_name=$_POST['chairman_name'];
	  $password=$_POST['password'];
	  $official_email=$_POST['official_email'];
	  $official_phone_no =$_POST['official_phone_no'];
	  $office_address=$_POST['office_address'];

	


		// $sql = "SELECT * FROM parties where id = '$id'";	
		// $query = mysqli_query($conn,$sql);
		// $row = mysqli_fetch_assoc($query);

		// if($password == $row['password']){
		// 	$password = $row['password'];
		// }
		// else{
		// 	$password = password_hash($password, PASSWORD_DEFAULT);
		// }

		 $sql = "UPDATE parties SET party_name = '$party_name', chairman_name = '$chairman_name',password='$password',official_email='$official_email',official_phone_no='$official_phone_no',office_address='$office_address' WHERE prty_id = '$id'";
		
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

	header('location: parties.php');

?>