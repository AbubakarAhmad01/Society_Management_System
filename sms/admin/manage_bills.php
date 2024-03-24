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
  $name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$Address=$_POST['Address'];
	$flatno=$_POST['flatno'];
	$monthofBill=$_POST['monthofBill'];
	$dueDate=$_POST['dueDate'];
	$maintainenceCharge=$_POST['maintainenceCharge'];
	$waterbillCharge=$_POST['waterbillCharge'];
	$unitConsumed=$_POST['unitConsumed'];
	$priceperunit=$_POST['priceperunit'];
	$electricityCharge=$_POST['electricityCharge'];
	$totalCharge=$_POST['totalCharge'];
$sql=mysqli_query($con,"insert into managebills(user,name,contact,email,Address,flatno,monthofBill,dueDate,maintainenceCharge,waterbillCharge,unitConsumed,priceperunit,electricityCharge,totalCharge) values('$userEmail','$name','$contact','$email','$Address','$flatno','$monthofBill','$dueDate','$maintainenceCharge','$waterbillCharge','$unitConsumed','$priceperunit','$electricityCharge','$totalCharge')");
$_SESSION['msg']="Bills Generated !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from managebills where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Bill deleted !!";
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

    <title>Admin| Manage Bills</title>

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
				  
				  
				  
				  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Generate New Bills</h3>
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
<form role="form" method="post" name="manage_bills" >
                <div class="card-body">
                <div class="form-group">
                    <label for="currentpswd">Select User</label>
					 <select name="user" required="required" class="form-control">
<option value="">Select User</option>
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
                    <label for="currentpswd">Name</label>
                    <input type="text" placeholder="Enter Name"  name="name" class="form-control" required>
                  </div>
                  
                  
                  <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Flat No </label>
                     <input type="text" placeholder="Enter Flat No"  name="flatno" class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Contact</label>
                   <input type="text" placeholder="Enter Contact"  name="contact"  class="form-control" required>
                  </div>
				  </div>
				
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Email Id </label>
                    <input type="text" placeholder="Enter Email id"   name="email"   class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Address</label>
                    <textarea class="form-control"  name="Address" rows="2"> </textarea>
                  </div>
				  </div>
				  </div>

				 <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Month Of Bill </label>
                     <input type="text" placeholder="Enter month of bill"  name="monthofBill" class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Due Date</label>
                   <input type="text" placeholder="Enter due date"  name="dueDate"  class="form-control" required>
                  </div>
				  </div>
				
				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Maintainence Charges </label>
                    <input type="text" placeholder="Enter maintainence charges"  name="maintainenceCharge"   class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Water Bill Charges</label>
                    <input type="text" placeholder="Enter waterbill charges"  name="waterbillCharge" class="form-control" required>
                  </div>
				  </div>
				  </div>
				  
				   <div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Unit Consumed</label>
                     <input type="text"  placeholder="Enter unit consumed"  name="unitConsumed"  class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Price Per Unit</label>
                   <input type="text" placeholder="Enter price per unit"  name="priceperunit" class="form-control" required>
                  </div>
				  </div>
				
        				  <div class="col-md-6">
                  <div class="form-group">
                    <label for="currentpswd">Electricity Charges </label>
                   <input type="text"   placeholder="Enter electricity charges"  name="electricityCharge"   class="form-control" required>
                  </div>
				  
				   <div class="form-group">
                    <label for="currentpswd">Total Charges</label>
					<input type="text"  placeholder="Enter total charges"  name="totalCharge"  class="form-control" required>
                  </div>
				  </div>
				  </div>
				  
         
			
                 <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info"> Generate Bill </button>
                </div>
				</div>
              </form> 
   
   


 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Bills</h3>
              </div>
              <!-- /.card-header -->

<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                                            <th>Bill No</th>
											<th> Name </th>
											<th> Month Of Bill</th>
											<th> Bill Date</th>
											<th>Flat no </th>
											<th>Status </th>
											<th>Maintainence Charges </th>
											<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php $query=mysqli_query($con,"select * from managebills");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td> <?php echo htmlentities($row['name']);?></td>
											<td> <?php echo htmlentities($row['monthofBill']);?></td>
											<td> <?php echo htmlentities($row['billDate']);?></td>
											<td> <?php echo htmlentities($row['flatno']);?></td>
										
											
											
											<td><?php if($row['status']=="")
											{ echo "Not Paid";
} else {
										 echo htmlentities($row['status']);
										 }?></td>
											<td><?php echo htmlentities($row['maintainenceCharge']);?></td>
																	
											<td>
           <a href="edit_bills.php?id=<?php echo $row['id']?>" class="btn btn-info btn-circle" ><i class="fas fa-edit"></i></a>
           <a href="manage_bills.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
<a href="view-billdetails.php?uid=<?php echo htmlentities($row['id']);?>" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a>
											
											
											
											</td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
                  </tbody>
                  <tfoot>
                  <tr>
                                            <th>Bill No</th>
											<th> Name </th>
											<th> Month Of Bill</th>
											<th> Bill Date</th>
											<th>Flat no </th>
											<th>Status </th>
											<th>Maintainence Charges </th>
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
