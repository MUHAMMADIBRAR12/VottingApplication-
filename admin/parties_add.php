<?php
session_start();
	include'../includes/dbcon.php';

	if(isset($_POST['add'])){
		
		 $partiename = $_POST['partiename'];
	   	 $chairmanname = $_POST['chairmanname'];
	   	  $password = $_POST['password'];
	   	 
	   	  $official_email= $_POST['officialemail'];
	   	 
	   	  $official_phone_no = $_POST['officialphoneno'];
	   	 
	   	  $office_address = $_POST['officeaddress'];
	   	 

		 $filename = $_FILES['photo']['name'];
		 $img_tmp = $_FILES['photo']['tmp_name'];
		 $img_size = $_FILES['photo']['size'];
		 $img_ext = explode('.',$img_tmp);
		 $img_ext = strtolower(end($img_ext));
		 $img_new = uniqid().'.'. $img_ext;

		if(!empty($filename)){
			move_uploaded_file($img_tmp,'../parties/'.$img_new);	
		}

		$dup=mysqli_query($conn,"SELECT* from parties WHERE official_email='$official_email' OR official_phone_no='$official_phone_no'");
         if(mysqli_num_rows($dup)>0){
         	$_SESSION['error'] = 'Email or phone number already exist';
         }
      else{   
    
		 $sql = "INSERT INTO  parties(party_name,chairman_name,password,official_email,official_phone_no,office_address,logo,active_status,role) VALUES ('$partiename','$chairmanname','$password','$official_email','$official_phone_no','$office_address','$img_new','1','partie')";

				if($conn->query($sql)){
						$_SESSION['success'] = 'Partie added successfully';
				}	
					else{
			$_SESSION['error'] = $conn->error;
		}
				}
			}
			else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	
	header('location:parties.php');
?>