<!DOCTYPE html>  
  
<html> 
  
    <head> 

        <title>Admin Dashboard Template</title>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- required Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        
        <!-- required CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/all.min.css" />
        <link rel="stylesheet" href="css/webstyle.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsive.css" />
 
    </head>    
	
	<!-- Body Start -->
	<body class="admin-panel">
             
            <!-- Header Start -->
            <header class="header_section bg-primary position-relative">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <span class="display-7 d-block text-white p_t_10">Hi, Admin</span>
                        </div>
                        
                        <div class="col-12 col-md-8 top-notificationicons">  
                            <ul class="list-inline float-right mb-0">  
                                <li class="list-inline-item">
                                <div  class="dropdown-toggle profile_toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="profile-thumb-small"><i class="fas fa-user"></i></span></div>
                                    <div class="dropdown-menu profile-icons"> 
                                        <a class="dropdown-item position-relative" href=""><i class="far fa-user-circle"></i>Edit Profile</a>
                                        <a class="dropdown-item position-relative" href="http://base1.tutorsincity.com/phpjsonblog//admin/logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a> 
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                    </div> 
            </header>
		
           
            <!-- Header End -->
            
<div class="admin_menus">
    <div class="py-3 text-center text-white text-bold f_16_18 text-bold dashboard_header"><a href="index.php">Dashboard</a></div>
    <ul class="list-group rounded-0 border-0">
        <li class="list-group-item "><a href="customers.php"><i class="fas fa-users"></i>Customers</a></li>
        <li class="list-group-item "><a href="import-customers.php"><i class="fas fa-user-plus"></i>Import Customers</a></li>
        <li class="list-group-item "><a href="import-manual-customers.php"><i class="fas fa-user-plus"></i>Add Customers</a></li>
        <li class="list-group-item "><a href="settings.php"><i class="fas fa-cog"></i>Settings</a></li>
        <li class="list-group-item"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>    
    <!-- Admin Footer Start -->
    <footer class="admin_footer text-white py-3 mt-0">
        Copy &copy; 2019 All rights reserved.
    </footer>   
    <!-- Admin Footer End-->
</div> 
 
<div class="page-dashboard p_y_30 p_x_10 bg-light">
        <div class="container-fluid"> 
        <div class="row">  
            <div class="col-12 col-md-12">
                <div class="row">  

                    <div class="col-12 col-md-4">
                       <div class="card dash_card m_b_30 ">
                            <a href="customers.php" class="p_y_30">
                               <div class="card-body text-center">
                                    <i class="fas fa-users"></i>
                                    <span class="d-inline-block">Customers</span>
                                    <b>1220</b>
                               </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                       <div class="card dash_card m_b_30 ">
                            <a href="customers.php" class="p_y_30">
                               <div class="card-body text-center">
                                    <i class="fas fa-file-csv"></i> 
                                    <span class="d-inline-block">Import Customers</span>
                                    <b>CSV File</b>
                               </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                       <div class="card dash_card m_b_30 ">
                            <a href="customers.php" class="p_y_30">
                               <div class="card-body text-center">
                                    <i class="fas fa-cogs"></i>
                                    <span class="d-inline-block">Settings</span>
                                    <b>Page</b>
                               </div>
                            </a>
                        </div>
                    </div>
                  
                </div>    
                 
                  </div>   
          
        </div>
        </div>
</div>    
               		
<!-- Script Files --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/popper.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>  

 
<script type="text/javascript" src="js/script.js"></script> 
 
</body>
<!-- Body End -->

</html>
 