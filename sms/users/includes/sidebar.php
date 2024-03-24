<style>
  .sidebar .img-circle{
    margin-left: 70px;
    margin-top: 10px;
    margin-bottom: 20px;
  }
  .sidebar h4{
    margin-left: 80px;
    margin-top: -20px;
    
  }
  .sidebar h5{
	margin-left: 50px; 
    margin-top: -30px;
    margin-bottom: 20px;	
	 color: white;
  }
  </style>

<!-- /.wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  
<!-- Right navbar links -->

<ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->

         <!------ Fullscreen -------->
     
    </ul>
  </nav>
  <!-- /.navbar -->
    

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="image/logo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Gokuldham Society</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

     

     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			   
		<?php $query=mysqli_query($con,"select fullName,userImage from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
                  <p class="centered"><a href="profile.php">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png"  class="img-circle" width="70" height="70" >
<?php else:?>
  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">

<?php endif;?>
</a>
</p>
 
                  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
                    

    
          <li class="nav-item menu-open">
            <a href="Dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="societyinfo.php" class="nav-link ">
             <i class="fas fa-info-circle"></i>
              <p>
                Society info
               
              </p>
            </a>
          </li>
		   <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="fas fa-user-cog"></i>
              <p>
                Account Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="profile.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="change-password.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
			  </ul>
			  </li>
		  <li class="nav-header">Category 1</li>
              <li class="nav-item">
                <a href="register-complaint.php" class="nav-link">
                <i class="fas fa-plus-circle"></i>
                  <p>Raise Complaint</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="complaint-history.php" class="nav-link">
                <i class="fas fa-history"></i>
                  <p>Complaint History</p>
                </a>
              </li>
			<li class="nav-header">Category 2</li> 
		  <li class="nav-item">
            <a href="view_notice.php" class="nav-link">
            <i class="fas fa-bell"></i>
              <p>
               View Events/Notice
               
              </p>
			  <?php 
                  
$rt = mysqli_query($con,"SELECT * FROM notice where user='".$_SESSION['login']."'");
$num1 = mysqli_num_rows($rt);
{?><b class="badge badge-info right"><?php echo htmlentities($num1); ?></b>
<?php } ?> 
            </a>
          </li>
		  <li class="nav-item">
            <a href="viewbills.php" class="nav-link">
         <i class="fas fa-money-bill"></i>
              <p>
               View Bills
                
              </p>
            </a>
          </li>
		 
		 <li class="nav-header">Category 3</li>
		 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-magic"></i>
              <p>
                Rent/Sell
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="rent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Rent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sell.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sell</p>
                </a>
              </li>
			    <li class="nav-item">
                <a href="manageclients.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Client's</p>
                </a>
              </li>
			  </ul>
			  </li>
		  
		  <li class="nav-item">
            <a href="view_visitors.php" class="nav-link">
            <i class="fas fa-eye"></i>
              <p>
                View Visitor's
               
              </p>
            </a>
          </li>
		  
		  <li class="nav-item">
            <a href="helpdesk.php" class="nav-link">
         <i class="fas fa-question-circle"></i>
              <p>
                Helpdesk
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
           <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
  <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <!-- /.wrapper -->
       </div>
   <!-- /.wrapper -->
  
   
 

