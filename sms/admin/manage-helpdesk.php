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


if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$secretryNo=$_POST['secretryNo'];
	$securityguardNo=$_POST['securityguardNo'];
	$electricianNo=$_POST['electricianNo'];
	$ambulanceNo=$_POST['ambulanceNo'];
	$firebrigadeNo=$_POST['firebrigadeNo'];
	$policeNo=$_POST['policeNo'];
$sql=mysqli_query($con,"insert into helpdeskinfo(email,secretryNo,securityguardNo,electricianNo,ambulanceNo,firebrigadeNo,policeNo) values('$email','$secretryNo','$securityguardNo','$electricianNo','$ambulanceNo','$firebrigadeNo','$policeNo')");
$_SESSION['msg']="helpdesk info Created !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from helpdeskinfo where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="helpdesk info deleted !!";
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

    <title>SMS| Manage helpdesk</title>

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
				  
				  
				  
				  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Helpdesk Info</h3>
              </div>
              <!-- /.card-header -->
 <?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-info">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									

   <!-- form start -->
              <form role="form" method="post" name="manage-helpdesk" >
                <div class="card-body">
				 <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Society Email </label>
                     <input type="text"  placeholder="Enter Society Email"  name="email" class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Securityguard No</label>
                   <input type="text" placeholder="Enter securityguard no"  name="securityguardNo" class="form-control" required>
                  </div>
				  </div>
				
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Secretry No </label>
                    <input type="text"  placeholder="Enter secretry no"  name="secretryNo"   class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Electrician No</label>
                    <input type="text" placeholder="Enter electrician no"  name="electricianNo" class="form-control" required>
                  </div>
				  </div>
				  </div>
				  
				   <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Ambulance No  </label>
                     <input type="text"  placeholder="Enter ambulance no"  name="ambulanceNo"  class="form-control" required>
                  </div>
				  
				  
				  </div>
				
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Firebrigade No </label>
					<input type="text" placeholder="Enter firebrigade no"  name="firebrigadeNo" class="form-control" required>
                  
                  </div>
				  
				  </div>
				  </div>
				   <div class="form-group">
                    <label for="currentpswd">Police No</label>
                    <input type="text"  placeholder="Enter police no"  name="policeNo" class="form-control" required>
                  </div>
				
			
                 <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info"> Add </button>
                </div>
				</div>
              </form> 
   
   

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Helpdesk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                                            <th>Sr no.</th>
											<th>Secretry No</th>
											<th>Securityguard No</th>
											<th>Electrician No </th>
											<th>Ambulance No </th>
											<th>FireBrigade No</th>
											<th>Police No</th>
											<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php $query=mysqli_query($con,"select * from helpdeskinfo");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['secretryNo']);?></td>
											<td> <?php echo htmlentities($row['securityguardNo']);?></td>
											<td><?php echo htmlentities($row['electricianNo']);?></td>
											<td><?php echo htmlentities($row['ambulanceNo']);?></td>
											<td><?php echo htmlentities($row['firebrigadeNo']);?></td>
											<td><?php echo htmlentities($row['policeNo']);?></td>
											<td>
											<a href="edit-helpdesk.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-info">Edit </button></a>
											<a href="manage-helpdesk.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                                            
											<th>Sr no.</th>
											<th>Secretry No</th>
											<th>Securityguard No</th>
											<th>Electrician No </th>
											<th>Ambulance No </th>
											<th>FireBrigade No</th>
											<th>Police No</th>
											<th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->					   
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
