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
         <style type="text/css">
             html { overflow-y: scroll; }
         </style>
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
    <div class="py-3 text-center text-white text-bold f_16_18 text-bold dashboard_header">
        <a href="index.php">Dashboard</a>
    </div>
    <ul class="list-group rounded-0 border-0">
        <li class="list-group-item "><a href="customers.php"><i class="fas fa-users"></i>
        Customers</a>
        </li>
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
 
<div class="settings_page_design">  
    <div class="row">  
        <div class="col-12 ">
          <h2 class="m_b_30 f_24_28">Add Customer</h2>
        </div>
    </div>
    <form action="" class="" method="post" autocomplete="off">
        <div class="row">  
            <div class="col-12">
                <h5>Add Customer Details</h5>
                <hr />
            </div>
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Code</label>
                    <input type="text" class="form-control" placeholder="Code" name="admin_fname" />
                </div> 
            </div>
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" />
                </div> 
            </div>
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Pricing Type</label>
                    <input type="email" class="form-control" placeholder="Price Type" name="price_type" required="required" />
                </div> 
            </div>
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Price Local</label>
                    <input type="text" class="form-control" value="" name="price_local" placeholder="Price Local" required="required" />
                </div> 
            </div>    
        </div>
        <div class="row">
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Currency Local</label>
                    <input type="text" class="form-control" value="" name="currency_local" placeholder="Currency Local" required="required" />
                </div> 
            </div>   
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" value="" name="status" placeholder="Status" required="required" />
                </div> 
            </div>   
        </div>
        <div class="row">
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Failure Reason</label>
                    <input type="text" class="form-control" value="" name="failure_reason" placeholder="Failure Reason" required="required" />
                </div> 
            </div>   
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Crypto Currency</label>
                    <input type="text" class="form-control" value="" name="crypto_currency" placeholder="Crypto Currency" required="required" />
                </div> 
            </div>   
        </div>
        <div class="row">
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Price Crypto Currency</label>
                    <input type="text" class="form-control" value="" name="price_crypto_currency" placeholder="Price Crypto Currency" required="required" />
                </div> 
            </div>   
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Transaction Hash</label>
                    <input type="text" class="form-control" value="" name="transaction_Hash" placeholder="Transaction Hash" required="required" />
                </div> 
            </div>   
        </div>
        <div class="row">
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Transaction Amount Primary</label>
                    <input type="text" class="form-control" value="" name="transaction_amount_primary" placeholder="Transaction Amount Primary" required="required" />
                </div> 
            </div>   
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Transaction Hashes Additional</label>
                    <input type="text" class="form-control" value="" name="transaction_amounts_additional" placeholder="Transaction Hashes Additional" required="required" />
                </div> 
            </div>   
        </div>
        <div class="row">
            <div class="col-12 col-md-6">    
                <div class="form-group">
                    <label>Transaction Amounts Additional</label>
                    <input type="text" class="form-control" value="" name="transaction_amounts_additional" placeholder="Transaction Amounts Additional" required="required" />
                </div> 
            </div>   
             
        </div>
        
        <div class="row">
            <div class="col-12"> 
                <button name="save_bloginfo" class="btn btn-primary btn-inline-block float-right ml-2" type="submit">Save</button>
            </div> 
        </div>
        <!--Row 2 End-->

    </form>
    <!--Form End-->
    <hr />

</div>
 
 
               		
<!-- Script Files --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/popper.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>  

 
<script type="text/javascript" src="js/script.js"></script> 
 
</body>
<!-- Body End -->

</html>
 