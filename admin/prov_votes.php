<?php 
session_start();
include '../includes/dbcon.php';
if (!empty($_SESSION['role'])) {
?>
<?php include 'include/head.php'; ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php
include 'include/header.php';
?>

  <!-- Main Sidebar Container -->
  <?php
  include 'include/sidebar.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo 'http://localhost/voting_application'; ?>">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            </div>

            <div class="card">
              <div class="card-header">
                <button class="btn btn-danger"><i class="fa fa-window-restore"></i> Reset</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Voter Name</th>
                    <th>Candidate Name</th>
                    <th>Voter Phone Number</th>
                    <th>Party Name</th>
                    <th>City</th>
                    <th>Seat No</th>
                    <th>Gender</th>
                    <th>CNIC</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                   $sql = "SELECT *, a.firstname AS canfirst, a.lastname AS canlast, d.firstname AS votfirst 
                           FROM candidates AS a 
                           JOIN national_votes AS b ON b.candidate_id = a.id  
                           JOIN national_seats AS c ON c.seat_number = b.position_id 
                           JOIN voters AS d ON d.id = b.voters_id 
                           JOIN parties AS e ON a.partie_id = e.prty_id 
                           JOIN city AS f ON c.city = f.ci_id";
                   $query = $conn->query($sql);

                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                          <td><?php echo $row['votfirst']; ?></td>
                          <td><?php echo $row['canfirst'] . ' ' . $row['canlast']; ?></td>
                          <td><?php echo $row['phone_no']; ?></td>
                          <td><?php echo $row['party_name']; ?></td>
                          <td><?php echo $row['city_name']; ?></td>
                          <td><?php echo $row['seat_number']; ?></td>
                          <td><?php echo $row['gander']; ?></td>
                          <td><?php echo $row['CNIC']; ?></td>
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include 'include/footer.php';
  ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
</body>
</html>
<?php 
} else {
  header('location:index.php');
}
?>
