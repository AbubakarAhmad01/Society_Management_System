<style>
.navbar-nav{
background:#007575 ;
}

</style>


 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
			<img class="img-profile rounded-circle" src="img/undraw_profile.svg" style=" height: 40px;">
                                   
                <div class="sidebar-brand-icon ">
                  
                </div>
                <div class="sidebar-brand-text mx-2" style="padding-right:40px;">Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Admin-dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
			  <li class="nav-item ">
                <a class="nav-link" href="society-info.php">
                      <i class="fas fa-info-circle"></i>
                    <span>Society info</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Level 1
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manage Complaints</span>
					
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Complaints:</h6>
                        <a class="collapse-item" href="notprocess-complaint.php">Not Process Yet Comp &nbsp;
						<?php
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status is null");
$num1 = mysqli_num_rows($rt);
{?>
		
											<b class="badge badge-danger right"><?php echo htmlentities($num1); ?></b>
											<?php } ?>
						</a>
                        <a class="collapse-item" href="inprocess-complaint.php">Pending Complaint &nbsp;&nbsp;&nbsp;&nbsp;
						 <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="badge badge-warning right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
						</a>
						<a class="collapse-item" href="closed-complaint.php">Close Complaints &nbsp;&nbsp;&nbsp;&nbsp;
						 <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="badge badge-success right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
						</a>
                    </div>
                </div>
            </li>
  <li class="nav-item ">
                <a class="nav-link" href="manage-users.php">
                    <i class="fas fa-users"></i>
                    <span>Manage Users</span></a>
            </li>
			
			  <li class="nav-item ">
                <a class="nav-link" href="manage-notice.php">
				<i class="fas fa-bell"></i>
                    <span>Event/Notice</span></a>
            </li>
			
			 <li class="nav-item ">
                <a class="nav-link" href="manage_bills.php">
                  <i class="fas fa-money-bill"></i>
                    <span>Manage Bills</span></a>
            </li>
			
			 <li class="nav-item ">
                <a class="nav-link" href="manage-visitors.php">
                     <i class="fas fa-eye"></i>
                    <span>Manage Visitors</span></a>
            </li>
			
			
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Manage Rent/Sell</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rent/Sell</h6>
                        <a class="collapse-item" href="manage-rentsell.php">Rent/Sell List</a>
                        <a class="collapse-item" href="manage-clients.php">Manage Clients</a>
                       
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Level 2
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Add Categories</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Category:</h6>
                        <a class="collapse-item" href="category.php">Add Category</a>
                        <a class="collapse-item" href="subcategory.php">Add Subcategory</a>
                        <a class="collapse-item" href="state.php">Add State</a>
                        <div class="collapse-divider"></div>
                     
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="login-logout.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>User Login-logout</span></a>
            </li>
			
			 <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="manage-helpdesk.php">
                   <i class="fas fa-question-circle"></i>
                    <span>Helpdesk</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->