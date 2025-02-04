<!DOCTYPE html>
<html>

<head>
    <title>Admin Customer Template</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- required Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800" rel="stylesheet" />
    <!-- required CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" />
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
                <div class="col-12 col-md-4"> <span class="display-7 d-block text-white p_t_10">Hi, Admin </span>
                </div>
                <div class="col-12 col-md-8 top-notificationicons">
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item">
                            <div class="dropdown-toggle profile_toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="profile-thumb-small"><i class="fas fa-user"></i></span>
                            </div>
                            <div class="dropdown-menu profile-icons"> <a class="dropdown-item position-relative" href=""><i class="far fa-user-circle"></i>Edit Profile</a>
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
            <li class="list-group-item "><a href="customers.php"><i class="fas fa-users"></i>Customers</a>
            </li>
            <li class="list-group-item "><a href="import-customers.php"><i class="fas fa-user-plus"></i>Import Customers</a>
            </li>
            <li class="list-group-item "><a href="settings.php"><i class="fas fa-cog"></i>Settings</a>
            </li>
            <li class="list-group-item"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
        </ul>
        <!-- Admin Footer Start -->
        <footer class="admin_footer text-white py-3 mt-0">Copy &copy; 2019 All rights reserved.</footer>
        <!-- Admin Footer End-->
    </div>

    <div class="page-dashboard p_y_30 p_x_10 bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
        
                    <!-- DATA TABLE START -->
                    <h2 class="m_b_30 f_24_28">Customers List</h2>
                    <table id="search_result" class="display" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width:30px;" class="text-center">
                                    <input type="checkbox" value="all" name="select_all" /></th>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Phone No.</th>
                                <th>Role Name</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" value="1224" name="select_customer" /></td>
                                <td>1224</td>
                                <td>Korey Partain</td>
                                <td>korey@test.com</td>
                                <td>7544124152</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1225</td>
                                <td>Hosea True</td>
                                <td>hosea@test.com</td>
                                <td>8455123541</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1226</td>
                                <td>Jamey Tharp</td>
                                <td>jamey@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1227</td>
                                <td>Milo Arnone</td>
                                <td>milo@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1228</td>
                                <td>Grady Achenbach</td>
                                <td>grady@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1229</td>
                                <td>Millard Hardage</td>
                                <td>Millard@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" value="1225" name="select_customer" /></td>
                                <td>1230</td>
                                <td>Herb Stelzer</td>
                                <td>herb@test.com</td>
                                <td>9857451421</td>
                                <td>Customer</td>
                                <td>12/02/2018</td>
                                <td class="text-center">
                                    <a href="edit-customer.php" class="d-inline-block" data-toggle="modal" data-target="#EditCustomerModalLong">
                                       <i class="text-success fas fa-pencil-alt mr-2"></i>
                                    </a>  
                                    <a href="customers.php?c=delete&cid=1" class="d-inline-block">
                                        <i class="text-danger fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- DATA TABLE END -->

                </div>
            </div>
        </div>


    <!-- Edit Customer Modal -->
        <div class="modal fade" id="EditCustomerModalLong" tabindex="-1" role="dialog" aria-labelledby="EditCustomerModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form action="" class="" method="post" autocomplete="off">
                <div class="modal-header">
                <h5 class="modal-title" id="EditCustomerModalLongTitle">Edit Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <div class="row">  
                        <div class="col-12">    
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" value="Shrikant Yadav" name="customer_name" required="required" />
                            </div> 
                        </div>
                        <div class="col-12">    
                            <div class="form-group">
                                <label>User Email</label>
                                <input type="email" class="form-control" value="shrikant@test.com" name="customer_email" required="required" />
                            </div> 
                        </div>
                        <div class="col-12">    
                            <div class="form-group">
                                <label>User Phone</label>
                                <input type="text" class="form-control" value="+91 9876543210" name="customer_phone" required="required" />
                            </div> 
                        </div>   
                    </div>
                    <!--Row 1 End-->
            
                <!--Form End-->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary  f_14_18 " data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary f_14_18 ">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>

    </div> 
    <!-- Page End -->


    <!-- Script Files -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                    $('#search_result').DataTable();
                } );
    </script>
</body>
<!-- Body End -->

</html>