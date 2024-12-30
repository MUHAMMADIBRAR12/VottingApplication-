<?php

	include'../../includes/dbcon.php';
	if($_POST['type'] == ""){
		$sql = "SELECT * FROM province";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['id']}'>{$row['Province_name']}</option>";
		}
	}else if($_POST['type'] == "stateData"){

		$sql = "SELECT * FROM city WHERE Province = {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['ci_id']}'>{$row['city_name']}</option>";
		}
	}
	else if($_POST['type'] == "tahseal"){

		$sql = "SELECT * FROM tehsil WHERE  thsl_cid= {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['thsl_id']}'>{$row['thsl_name']}</option>";
		}
	}
	else if($_POST['type'] == "area"){

		$sql = "SELECT * FROM area WHERE  tehseel_id= {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['area_id']}'>{$row['area_name']}</option>";
		}
	}
	echo $str;
 ?>
