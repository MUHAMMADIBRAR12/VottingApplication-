<?php
include '../includes/dbcon.php';
$sql="SELECT*FROM province";
$query = mysqli_query($conn,$sql);
$str="";
while($row= mysqli_fetch_assoc($query)){
$str.="<option value='{$row['id']}'>{$row['province_name']}</option";

}


?>