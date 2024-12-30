<?php
session_start();
include'../includes/dbcon.php';
if(!empty($_SESSION['role']) AND ($_SESSION['role']=='partie')){
  include 'include/head.php';
  ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include 'include/header.php';
  include 'include/sidebar.php';
  ?>

  <!-- Main Sidebar Container -->
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Voting System</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo 'http://localhost/voting_application'; ?>">Home</a></li>
              <li class="breadcrumb-item active">Voting System</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-person-booth"></i></span>
              <?php
                $result ="select count(*) FROM national_seats";
                $main=mysqli_query($conn,$result);
                $row= mysqli_fetch_array($main);
                $total = $row[0];
              ?>
              <div class="info-box-content">
                <span class="info-box-text">No of National Seat</span>
                <span class="info-box-number">
                  <?php echo $total; ?>
                  <!-- <small>%</small> -->
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
                    <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-poll-h"></i></span>
              <?php
                $result ="select count(*) FROM provincial_seats";
                $main=mysqli_query($conn,$result);
                $row= mysqli_fetch_array($main);
                $total = $row[0];
              ?>
              <div class="info-box-content">
                <span class="info-box-text">No of Provencial Seat</span>
                <span class="info-box-number">
                  <?php echo $total; ?>
                  <!-- <small>%</small> -->
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
                    <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-poll"></i></span>
              <?php
                $partid=$_SESSION['user_id'];
                $result ="select count(*) FROM Candidates where partie_id='$partid'";
                $main=mysqli_query($conn,$result);
                $row = mysqli_fetch_array($main);
                $total = $row[0];
              ?>
              <div class="info-box-content">
                <span class="info-box-text">No of Candidates</span>
                <span class="info-box-number"><?php echo $total; ?>
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
            <?php
                $result ="select count(*) FROM province";
                $main=mysqli_query($conn,$result);
                $row = mysqli_fetch_array($main);
                $total = $row[0];
              ?>
              <div class="info-box-content">
                <span class="info-box-text">No of Provinces</span>
                <span class="info-box-number"><?php echo $total;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
                    <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <?php
                $result ="select count(*) FROM city";
                $main=mysqli_query($conn,$result);
                $row = mysqli_fetch_array($main);
                $total = $row[0];
              ?>

              <div class="info-box-content">
                <span class="info-box-text">No of City</span>
                <span class="info-box-number">
                  <?php echo $total; ?>
                </span>
              </div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
                    <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-2">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-id-badge "></i></span>
               <?php
                $result ="select count(*) FROM city";
                $main=mysqli_query($conn,$result);
                $row = mysqli_fetch_array($main);
                $total = $row[0];
              ?>               
           <div class="info-box-content">
                <span class="info-box-text">Total Vote Cast</span>
                <span class="info-box-number">
                  <?php echo $total; ?>
                </span>
              </div>
             
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include 'include/footer.php';
}else{
  header('location:index.php');
}
?>