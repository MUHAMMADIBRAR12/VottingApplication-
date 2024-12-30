<?php 
session_start();
echo $_SESSION['ahtesham'];
echo $_SESSION['password'];
if (isset($_POST['logout'])) {
	# code...
session_destroy ();
header('location:distroyvaluechk.php');

}
?>
<form action='' method='post'>
<input type='submit' name='logout' value='LOGOUT'>
</form>