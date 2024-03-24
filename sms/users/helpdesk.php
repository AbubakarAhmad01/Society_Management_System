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
  <title>SMS | Helpdesk</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
 <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
            <h1>Helpdesk</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Helpdesk</li>
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
                <h3 class="card-title">Helpdesk</h3>
              </div>
              <!-- /.card-header -->

                    <?php $query=mysqli_query($con,"select * from helpdeskinfo ");
 while($row=mysqli_fetch_array($query)) 
 {
 ?>       


   <!-- form start -->
              <form role="form" method="post" name="helpdesk.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="currentpswd">Society Email Id</label>
                   <input type="email" name="email" required="required" value="<?php echo htmlentities($row['email']);?>" class="form-control" readonly>
                  </div>
                  <label for="newpswd">Secretry No </label>
                    <input type="text" name="secretryNo" required="required" value="<?php echo htmlentities($row['secretryNo']);?>" class="form-control"readonly>
               <label for="exampleInputEmail1">Securityguard No</label>
               <input type="text" name="securityguardNo" required="required" value="<?php echo htmlentities($row['securityguardNo']);?>" class="form-control"readonly>
				 <label for="exampleInputEmail1">Electrician No </label>
               <input type="text" name="electricianNo" required="required" value="<?php echo htmlentities($row['electricianNo']);?>" class="form-control"readonly>
				 <label for="exampleInputEmail1">Ambulance No</label>
                <input type="text" name="ambulanceNo" required="required" value="<?php echo htmlentities($row['ambulanceNo']);?>" class="form-control"readonly>
				 <label for="exampleInputEmail1">FireBrigade No</label>
               <input type="text" name="firebrigadeNo" required="required" value="<?php echo htmlentities($row['firebrigadeNo']);?>" class="form-control"readonly>
				 <label for="exampleInputEmail1">Police No</label>
              <input type="text" name="policeNo" required="required" value="<?php echo htmlentities($row['policeNo']);?>" class="form-control"readonly>
				 
                 <div class="card-footer">
                </div>
				</div>
				<?php } ?>
              </form> 
                                   
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
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Admin -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
 <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
</body>
</html>
<?php } ?>


				




