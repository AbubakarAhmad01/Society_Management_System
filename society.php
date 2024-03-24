<?php
session_start();
session_destroy();
error_reporting(0);
include('config.php');
if(!strlen($_SESSION['login'])==0)
  { 
header('location:society.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$message=$_POST['message'];
$query=mysqli_query($con,"insert into manage_client(name,contact,email,message) values('$name','$contact','$email','$message')");
$_SESSION['msg']="Data Sent Successfully !!";
if($query)
{
$successmsg="Data Sent Successfully !!";
}
else
{
$errormsg=" Data not send !!";
}
}
?>






<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Society management system</title>
<link rel="stylesheet" href="css/society.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="rentsell css/bootstrap.bundle.min.js"></script>
  
</head>
<body>
<!------------------navigationbar--------------->
<section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo.png"  ></a>
    <a class="navbar-brand" href="#">Gokuldham Society</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#carouselExampleCaptions">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sms/admin/index.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sms/users/index.php">User</a>
        </li>
  <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Rent/Sell</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="Rent List.php" class="dropdown-item">Rent List</a></li>
              <li><a href="Sell List.php" class="dropdown-item">Sell List</a></li>
			  </ul>
		</li>
        <li class="nav-item">
          <a class="nav-link" href="#Features">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#testimonials">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact us</a>
        </li>
        
      </ul>
    </div>
  </nav>
</section>
<!---------slider------------------->

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bg3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bg6.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-----------Features---------------->
  <section id="Features">
  <div class="a">
    <h1>Features</h1>
	 
    <p>Societies business booming exponentially. But, to run the business successfully, without a proper solution is close to impossible. <br>
	Existing systems in the market are either too expensive or do not meet the requirements.<br>

    Online Housing Society is a Web-based used to provide guidance to the users/visitors to choose plots according to their needs.<br>
	It also helps customers to book their desired plots at reasonable rates. It provides further facilities like Gym Area , Swimming Pool, Jogging Track, Open Area.<br>
	It is time to take advantage of the technology for a better and peaceful living. <br>
      </p>

  </div>
</section>

  <div class="row row-cols-1 row-cols-md-4">
    <div class="col mb-4">
      <div class="card">
        <img src="img/obj1.png.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Meetings</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="img/obj2.jpg.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Manage Complaints</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="img/obj3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Manage Bills</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="img/obj4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Society Info</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="img/obj5.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Manage Maintenance</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="img/obj6.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Visitors</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="img/obj7.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Helpdesk</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <img src="img/obj8.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Online Payment</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
  </div>
  <!-----------Advertisement---------------->
  

  <section id="Facilitis">
  <div class="a">
    <!---
    <h1>Best Facilities</h1>
    <p>Guests can relax by their own private pool, or spend their day at the private sandy beach, <br>
      making the most out of their vacation. A state-of-the-art Gym by Technogym® is available as well at this luxury villa resort,<br>
        are at the guests’ disposal, as well as chauffer or secretarial services, or even their own private chef.</p>
  ----------->
  <div class="section">

<h1>Welcome To Paradise</h1>

<div class="video-container">
    <div class="color-overlay"></div>
    <video autoplay loop muted>
        <source src="socvid.mp4" type="video/mp4">
    </video>
</div>
</div>
  </div>

  </div>
</section>

<!--------------testimonial----------------------------->
<section id="testimonials">
  <div class="container text-center">
  <h1>Testimonials</h1>
  <p class="text-center"></p>
  <div class="row">
  <div class="col-md-4 text-center">
  <div class="profile">
  <img src="img/team-1.jpg" class="user">
  <blockquote>The society is front faced with the rest of SRA Societies in the area. Great view, sunlight, plentiful fresh air. Best society in Andheri For Bachelors with easy living and a nice cool environment</blockquote>
  <h3>Akash Gupta <span> Member at Gokuldham Society</span></h3>
  </div>  
  </div>
      <div class="col-md-4 text-center">
  <div class="profile">
  <img src="img/team-2.jpg" class="user">
  <blockquote>Best society in Andheri For Bachelors with easy living and a nice cool Safe environment! for families & youngsters.Society is well known for their festival celebrations and decorations</blockquote>
  <h3>Ankush Kumar <span> Local Guide at Gokuldham Society</span></h3>
  </div>  
  </div>
      <div class="col-md-4 text-center">
  <div class="profile">
  <img src="img/team-3.jpg" class="user">
  <blockquote>Society  has a fully equipped Gym, Steam bath facility, full fledged club house with lone tennis court, volleyBall court, badminton court, dual swimming pool, around 400 meters walking/jogging track.</blockquote>
  <h3> Neha k sharma <span>Member at Gokuldham Society</span></h3>
  </div>  
  </div>
  </div>
  </div>
  </section>
  
  <!---------------------------Adslider------------->
 
     
       	  <img src="img/featureslider.png" class="d-block w-100" alt="..."> 
       
  
  <!-------------------Get in Touch--------------->
  
<section id="contact">
  <div class="container ">
  <h1>Get in Touch</h1>

  <div class="row">
  <div class="col-md-6">
  <?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-primary">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
  <form class="contact-form" method="post" name="society.php">
  <div class="form-group">
  <input type="text" name="name" required="required" value=""  class="form-control" placeholder="Your Name"> 
  </div>
  <div class="form-group">
  <input type="text" name="contact" required="required" value=""  class="form-control" placeholder="Phone No."> 
  </div>
  <div class="form-group">
  <input type="text" name="email" required="required" value="" class="form-control" placeholder="Email Id"> 
  </div>
  <div class="form-group">
  <textarea name="message" required="required" value=""  class="form-control" rows="5"placeholder="Message"></textarea>
  </div>
      <button type="submit" name="submit" class="btn btn-primary">SEND MESSAGE</button>
  </form>
  </div>
  
  <div class="col-md-6 contact-info">
  <div class="follow"><b>Address:</b> <i class="fa fa-map-marker" ></i>13-Ashok Nagar,Andheri East, Mumbai, 400063, Maharashtra, India</div>
  <div class="follow"><b>Phone:</b> <i class="fa fa-phone" ></i>+91 1234567890</div>
  <div class="follow"><b>Email:</b> <i class="fa fa-envelop-o" ></i>gokuldham@gmail.com</div>
  <div class="follow"><label><b>Get Social:</b> </label>
      <a href="#"></a><i class="fa fa-facebook" ></i>
      <a href="#"></a><i class="fa fa-youtube-play" ></i>
      <a href="#"></a><i class="fa fa-twitter" ></i>
      <a href="#"></a><i class="fa fa-google-plus" ></i>
      </div>  
  </div>
  </div>
  </div>
  </section>
  
  <!--------------------Footer--------------------------->
  <section id="footer">
  <div class="container text-center">
  <p> Made with<i class="fa fa-heart-o" ></i>by AVM</p>
  </div>
  </section>
  <!------------------Footer-End-------------------------->
 
 
  <script src="js/smooth-scroll.js"></script>
  <script>
  var scroll = new SmoothScroll('a[href*="#"]');
  </script>
  
</body>
</html>
<?php } ?>