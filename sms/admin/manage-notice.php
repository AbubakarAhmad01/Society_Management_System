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
	$userEmail=$_POST['user'];
	$subject=$_POST['subject'];
	$discription=$_POST['discription'];
  
 foreach ($userEmail as $v) {
  $sql=mysqli_query($con,"insert into notice(user,subject,discription) values('$v','$subject','$discription')");
 } 

$_SESSION['msg']="Notice  Created !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from notice where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Notice deleted !!";
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

    <title>Admin| Manage Notice</title>

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
	.table_head3{
		width:600px;
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
                <h3 class="card-title">Create New Notice</h3>
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
				<div class="col-md-12">
                  <div class="form-group">
                    <label for="currentpswd">Select User </label>
                    <select name="user[]" multiple="multiple" class="form-control">
<?php 
	$sql=mysqli_query($con,"select fullName,userEmail from users");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['userEmail']."'>".$r['fullName']."</option>";
	}
			?>

</select>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Enter Subject</label>
                   <input type="text" placeholder="Enter Subject" name="subject" class="form-control">
                  </div>
				  </div>
				
				  </div>
				  
				   <div class="row">
				<div class="col-md-12">
                  <div class="form-group">
                    <label for="currentpswd">Enter Details </label>
                     <textarea class="form-control" name="discription" rows="5"></textarea>
                  </div>
				  </div>
				  </div>
				  
				
			
                 <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info"> Create</button>
                </div>
				</div>
              </form> 
   
   


 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Notice History</h3>
              </div>
              <!-- /.card-header -->

<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                            <th class="table_head1">Notice Id</th>
											<th class="table_head2">Subject</th>
											<th class="table_head3">Details</th>
											<th class="table_head4">User</th>
											<th class="table_head5">Creation date</th>
											<th class="table_head6">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 <?php $query=mysqli_query($con,"select * from notice");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['subject']);?></td>
											<td><?php echo htmlentities($row['Discription']);?></td>
											<td><?php echo htmlentities($row['user']);?></td>
											<td> <?php echo htmlentities($row['Date']);?></td>
											
											<td>
											<a href="edit-notice.php?id=<?php echo $row['id']?>" ><button type="button" class="btn btn-info">Edit </button></a>
											<a href="manage-notice.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="button" class="btn btn-danger">Delete</button></a>
											</td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
                  </tbody>
                  <tfoot>
                  <tr>
                                          <th>Notice Id</th>
											<th>Subject</th>
											<th>Details</th>
											<th>User</th>
											<th>Creation date</th>
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
