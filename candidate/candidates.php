<?php 
session_start();
include'../includes/dbcon.php';
if(!empty($_SESSION['role'])){
  ?>
<?php include'include/head.php';?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php
include'include/header.php';
?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php
  include'include/sidebar.php';
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
    <section class="content-header">
        <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
</section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">    
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <a href='#addnew' class="btn btn-danger btn-sm add btn-flat" data-toggle='modal' > <i class="fa fa-plus"></i> New </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">                
                  <thead>
                  <tr>
                    <th>SEAT NUMBER</th>
                    <th>Name</th>
                   
                    <th>Photo</th>
                    <th>CNIC</th>

                    <th>City</th>
                    <th>Province</th>
                    <th>Ph_number</th>
                    
                     <th>Status</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $mainid=$_SESSION['user_id'];
                $query="SELECT *,candidates.id as aid from candidates  JOIN national_seats ON national_seats.na_id=candidates.seat_id 
                      JOIN city ON  city.ci_id=national_seats.city  JOIN province ON  province.id=national_seats.province
                      JOIN parties ON  parties.prty_id=candidates.partie_id
                       where partie_id='$mainid' AND candidates.type='0'";

                    $select=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($select)){
                      $image=(!empty($row['photo']))? '../parties/'.$row['photo'] : '../parties/profile.jpg';
                      ?>
                  <tr>
                    <td><?php echo $row['seat_id'].' '.$row['party_name']?></td>
                    <td><?php echo $row['firstname'].' '.$row['lastname']?></td>
                  <td>
                            <img src='<?php echo $image; ?>' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id="<?php echo $row['id']; ?>"><span class='fa fa-edit'></span></a>

                  </td>
                      <td><?php echo $row['cnic']?></td>
                      <td><?php echo $row['city_name']?></td>
                      <td><?php echo $row['Province_name']?></td>
                      <td><?php echo $row['ph_number']?></td>
                      <td><?php echo $row['status']?></td>
                    
                    <td>
                            <button class='btn btn-success btn-sm edit btn-flat'  name="tools" data-id='<?php echo $row["aid"]; ?>'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='<?php echo $row["aid"]; ?>'><i class='fa fa-trash'></i> Delete</button>
                    </td>
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
 <?php include'include/footer.php';?>
  <!-- Control Sidebar -->


<?php include 'include/candidates_modal.php'; ?>

<script>
 


$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
 
  $.ajax({
    type: 'POST',
    url: 'candidates_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      // alert(response);
      $('.id').val(response.id);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      // $('#edit_positionID').val(response.position_id);
     $('#edit_platform').val(response.platform);
     $('#edit_cnic').val(response.cnic);
     $('#edit_ph_number').val(response.ph_number);
      // $('#edit_city').val(response.city_id); 
     $('#edit_active_status').val(response.active_status);
     $('#edit_email').val(response.email);
     // $('#edit_password').val(response.password);
            
    }
  });
}
</script>
</body>
</html>
<?php 
}else{
  header('location:index.php');
}
?>
