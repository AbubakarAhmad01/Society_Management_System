<?php 
session_start();
error_reporting(0);
include('includes/config.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMS |View Bill Detail's </title>

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

 
 <!---start--->
 <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
   <?php 
$query=mysqli_query($con,"select  * from managebills  where user='".$_SESSION['login']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{

?>		
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
	

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
			 	
                <div class="col-12">
				
                  <h4>
                    <i class="fas fa-globe"></i> Soc-Bill .
                    <small class="float-right">Date: <?php echo htmlentities($row['billDate']);?></small>
                  </h4>
				 
                </div>
				
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Tata Power</strong><br>
                    Near Shalimar Industrial Estate,<br>
                    Kumbhar Wada,Matunga, Mumbai,<br>
					          Maharashtra 400019<br>
                    Phone: 022 6717 1000<br>
                    Email: info@tatapower.com
                  </address>
                </div>
                <!-- /.col -->
								
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?php echo htmlentities($row['name']);?></strong><br>
					       Flat No : <?php echo htmlentities($row['flatno']);?><br>
                    <?php echo htmlentities($row['Address']);?><br>
                 Phone:   <?php echo htmlentities($row['contact']);?><br>
                 Email: <?php echo htmlentities($row['email']);?><br>
                     
                  </address>
                </div>
				
                <!-- /.col -->
				
                <div class="col-sm-4 invoice-col">
                  <b>Bill No :</b><?php echo htmlentities($cnt);?><br>
                  <br>
                  <b>Due Date :</b><?php echo htmlentities($row['dueDate']);?> <br>
                  <b>Account:</b> 968-34567
                </div>
				
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
				
                      <th>Month of Bill : <?php echo htmlentities($row['monthofBill']);?></th>
                      <th></th>
                      <th></th>
					 
				  
                      <th></th>
					  
                      <th>Subtotal</th>
                    </tr>
                    </thead>
					
					
					 
					
                    <tbody>
								
                    <tr>
                      <td>Maintainence Charge</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo htmlentities($row['maintainenceCharge']);?></td>
                    </tr>
                    <tr>
                      <td>WaterBill Charge</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo htmlentities($row['waterbillCharge']);?></td>
                    </tr>
                    <tr>
                      <td>Unit Consumed</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo htmlentities($row['unitConsumed']);?></td>
                    </tr>
                    <tr>
                      <td>Price Per Unit</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo htmlentities($row['priceperunit']);?></td>
                    </tr>
					<tr>
                      <td>Electricity Charge</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo htmlentities($row['electricityCharge']);?></td>
                    </tr>
					<tr>
                      <td>Total Charge</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo htmlentities($row['totalCharge']);?></td>
                    </tr>
					
                    </tbody>
					
                  </table>
				     
					
                </div>
			 
                <!-- /.col -->
              </div>
              
	             
					
 <!-- /.row -->           
<div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <img src="dist/img/credit/visa.png" alt="Visa">
        <img src="dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="dist/img/credit/american-express.png" alt="American Express">
        <img src="dist/img/credit/paypal2.png" alt="Paypal">

        
      </div>
    </div>
    <!-- /.row -->
          
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 <?php $cnt=$cnt+1; } ?>   
 <!---end--->
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
<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>


			