<?php
session_start();
include'../includes/dbcon.php';
$username=$_POST['email'];
$password=$_POST['password'];
$que="SELECT * FROM admin where username='$username' AND password='$password'";
$sql=mysqli_query($conn,$que);
$row=mysqli_fetch_assoc($sql);
print_r($row);
// if(){

// }
$_SESSION['ahtesham']=$row['username'];
$_SESSION['password']=$row['password'];

?>
<a href='chksession.php'>GO TO CHK THE VALUE</a>