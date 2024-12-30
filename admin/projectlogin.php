<?php
include_once'../includes/dbcon.php';
session_start();
if(isset($_POST['btn_login'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

    $select = "select * from admin where email='$username' OR username='$username' AND password='$password'";
    $select=mysqli_query($conn,$select);
    $row =mysqli_fetch_array($select);
    if($row['role']=='admin'){
    if(($row['username']==$username OR $row['email']==$username) AND $row['password']==$password AND $row['role']=="admin" AND $row['is_active']==1){
        $_SESSION['user_id']=$row['id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['fullname']=$row['firstname'];
        $_SESSION['role']=$row['role'];

        $message = 'success';
        header('location:dashboard.php');

    }else {
       // $errormsg = 'error';
        echo 'Your Acoount is disable';
    }
  }

}

?>