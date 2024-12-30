<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
 
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">WELCOME PLEASE Register</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Name" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email/useremail" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit"  name='btn_signup' class="btn btn-secondary btn-block">Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
    <!--   <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src='../assets/js/sweetalert.js'></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
<?php
include_once'../includes/dbcon.php';
session_start();
if(isset($_POST['btn_signup'])){
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $useremail = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($useremail) && !empty($password)){
    $select = "INSERT INTO admin(`username`,`firstname`,`lastname`,`email`,`password`) VALUES($username,$firstname,$lastname,$useremail, $password)";
    // $select=mysqli_query($conn,$select);
    // if(mysqli_num_rows($select) ==1){
    // $row =mysqli_fetch_array($select);
    // if($row['role']=='admin'){
    // if(($row['useremail']==$useremail OR $row['email']==$useremail) AND ($row['password']==$password) AND ($row['role']=="admin")AND ($row['is_active']==1)){
    //     $_SESSION['user_id']=$row['id'];
    //     $_SESSION['useremail']=$row['useremail'];
    //     $_SESSION['fullname']=$row['firstname'];
    //     $_SESSION['role']=$row['role'];

        $message = 'success';
        header('location:index.php');
    }else {
      echo '<script type="text/javascript">

$(document).ready(function(){

  swal({
    position: "top-end",
    type: "warning",
    title: "Your account is disabled",
    showConfirmButton: false,
    
  })
});

</script>
';
    }
  }

else{

   echo '<script type="text/javascript">

$(document).ready(function(){

  swal({
    position: "top-end",
    type: "warning",
    title: "Your Email and password is incorrect",
    showConfirmButton: false,
    
  })
});

</script>
';
}

{

   echo '<script type="text/javascript">

$(document).ready(function(){

  swal({
    position: "top-end",
    type: "warning",
    title: "Please Fill The Input Fields",
    showConfirmButton: false,
    
  })
});

</script>
';
}

?>
<style>
  .login-page{
background-color: #568a56;
  }
  .login-box{
    background-color: #568a56;
  }
  .login-box{
    background-color: #244024;
  }
  .login-card-body{
    background-color: #244024;
  }
  a{
    color:green;
  }
</style>
  