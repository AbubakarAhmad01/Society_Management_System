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
$flatno=$_POST['flatno'];
$price=$_POST['price'];
$flattype=$_POST['flattype'];
$query=mysqli_query($con,"insert into sell(flatno,price,flattype) values('$flatno','$price','$flattype')");
if($query)
{
$successmsg="Post Flat Successfully !!";
}
else
{
$errormsg="flat not posted !!";
}
}
if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from sell where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Data  deleted !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMS | Sell flats</title>

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
            <h1>Add Flats for Sell</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sell flats</li>
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
                <h3 class="card-title">Add Flats for Sell</h3>
              </div>
              <!-- /.card-header -->

                 <?php if($successmsg)
                      {?>
                      <div class="alert alert-success alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Well done!</b> <?php echo htmlentities($successmsg);?></div>
                      <?php }?>

   <?php if($errormsg)
                      {?>
                      <div class="alert alert-danger alert-dismissable">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Oh snap!</b> </b> <?php echo htmlentities($errormsg);?></div>
                     <?php }?>    


   <!-- form start -->
              <form role="form" method="post" name="sell.php">
                <div class="card-body">
				 <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Flat Number </label>
                   <input type="text" name="flatno" required="required" value=""  placeholder="Enter Flat No" class="form-control" >
                  </div>
                  </div>
                  
				  <div class="col-md-6">
				   <div class="form-group">
                    <label for="currentpswd">price</label>
                   <input type="text" name="price" required="required" value="" placeholder="Enter Price" class="form-control">
                  </div>
				  </div>
</div>
				  
				  
				  
				
				   <div class="form-group">
                    <label for="currentpswd">Flat Type </label>
                  <select name="flattype" required="required" class="form-control">
<option value="">Select FlatType </option>
<option value="1BHK">1BHK</option>
<option value="2BHK">2BHK</option>
<option value="3BHK">3BHK</option>
</select>
                  </div>
				  
				  
				   
				  
                 
                 <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Add Details</button>
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
<!---start rent list--->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sell List</h3>
              </div>
              <!-- /.card-header -->

   <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                           <th> Sr No.</th>
											<th>Flat Number</th>
											<th>Price</th>
											<th>Flat Type</th>
											<th>Date</th>
											<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
              <?php $query=mysqli_query($con,"select * from sell");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['flatno']);?></td>
											<td><?php echo htmlentities($row['price']);?></td>
											<td> <?php echo htmlentities($row['flattype']);?></td>
											<td> <?php echo htmlentities($row['date']);?></td>
											
											 <td>
											 <a href="edit-sell.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-success">Edit </button></a>
											
											
                <a href="sell.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="button" class="btn btn-danger">Delete</button></a>
      
</td>
										
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
                 
                  </tbody>
                  <tfoot>
                  <tr>
                                            <th> Sr No.</th>
											<th>Flat Number</th>
											<th>Price</th>
											<th>Flat Type</th>
											<th>Date</th>
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
<!-- ./wrapper -->
<!---start rent list--->
</div>
<!-- ./wrapper -->


<!---footer------->
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

			