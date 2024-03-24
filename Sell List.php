<?php
session_start();
session_destroy();
error_reporting(0);
include('config.php');
if(!strlen($_SESSION['login'])==0)
  { 
header('location:rentsell.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );




?>


<!DOCTYPE html>
<html>
<head>
<title>Society management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="rentsell css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   
  <!-- DataTables -->
  <link rel="stylesheet" href="rentsell css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="rentsell css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="rentsell css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<style>
/* external css: flickity.css */

* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel img {
  display: block;
  height: 200px;
}

@media screen and ( min-width: 768px ) {
  .carousel img {
    height: 400px;
  }
}
*{  
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
#nav-bar
{
  position: sticky;
  top: 0;
  z-index: 10;
}
.navbar-brand img
{
    height: 30px;
    padding-left: 20px;
}
.navbar-nav li{
    padding: 0 20px;
}
.carousel-inner img {
    width: 100%;
    height: 90vh;

}
div.a{
    text-align: center;
}
/*-------------------Footer----------------------*/
#footer
{
   background: #333;
    color: #fff;
    padding: 12px;
}

</style>
</head>
<body>
<!------------------navigationbar--------------->
<section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
    <a class="navbar-brand" href="#"> Sell List </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="society.php">Back To Home Page<span class="sr-only">(current)</span></a>
        </li>
      
        
      </ul>
    </div>
  </nav>
</section>
<!---------slider------------------->

  
 
  
 

<!-- Flickity HTML init -->
<div class="carousel"
 data-flickity='{ "wrapAround": true ,"autoPlay": 600 }'>
  <img src="img/bedroom 1.jpg" alt="orange tree" />
  <img src="img/bedroom 2.jpg" alt="submerged" />
  <img src="img/bedroom 3.jpg" alt="look-out" />
  <img src="img/hall 1.jpeg" alt="One World Trade" />
  <img src="img/hall 2.jpeg" alt="drizzle" />
  <img src="img/bathroom.jpg" alt="cat nose" />
  <img src="img/bathroom1.jpeg" alt="orange tree" />
  <img src="img/gym.jpg" alt="cat nose" />
  <img src="img/gym 1.jpeg" alt="cat nose" />
</div>

       	 
<br> 		  

		  
<!---start--->
<!-- Content Header (Page header) sell -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-12">
            <h1 style="text-align:center;">Sell List</h1>
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
  <br> <br> <br>
  <!--------------------Footer--------------------------->
  <section id="footer">
  <div class="container text-center">
  <p> Made with <i class="fas fa-heart" style="color:red;"></i> by AVM</p>
  </div>
  </section>
  <!------------------Footer-End-------------------------->
  <script src="js/smooth-scroll.js"></script>
  <script>
  var scroll = new SmoothScroll('a[href*="#"]');
  </script>
  <!-- jQuery -->
<script src="rentsell css/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="rentsell css/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="rentsell css/jquery.dataTables.min.js"></script>
<script src="rentsell css/dataTables.bootstrap4.min.js"></script>
<script src="rentsell css/dataTables.responsive.min.js"></script>
<script src="rentsell css/responsive.bootstrap4.min.js"></script>
<!-- rentsell js -->
<script src="rentsell css/adminlte.min.js"></script>
<!-- rentsell demo -->
<script src="rentsell css/demo.js"></script>
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