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
                    <th>Name</th>
                    <th>Member</th>
                    <th>Photo</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Ph_no</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query="SELECT * from parties";
                    $select=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($select)){
                      $image=(!empty($row['logo']))? '../parties/'.$row['logo'] : '../parties/profile.jpg';
                      ?>
                  <tr>
                    
                    <td><?php echo $row['party_name']?></td>
                    <td><?php echo $row['chairman_name']?></td>
                    <td>
                            <img src='<?php echo $image; ?>' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id="<?php echo $row['prty_id']; ?>"><span class='fa fa-edit'></span></a>

                    </td>
                 
             <td><?php echo $row['password']?></td>
             <td><?php echo $row['official_email']?></td>
             <td><?php echo $row['official_phone_no']?></td>
             <td><?php echo $row['office_address']?></td>
             <td>
                            <button class='btn btn-success btn-sm edit btn-flat'  name="tools" data-id='<?php echo $row["prty_id"]; ?>'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='<?php echo $row["prty_id"]; ?>'><i class='fa fa-trash'></i> Delete</button>
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


<?php include 'include/parties_modal.php'; ?>

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
    url: 'parties_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      // alert(response);
      $('.id').val(response.prty_id);

      $('#edit_party_name').val(response.party_name);
      $('#edit_chairman_name').val(response.chairman_name);
      $('#edit_password').val(response.password);
      
      $('#edit_email').val(response.official_email);
     
      $('#edit_phone_no').val(response.official_phone_no);
      $('#edit_address').val(response.office_address);
            
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
