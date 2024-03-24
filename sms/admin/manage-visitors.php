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
                  $_SESSION['delmsg']="Visitor  deleted !!";
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

    <title>Admin| Manage Visitors</title>

    <!-- Custom fonts for this template-->
   <link href="css/all.min.css" rel="stylesheet" type="text/css">
   <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
		 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<!-- DataTables -->
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style>
.table-h{
	width:200px;
}
</style>
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
                <h3 class="card-title">Add Visitors</h3>
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
              <form role="form" method="post" name="manage-notice" >
                <div class="card-body">
				 <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Visitor Name </label>
                    <input type="text" placeholder="Enter visitor Name"  name="visitorName" class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Whom To Meet</label>
                   <input type="text" placeholder="Enter whom to meet"  name="whomTomeet"  class="form-control" required>
                  </div>
				  </div>
				 
				  
				  
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Contact No </label>
                    <input type="text" placeholder="Enter contact no"  name="contactNo" class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Reason To Meet</label>
                   <input type="text" placeholder="Enter reason to meet"  name="reasonTomeet" class="form-control" required>
                  </div>
				  </div>
				  
				   </div>
				    <div class="form-group">
                    <label for="currentpswd">Address</label>
                  <textarea class="form-control" name="address" rows="3"></textarea>
                  </div>
				  
				  
				
			
                 <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info"> Add</button>
                </div>
				</div>
              </form> 
   
   


 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Visitors</h3>
              </div>
              <!-- /.card-header -->

<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                         <th>Visitor Id</th>
											<th>Visitor's Name</th>
											<th>Contact</th>
											<th class="table-h">Address</th>
											<th>Whom To Meet</th>
											<th>Reason To Meet</th>
											<th>In Time</th>
											<th>Remark</th>
											<th>Out Time</th>
											<th>Action</th>
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
											<td><?php echo htmlentities($row['visitorName']);?></td>
											<td><?php echo htmlentities($row['contactNo']);?></td>
											<td> <?php echo htmlentities($row['address']);?></td>
											<td> <?php echo htmlentities($row['whomTomeet']);?></td>
											<td> <?php echo htmlentities($row['reasonTomeet']);?></td>
											<td> <?php echo htmlentities($row['inTime']);?></td>
											<td> <?php echo htmlentities($row['remark']);?></td>
											<td><?php echo htmlentities($row['outTime']);?></td>
											<td>
											<a href="edit-visitorremark.php?id=<?php echo $row['id']?>" class="btn btn-info btn-circle" ><i class="fas fa-edit"></i></a>
											<a href="manage-visitors.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
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
											<th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>                                      
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
	<!-- DataTables -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/dataTables.responsive.min.js"></script>
<script src="js/responsive.bootstrap4.min.js"></script>
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
