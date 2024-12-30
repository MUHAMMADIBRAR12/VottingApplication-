<?php
session_start();
	include'../includes/dbcon.php';
	include'../sendsms.php';
	if(isset($_POST['add'])){
		
		 $firstname = $_POST['firstname'];
	   	 $fathername = $_POST['fathername'];
		 $password = $_POST['password'];
		 $gender = $_POST['gender'];
		 $CNIC = $_POST['CNIC'];
		 $city = $_POST['city'];
		 $provence_id = $_POST['provinceadd'];
		 $tehseel_id = $_POST['tahsealadd'];
		 $area_id = $_POST['areaadd'];
	     $phone_no = $_POST['phone_number'];
		 $address=$_POST['address'];

		 $filename = $_FILES['photo']['name'];
		 $img_tmp = $_FILES['photo']['tmp_name'];
		 $img_size = $_FILES['photo']['size'];
		 $img_ext = explode('.',$img_tmp);
		 $img_ext = strtolower(end($img_ext));
		 $img_new = uniqid().'.'. $img_ext;

		if(!empty($filename)){
			move_uploaded_file($img_tmp,'../voters_image/'.$img_new);	
		}


		//generate voters id
		$set = '0123456789';
		$voter = substr(str_shuffle($set), 0,5);

		 $dup=mysqli_query($conn,"SELECT* from voters WHERE CNIC='$CNIC' OR phone_no='$phone_no'");
         if(mysqli_num_rows($dup)>0){
         	$_SESSION['error'] = 'CNIC or phone number already exist';
         }
      else{   

			$sql = "INSERT INTO voters (voters_id, password, firstname, fathername, CNIC,photo,city,phone_no,address,provence_id,tehseel_id,is_active,role,gander,area_id) VALUES ('$voter', '$password', '$firstname', '$fathername', '$CNIC','$img_new','$city','$phone_no','$address','$provence_id','$tehseel_id','0','voter','$gender','$area_id')";

     	if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
			// $client->messages->create(
            //   // the number you'd like to send the message to
            // '+92'.$phone_no,
            // [
            //   // A Twilio phone number you purchased at twilio.com/console
            //   'from' => '+13237653172',
            //   // the body of the text message you'd like to send
            //     'body' => 'Welcome '.$firstname.' You are Registered For Cast vote your Account loginId = '.$voter.' and your Password = '.$_POST['password']
            // ]);
		}	
		else{
			$_SESSION['error'] = $conn->error;
		}
	}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>