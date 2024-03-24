<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
	
	$remark=$_POST['remark'];
	$id=intval($_GET['id']);
$sql=mysqli_query($con,"update manage_visitors set remark='$remark' where id='$id'");
$_SESSION['msg']="remark Updated !!";

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

    <title>Admin|  Visitors Remark</title>

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
              <li class="breadcrumb-item"><a href="manage-visitors.php">Home</a></li>
              <li class="breadcrumb-item active">Remark</li>
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
                <h3 class="card-title">Visitors Remark</h3>
              </div>
              <!-- /.card-header -->
             <?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>



<!-- form start -->
              <form role="form" method="post" name="edit-visitorremark" >
			  <?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from manage_visitors where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>		
                <div class="card-body">
				
				    <div class="form-group">
                    <label for="currentpswd">Remark</label>
                  <textarea class="form-control" name="remark" rows="10"><?php echo  htmlentities($row['remark']);?></textarea>
                  </div>
				  
				  
				<?php } ?>
			
                 <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Submit</button>
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
