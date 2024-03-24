<?php
session_start();
include('include/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin| view bill Details</title>

    <!-- Custom fonts for this template-->
   <link href="css/all.min.css" rel="stylesheet" type="text/css">
   <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
		 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script language="javascript" type="text/javascript">
    var popUpWin=0;
    function popUpWindow(URLStr, left, top, width, height)
    {
   if(popUpWin)
   {
   if(!popUpWin.closed) popUpWin.close();
   }
   popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
   }

   </script>
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
              

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bill Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

<?php 
$query=mysqli_query($con,"select * from managebills where id='".$_GET['uid']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>							
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  
                  </thead>
                
                  <tbody>
				
              		
										<tr>
											<td><b>Bill Number</b></td>
											<td><?php echo htmlentities($cnt);?></td>
											<td><b> Bill Date</b></td>
											<td> <?php echo htmlentities($row['billDate']);?></td>
											<td><b>Due Date</b></td>
											<td><?php echo htmlentities($row['dueDate']);?>
											</td>
										</tr>

<tr>
							
											<td><b>Name </b></td>
											<td><?php echo htmlentities($row['name']);?></td>
											<td><b>contact</b></td>
											<td> <?php echo htmlentities($row['contact']);?></td>
											<td><b>Email</b></td>
											<td><?php echo htmlentities($row['email']);?>
											</td>
										</tr>
<tr>
											<td><b>Flat No </b></td>
											<td><?php echo htmlentities($row['flatno']);?></td>
																
											<td ><b>Month Of Bill :</b></td>
											<td colspan="3"> <?php echo htmlentities($row['monthofBill']);?></td>
											
										</tr>
<tr>
											<td><b>Maintainence Charge</b></td>
											
											<td colspan="5"> <?php echo htmlentities($row['maintainenceCharge']);?></td>
											
										</tr>										
<tr>
											<td><b>WaterBill Charge</b></td>
											
											<td colspan="5"> <?php echo htmlentities($row['waterbillCharge']);?></td>
											
										</tr>
<tr>
											<td><b>Unit Consumed</b></td>
											
											<td colspan="5"> <?php echo htmlentities($row['unitConsumed']);?></td>
											
										</tr>
<tr>
											<td><b>Price Per Unit</b></td>
											
											<td colspan="5"> <?php echo htmlentities($row['priceperunit']);?></td>
											
										</tr>
<tr>
											<td><b>Electricity Charge</b></td>
											
											<td colspan="5"> <?php echo htmlentities($row['electricityCharge']);?></td>
											
										</tr>
<tr>
											<td><b>Total Charge</b></td>
											
											<td colspan="5"> <?php echo htmlentities($row['totalCharge']);?></td>
											
										</tr>										

											</tr>


<tr>

                      <td><b>Final Status</b></td>
											
											<td colspan="5"><?php if($row['status']=="")
											{ echo "Not Paid";
} else {
										 echo "Paid";
										 }?></td>
											
										</tr>


										
										
                  </tbody>
                 
				 
										
                </table>
				 <?php $cnt=$cnt+1; } ?>
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
