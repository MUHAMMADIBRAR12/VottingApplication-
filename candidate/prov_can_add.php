<?php
session_start();
	include'../includes/dbcon.php';

	if(isset($_POST['add'])){
		 session_start();
		 $partie_id=$_SESSION['user_id'];
		 $firstname = $_POST['firstname'];
	   	 $lastname = $_POST['lastname'];
	   	 $platform = $_SESSION['user_id'];
	   	 $cnic = $_POST['cnic'];
	   	 $seatno=$_POST['seatno'];
	   	 $ph_number = $_POST['phone_no'];
	   	 $email = $_POST['email'];

	   	 //$password = $_POST['password'];
		 $filename = $_FILES['photo']['name'];
		 $img_tmp = $_FILES['photo']['tmp_name'];
		 $img_size = $_FILES['photo']['size'];
		 $img_ext = explode('.',$img_tmp);
		 $img_ext = strtolower(end($img_ext));
		 $img_new = uniqid().'.'. $img_ext;

		if(!empty($filename)){
			move_uploaded_file($img_tmp,'../parties/'.$img_new);	
		}
		$dup=mysqli_query($conn,"SELECT* from candidates WHERE email='$email' OR ph_number='$ph_number' OR cnic='$cnic' ");
         if(mysqli_num_rows($dup)>0){
         	$_SESSION['error'] = 'Email or phone number already exist';
         }
    else{
		$sql = "INSERT INTO  candidates(firstname,lastname,platform,cnic,ph_number,email,photo,status,seat_id,partie_id,type) VALUES ('$firstname','$lastname','$platform','$cnic','$ph_number','$email','$img_new','1','$seatno','$partie_id','1')";
				if($conn->query($sql)){
						$_SESSION['success'] = 'Partie added successfully';
				}	
				else{
					$_SESSION['error'] = $sql.$conn->error;
				}
			}
    }
		
	header('location:prov_candidate.php');
		
?>