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

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMS |View Bills</title>

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
            <h1>View Bills</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="viewbills.php">Home</a></li>
              <li class="breadcrumb-item active">View Bills</li>
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
                <h3 class="card-title">View Bills</h3>
              </div>
              <!-- /.card-header -->

   <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                            <th>Bill No</th>
											<th> Month Of Bill</th>
											<th> Bill Date</th>
											<th>Flat No</th>
											<th>Contact No</th>
											<th>Status </th>
											<th>Maintainence Charges </th>
											<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
<?php $query=mysqli_query($con,"select * from managebills where user='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											
											<td> <?php echo htmlentities($row['monthofBill']);?></td>
											<td> <?php echo htmlentities($row['billDate']);?></td>
											
											
											<td><?php echo htmlentities($row['flatno']);?></td>
											<td><?php echo htmlentities($row['contact']);?></td>
											
												<td><?php $query=mysqli_query($con,"select * from payments ");
                      while($row=mysqli_fetch_array($query)){
                      if($row['billStatus']=="")
											{ echo "Not Paid";
} else {
										 echo "paid";
										 }}?></td>
											
										<td><?php $query=mysqli_query($con,"select * from managebills where user='".$_SESSION['login']."'");
                    while($row=mysqli_fetch_array($query)){
                    echo htmlentities($row['maintainenceCharge']);}?></td>							
											<td>
											
											<a href="viewbilldetails.php?uid=<?php $query=mysqli_query($con,"select * from managebills where user='".$_SESSION['login']."'");
                    while($row=mysqli_fetch_array($query)){
                      echo htmlentities($row['id']);}?>"><button type="button" class="btn btn-primary">View Bill Detials</button></a>
											</td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                                            <th>Bill No</th>
											<th> Month Of Bill</th>
											<th> Bill Date</th>
											<th>Flat No</th>
											<th>Contact No</th>
											<th>Status </th>
											<th>Maintainence Charges </th>
											<th>Action</th>
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

			