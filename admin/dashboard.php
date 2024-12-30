<?php
session_start();
include'../includes/dbcon.php';
include 'include/slugify.php';
if(!empty($_SESSION['role']) AND ($_SESSION['role']=='admin')){
  ?>
<!DOCTYPE html>
<html>
<?php
 include'include/head.php';
 ?>
<body class="hold-transition sidebar-mini layout-fixed">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Voting System</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo 'http://localhost/voting_application'; ?>">Home</a></li>
              <li class="breadcrumb-item active"> Voting System</li>
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
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-poll"></i></span>
              <?php
                $result ="select count(*) FROM Candidates";
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
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <!-- <?php
                $result ="select count(*) FROM parties";
                $main=mysqli_query($conn,$result);
                $row = mysqli_fetch_array($main);
                $total = $row[0];
              ?> -->

              <div class="info-box-content">
                <span class="info-box-text">No of Parties</span>
                <span class="info-box-number">
                   <?php echo $total; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <?php
                $result ="select count(*) FROM voters";
                $main=mysqli_query($conn,$result);
                $row = mysqli_fetch_array($main);
                $total = $row[0];
              ?>

              <div class="info-box-content">
                <span class="info-box-text">Total Voters</span>
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
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-id-badge "></i></span>
              <?php
                $result ="select count(*) FROM prov_votes";
                $main=mysqli_query($conn,$result);
                $row = mysqli_fetch_array($main);
                $total = $row[0];
              ?>

              <div class="info-box-content">
                <span class="info-box-text">PA Vote Cast</span>
                <span class="info-box-number">
                  <?php echo $total; ?>
                </span>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-2">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-id-badge "></i></span>
              <?php
                $result ="select count(*) FROM national_votes";
                $main=mysqli_query($conn,$result);
                $row = mysqli_fetch_array($main);
                $total = $row[0];
              ?>

              <div class="info-box-content">
                <span class="info-box-text">NA Vote Cast</span>
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
        <!-- Main row -->
       
        <!-- /.row (main row) -->
<?php
        $sql = "SELECT * FROM nationalpositions";
        $query = $conn->query($sql);
        $inc = 2;
        while($row = $query->fetch_assoc()){
          $inc = ($inc == 2) ? 1 : $inc+1; 
          if($inc == 1) echo "<div class='row'>";
          echo "
            <div class='col-sm-6'>
              <div class='box box-solid'>
                <div class='box-header with-border'>
                  <h4 class='box-title'><b>".$row['description']."</b></h4>
                </div>
                <div class='box-body'>
                  <div class='chart'>
                    <canvas id='".slugify($row['description'])."' style='height:200px'></canvas>
                  </div>
                </div>
              </div>
            </div>
          ";
          if($inc == 2) echo "</div>";  
        }
        if($inc == 1) echo "<div class='col-sm-6'></div></div>";
      ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
      </div><!-- /.container-fluid -->

      <!-- mainnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn -->





<?php include 'include/scripts.php'; ?>

<?php
  $sql = "SELECT * FROM national_seats";
  $query = $conn->query($sql);
  while($row = $query->fetch_assoc()){
  $sql = "SELECT * FROM candidates WHERE seat_id = '".$row['seat_number']."'";
    $cquery = $conn->query($sql);
    $carray = array();
    $varray = array();
    while($crow = $cquery->fetch_assoc()){
      array_push($carray, $crow['lastname']);
      $sql = "SELECT * FROM national_votes WHERE candidate_id = '".$crow['id']."'";
      $vquery = $conn->query($sql);
      array_push($varray, $vquery->num_rows);
    }
    $carray = json_encode($carray);
    $varray = json_encode($varray);
    ?>
    <script>
    $(function(){
      var rowid = '<?php echo $row['id']; ?>';
      var description = '<?php echo slugify($row['description']); ?>';
      var barChartCanvas = $('#'+description).get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData = {
        labels  : <?php echo $carray; ?>,
        datasets: [
          {
            label               : 'Votes',
            fillColor           : 'rgba(60,141,188,0.9)',
            strokeColor         : 'rgba(60,141,188,0.8)',
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : <?php echo $varray; ?>
          }
        ]
      }
      var barChartOptions                  = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero        : true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines      : true,
        //String - Colour of the grid lines
        scaleGridLineColor      : 'rgba(0,0,0,.05)',
        //Number - Width of the grid lines
        scaleGridLineWidth      : 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines  : true,
        //Boolean - If there is a stroke on each bar
        barShowStroke           : true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth          : 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing         : 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing       : 1,
        //String - A legend template
        legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive              : true,
        maintainAspectRatio     : true
      }

      barChartOptions.datasetFill = false
      var myChart = barChart.HorizontalBar(barChartData, barChartOptions)
      //document.getElementById('legend_'+rowid).innerHTML = myChart.generateLegend();
    });
    </script>
    <?php
  }
?>

<?php
include'include/footer.php';
?>
<?php
}else{
  header('location:index.php');
}
?>