<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

    if(isset($_POST['change']))
    {
        $monthofBill=$_POST['monthofBill'];
        $dueDate=$_POST['dueDate'];
        $maintainenceCharge=$_POST['maintainenceCharge'];
        $waterbillCharge=$_POST['waterbillCharge'];
        $unitConsumed=$_POST['unitConsumed'];
        $priceperunit=$_POST['priceperunit'];
        $electricityCharge=$_POST['electricityCharge'];
        $totalCharge=$_POST['totalCharge'];
        $id=intval($_GET['id']);
    $sql=mysqli_query($con,"update managebills  set monthofBill='$monthofBill',dueDate='$dueDate',maintainenceCharge='$maintainenceCharge',waterbillCharge='$waterbillCharge',unitConsumed='$unitConsumed',priceperunit='$priceperunit',electricityCharge='$electricityCharge',totalCharge='$totalCharge' where id='$id'");
    $_SESSION['msg']="Bill Updated !!";
    
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMS| Society info</title>

    <!-- Custom fonts for this template-->
   <link href="css/all.min.css" rel="stylesheet" type="text/css">
   <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
		 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
 <!-- Page Wrapper -->
    <div id="wrapper">
 
 <?php include('include/sidebar.php');?>
  <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
 <?php include('include/header.php');?>	 
 
  <!---start--->
		<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-12">
            
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="manage_bills.php">Home</a></li>
              <li class="breadcrumb-item active">Edit-Bills</li>
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
                <h3 class="card-title">Edit Bills</h3> 
              </div>
			  
              <!-- /.card-header -->
 <?php if(isset($_POST['change']))
{?>
									<div class="alert alert-info">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

   <!-- form start -->
   <form role="form" method="post" name="edit_bills.php" >
				<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from managebills where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>	
                <div class="card-body">
				<div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                   <label for="currentpswd">Month Of Bill</label>
                   <input type="text" placeholder=""  name="monthofBill" value="<?php echo  htmlentities($row['monthofBill']);?>" class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                     <label for="currentpswd">Due Date </label>
                    <input type="text" placeholder=""  name="dueDate" value="<?php echo  htmlentities($row['dueDate']);?>" class="form-control" required>
                  </div>
				  </div>
				
				  <div class="col-md-6">
                  <div class="form-group">
                   <label for="currentpswd">Maintainence Charges</label>
                    <input type="text" placeholder=""  name="maintainenceCharge" value="<?php echo  htmlentities($row['maintainenceCharge']);?>"  class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                   <label for="currentpswd">Water Bill Charges </label>
                     <input type="text" placeholder=""  name="waterbillCharge" value="<?php echo  htmlentities($row['waterbillCharge']);?>" class="form-control" required>
                  </div>
				  </div>
				  </div>
				  
				   <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Unit Consumed</label>
                   <input type="text" placeholder=""  name="unitConsumed" value="<?php echo  htmlentities($row['unitConsumed']);?>" class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Price Per Unit</label>
                   <input type="text"   placeholder=""  name="priceperunit"  value="<?php echo  htmlentities($row['priceperunit']);?>" class="form-control" required>
                  </div>
				  </div>
				
				  <div class="col-md-6">
                  <div class="form-group">
                   <label for="currentpswd">Electricity Charges</label>
					 <input type="text"  placeholder=""  name="electricityCharge" value="<?php echo  htmlentities($row['electricityCharge']);?>" class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Total Charges</label>
					 <input type="text"  placeholder=""  name="totalCharge" value="<?php echo  htmlentities($row['totalCharge']);?>" class="form-control" required>
                  </div>
				  </div>
				  </div>
				  
				<?php } ?>	
			
                 <div class="card-footer">
                  <button type="submit" name="change" class="btn btn-info"> Update </button>
                </div>
				</div>
              </form> 
                       

           
<!-- /.form group -->
     </div>                 
     </div>
     </div>
     </div>
	 </section>
<!---content-wrapper--->
 
 
	<?php include('include/footer.php');?>		


			
			
	  </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
		
			
			
			
			
			
			
			 <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-pie-demo.js"></script>

</body>

</html>
<?php } ?>

