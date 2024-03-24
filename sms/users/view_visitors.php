<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
	date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
	$visitorName=$_POST['visitorName'];
	$contactNo=$_POST['contactNo'];
	$address=$_POST['address'];
	$whomTomeet=$_POST['whomTomeet'];
	$reasonTomeet=$_POST['reasonTomeet'];
$sql=mysqli_query($con,"insert into manage_visitors(visitorName,contactNo,address,whomTomeet,reasonTomeet) values('$visitorName','$contactNo','$address','$whomTomeet','$reasonTomeet')");
$_SESSION['msg']="Visitor Added Successfully !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from manage_visitors where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="visitor deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMS | View Visitor's</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
 <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
  <style>
  .tb-h{
	  width:400px;
  }
  </style>
  

  
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php include("includes/sidebar.php");?>
 
 <!---start--->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-12">
            <h1>View Visitor's</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Visitor's</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Visitors Details</h3>
              </div>
              <!-- /.card-header -->

   <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                            <th>Visitor Id</th>
											<th>Visitor's Name</th>
											<th>Contact</th>
											<th class="tb-h">Address</th>
											<th>Whom To Meet</th>
											<th>Reason To Meet</th>
											<th>In Time</th>
											<th>Remark</th>
											<th>Out Time</th>
											
                  </tr>
                  </thead>
                  <tbody>
               <?php $query=mysqli_query($con,"select * from manage_visitors");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<<td><?php echo htmlentities($row['visitorName']);?></td>
											<td><?php echo htmlentities($row['contactNo']);?></td>
											<td> <?php echo htmlentities($row['address']);?></td>
											<td> <?php echo htmlentities($row['whomTomeet']);?></td>
											<td> <?php echo htmlentities($row['reasonTomeet']);?></td>
											<td> <?php echo htmlentities($row['inTime']);?></td>
											<td> <?php echo htmlentities($row['remark']);?></td>
											<td><?php echo htmlentities($row['outTime']);?></td>
											
											
										</tr>
										<?php $cnt=$cnt+1; } ?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                                            <th>Visitor Id</th>
											<th>Visitor's Name</th>
											<th>Contact</th>
											<th>Address</th>
											<th>Whom To Meet</th>
											<th>Reason To Meet</th>
											<th>In Time</th>
											<th>Remark</th>
											<th>Out Time</th>
											
                  </tr>
                  </tfoot>
                </table>
              </div>                                      

 

                                  
<!-- /.form group -->
     </div>                 
     </div>
     </div>
     </div>
	 </section>
<!---content-wrapper--->
<!---footer------->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
<?php } ?>

			