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

if(isset($_GET['uid']) && $_GET['action']=='del')
{
$userid=$_GET['uid'];
$query=mysqli_query($con,"delete from users where id='$userid'");
header('location:manage-users.php');
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

    <title>SMS| Admin</title>

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
 
 
 
 <!-- Begin Page Main Content -->
                <div class="container-fluid">

                    

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-info text-uppercase mb-1">
                                                Notice</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">
											 <?php 
                  
$rt = mysqli_query($con,"SELECT * FROM notice ");
$num1 = mysqli_num_rows($rt);
{?><b class="badge badge-default right"><?php echo htmlentities($num1); ?></b>
<?php } ?> 
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bell fa-3x" ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                                Total Members</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">
											<?php 
                  
$rt = mysqli_query($con,"SELECT * FROM users ");
$num1 = mysqli_num_rows($rt);
{?><b class="badge badge-default right"><?php echo htmlentities($num1); ?></b>
<?php } ?> 
											</div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fas fa-users fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-info text-uppercase mb-1">Paid Bills
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
													1
													</div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-bill-alt fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                                Unpaid Bills</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
											1
											</div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-money-bill-wave fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
					
					
					
					 <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-info text-uppercase mb-1">
                                                Complaint Status in process</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
											<?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
<?php echo htmlentities($num1);?>
   <?php }?>
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-running fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                                Complaint Not Process Yet</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
											<?php 
                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  status is null");
$num1 = mysqli_num_rows($rt);
{?>
<?php echo htmlentities($num1);?>
<?php }?>
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-pause-circle fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-info text-uppercase mb-1">Complaint Closed
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
													  <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
<?php echo htmlentities($num1);?>
<?php }?>
													</div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                                Current Visitors</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">
											<?php 
                  
$rt = mysqli_query($con,"SELECT * FROM manage_visitors ");
$num1 = mysqli_num_rows($rt);
{?><b class="badge badge-default right"><?php echo htmlentities($num1); ?></b>
<?php } ?> 
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-eye fa-3x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->


            </div>
            <!-- End of Main Content -->
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