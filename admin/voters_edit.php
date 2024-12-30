<?php
session_start();
 include'../includes/dbcon.php';
	if(isset($_POST['edit'])){
		 $id = $_POST['id'];
		 $firstname = $_POST['firstname'];
	   $fathername = $_POST['fathername'];
		 $password = $_POST['password'];
	 $CNIC = $_POST['CNIC'];
		$city = $_POST['city'];
		 $phone_no = $_POST['phone_number'];
		 $address=$_POST['address'];
		$voters_id = $_POST['voters_id'];


		$sql = "SELECT * FROM voters WHERE id = $id";
	
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);

		 $sql = "UPDATE voters SET firstname = '$firstname', fathername = '$fathername' , password = '$password', CNIC = '$CNIC', city = '$city', phone_no = '$phone_no', address = '$address', voters_id	 = '$voters_id' WHERE id = '$id'";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: voters.php');

?>