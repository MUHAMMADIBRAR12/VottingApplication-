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

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <div class="card-header">
                <a href='#addnew' class="btn btn-danger btn-sm add btn-flat" data-toggle='modal' > <i class="fa fa-plus"></i> New </a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                
                  <thead>
                  <tr>
                    <th>Seat No</th>
                    <th>Province</th>
                    <th>City</th>
                    <th>Tahseal</th>
                    <th>Tools</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                     $query="SELECT * from provincial_seats as a join province as b ON a.Province =b.id join city as c ON a.city_id=c.ci_id join tehsil as d ON a.tahseal=d.thsl_id";
                    $select=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($select)){
                     
                      ?>
                  <tr>
                    
                    <td><?php echo $row['seat_no']?></td>
                    <td><?php echo $row['Province_name']?></td>
                    <td><?php echo $row['city_name']?></td>
                    <td><?php echo $row['thsl_name']?></td>
                   
                    <td>
                            <button class='btn btn-success btn-sm edit btn-flat'  name="tools" data-id='<?php echo $row["pr_id"]; ?>'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='<?php echo $row["pr_id"]; ?>'><i class='fa fa-trash'></i> Delete</button>
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
<?php
include'include/footer.php';
?>


  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php
include'include/script voter.php';
?>


<?php include 'include/provincialseats_modal.php'; ?>

<script>
  

$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    alert(id);
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
    url: 'provincialseats_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      
      $('.id').val(response.pr_id);

      
      $('#edit_province').val(response.province);
      
      $('#edit_tahseal').val(response.tahseal);

      // $('#edit_password').val(response.password);
      // $('#edit_CNIC').val(response.CNIC);
      //  $('#edit_city').val(response.city);
      
      //  $('#edit_phone_no').val(response.phone_no);
      
      //  $('#edit_address').val(response.address);
      //  $('#edit_voters_id').val(response.voters_id);
      
    }
  });
}
</script>
<script type="text/javascript">
  $(document).ready(function(){
    function loadData(type, category_id){
      $.ajax({
        url : "include/load_prov.php",
        type : "POST",
        data: {type : type, id : category_id},
        success : function(data){
          if(type == "stateData"){
            $("#state").html(data);
          }else if(type == "tahseal"){
            $("#tahseal").html(data);
          }
          else{
            $("#country").append(data);
          }
          
        }
      });
    }

    loadData();

    $("#country").on("change",function(){
      var country = $("#country").val();

      if(country != ""){
        loadData("stateData", country);
      }else{
        $("#state").html("");
      }

      
    })
    $("#state").on("change",function(){
      var country = $("#state").val();

      if(country != ""){
        loadData("tahseal", country);
      }else{
        $("#tahseal").html("");
      }

      
    })
  });
</script>
</body>
</html>
<?php 
}else{
  header('location:index.php');
}
?>
