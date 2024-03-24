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
	$cardNo=$_POST['cardNo'];
	$cardExp=$_POST['cardExp'];
	$cardCvc=$_POST['cardCvc'];
	$billStatus=$_POST['billStatus']="1";
	
$sql=mysqli_query($con,"insert into payments(cardNo,cardExp,cardCvc,billStatus) values('$cardNo','$cardExp','$cardCvc','$billStatus')");
$_SESSION['msg']="Payment Successfull !!";

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMS |Pay Bill</title>

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
 
  <style>
  .card-footer{
	   text-align:center;
  }
 .btn{
	 padding: 10px 300px;
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
            <h1>Pay Bills</h1>
			
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="viewbills.php">Home</a></li>
              <li class="breadcrumb-item active">Pay Bills</li>
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
                <h3 class="card-title">CREDIT/DEBIT CARD PAYMENT</h3>
				  <div class="col-md-12 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png"> </div>
              </div>
              <!-- /.card-header -->
<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
   <!-- /.card-header -->
              <div class="card-body">
                <!-- form start -->
<form role="form" method="post" name="manage_bills" >
<?php
$query=mysqli_query($con,"select * from managebills where user='".$_SESSION['login']."'");
while($row=mysqli_fetch_array($query))
{
?>	
                <div class="card-body">
                <div class="form-group">
                    <label for="currentpswd">CARD NUMBER</label>
					<input type="tel" maxlength="16"   placeholder="••••     ••••     ••••    ••••" autocomplete="cc-number" name="cardNo" class="form-control" required> 
                  </div>

                  <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">CARD EXPIRY </label>
                     <input type="tel" maxlength="5"  placeholder=" •• / ••"  autocomplete="cc-exp" name="cardExp" class="form-control" required>
                  </div>
				  </div>
				
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">CARD CVC</label>
                    <input type="tel" maxlength="4"  placeholder="••••" autocomplete="off" name="cardCvc"   class="form-control" required>
                  </div>
				  </div>
				  </div>

				  
				   <div class="form-group">
                    <label for="currentpswd">CARD HOLDER NAME</label>
					<input type="text"  placeholder=""  name="name" value="<?php echo  htmlentities($row['name']);?>" class="form-control"  readonly>
                  </div>
				   <div class="form-group">
                    <label for="currentpswd">BILL AMOUNT</label>
					<input type="text"  placeholder=""  name="totalCharge" value="<?php echo  htmlentities($row['totalCharge']);?>" class="form-control" readonly>
                  </div>
				  </div>
				  </div>
				  
				<?php } ?>	
			
                 <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary" > MAKE PAYMENT </button>
                </div>
				</div>
              </form> 
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

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

</body>
</html>
<?php } ?>

			