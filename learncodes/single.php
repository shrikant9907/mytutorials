<?php 
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

  <title>Free online tutorials and codes for students and beginners - codematra.com</title>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:title" content="" />
  <meta property="og:description" content="" />

  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  <meta name="google-site-verification" content="" />
  <meta name="robots" content="noindex, nofollow" />

  <!-- <meta name="site-icon" content="images/favicon.png" />
  <link rel="icon" type="image/x-icon" href="images/favicon.png"/>
  <link rel="shortcut icon" href="images/favicon.png" /> -->

  <!-- required Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">

  <!-- required CSS -->
  <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../css/all.min.css" />
  <link rel="stylesheet" href="../../../css/slick.css" />
  <link rel="stylesheet" href="../../../css/slick-theme.css" />
  <link rel="stylesheet" href="../../../css/components.css" />
  <link rel="stylesheet" href="../../../css/utils.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!-- <link rel="stylesheet" href="css/responsive.css" /> -->
    

</head>
<body>
 
<!-- Header Start -->
<header id="main_header" class="header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3"> 
          <div class="site_logo with_image">
            <a class="logo_link" href="#logoLink">
              <img class="logo_image"  src="images/site-logo.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-12 col-md-9">
          <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#categories">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Quizzes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Interview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Blog</a>
                </li>
                <li class="nav-item nav-item d-flex justify-content-center align-items-center">
                  <a href="search.html" class="search-trigger"><i class="fa fa-search text_orange ml_10" aria-hidden="true"></i></a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link btn btn-primary btnui3s" data-toggle="modal" data-target="#basicLoginFromModal" href="#">Login</a>
                  <a class="nav-link btn btn-primary btnui3s" data-toggle="modal" data-target="#basicLoginFromModal" href="#">Post</a>
                </li> -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>

   
</header>  
<!-- Header End -->

<div class="single-page bg-light common-section-ui pt_70">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-8">
                    <div class="card cui2 noshadow r_0 w-100 typography">
                    <div class="card-body pri_30 pli_30 pbi_30">
                        <h1 class='text-primary'>How to pass data from child to parent component in Angular 7/8/9?</h1>
                        <a href="#" class="d-inline-block w-100"><img class="card-img-top mb_20" src="https://picsum.photos/300/150" alt=""></a>
                        <div class="text-dark px_5 py_5 mb_10 f14 d-flex justify-content-between">
                            <span><i class="fa fa-tag mr_5" aria-hidden="true"></i> Angular</span> 
                            <span><i class="fa fa-calendar mr_5" aria-hidden="true"></i> 1 Dec 2020</span>
                        </div>
                        <div class="f16">
                        <p>Angular uses the @Output() decorator and an EventEmitter property to share the information from the child component to the parent component.</p>
                        <p>In the program, We will emit an event whenever some change happens in the child component. In the parent, we are going to bind an event handler that will accept the information or data from the child component.</p>
                        <h3>Create parent and child components (Skip if already have components)</h3>    
                        <p>Creating a component with the name parent and child.</p>
                        <p><code>Parent component: ng g c parent</code></p>
                        <p><code>Child component: ng g c child</code></p>
                        
                        <h4>The above commands will create new components inside app directory of your application.</h4>
                        
                        Use of @output() decorator and EventEmitter in child component
                        Open the child.component.ts file of the child component.
                        
                        1. Import the Input
                        import { Component, OnInit, Output, EventEmitter } from '@angular/core'; 
                        
                        <h5>2. Create a variable/property</h5>
                        
                        counts = 0;
                        <pre>@Output() incrementCounter = new EventEmitter();</pre>
                        
                        3. Create a method/function with the name incrementCountsOnClick
                        
                        Inside the incrementCountsOnClick function. Increase the value of counts by 1.
                        
                        this.counts = this.counts + 1
                        
                        Then pass the increment value to the emitter.
                        
                        this.incrementCounter.emit(this.counts);
                        
                        Open the child.component.html file and add the following code.
                        
                        <button (click)="incrementCountsOnClick()">Click here</button>
                        
                        Now, When you will click on the click here button. It will call the incrementCountsOnClick function. Then it will increase the value of counts the variable by 1. Then emits the incremented value to incrementCounter the emitter.
                        
                        Using the event binding to accept the value from child emitter.
                        Open the parent.component.ts file.
                        
                        Create a variable/property.
                        
                        countsValue = 0;
                        
                        Create a function/method.
                        
                        getCountsValue(counts) { this.countsValue = counts; }
                        
                        Open the parent.component.html file and add the child component
                        
                        <app-child (incrementCounter)="getCountsValue($event)"></app-child>
                        
                        Display the countsValue using following line
                        
                        <p>Counts = {{ countsValue }}</p>
                        
                        

                        </div>
                        <!-- <a class="btn btn-primary btn-sm  btnui1 w-100 text-white">View Code <i class="ml_5 fas fa-angle-double-right    "></i></a> -->
                    </div>
                </div>                        
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card cui2 noshadow r_0 w-100 typography">
                  <div class="card-body pri_30 pli_30 pbi_30">
                     <h2 class='text-primary'>Recent Posts</h2>
                     <div class="f16">
                      <p>Angular uses the @Output() decorator and an Eve</p>
                      <p>Angular uses the @Output() decorator and an Eve</p>
                      <p>Angular uses the @Output() decorator and an Eve</p>
                      <p>Angular uses the @Output() decorator and an Eve</p>
                      <p>Angular uses the @Output() decorator and an Eve</p>
                     </div>
                     <!-- <a class="btn btn-primary btn-sm  btnui1 w-100 text-white">View Code <i class="ml_5 fas fa-angle-double-right    "></i></a> -->
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

<footer class="section-footer footer_style1 f14">
  <div class="footer_top pt_60 pb_20">
    <div class="container">
      <div class="row">
          <div class="col-6 col-md-3">
              <h3 class="text-primary f16 lh18 mb_20 text-uppercase text_bold">Get in touch</h3>
            <!-- <p><img class="footer_logo" src="https://picsum.photos/id/475/300/100" alt="" /></p> -->
                   <ul class="address">
                     <li><i class="fas fa-phone-alt text-primary"></i> <a href="mailto:0000000000">000 000 0000</a></li>
                     <li> <i class="fa fa-envelope text-primary" aria-hidden="true"></i><a href="mailto:info@codematra.com">info@codematra.com</a></li>
                     <li><i class="fas fa-map text-primary"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </li>
                   </ul>
                   <ul class="socialicons f14 colored siconsc"> 
                     <li class="facebook"><a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     <li class="twitter"><a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                     <li class="instagram"><a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                     <li class="youtube"><a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                   </ul>
               </div>
                <div class="col-6 col-md-3">
                 <h3 class="text-primary f18 lh22 mb_20 text-uppercase">Learn Codes</h3>
                 <ul class="menu">
                   <li><a href="#">WordPress</a></li>
                   <li><a href="#">Angular</a></li>
                   <li><a href="#">Bootstrap</a></li>
                   <li><a href="#">HTML and CSS</a></li>
                   <li><a href="#">PHP Programming</a></li>
                   <li><a href="#">Python Programming</a></li>
                 </ul>
               </div>
               <div class="col-6 col-md-3">
                   <h3 class="text-primary f18 lh22 mb_20 text-uppercase">Knowledge</h3>
                   <ul class="menu">
                       <li><a href="#">Blog</a></li>
                       <li><a href="#">MCQ's</a></li>
                       <li><a href="#">Test Quzzes</a></li>
                       <li><a href="#">Interview Questions</a></li>
                       <li><a href="#">Tools</a></li>
                       <!-- <li><a href="#">Support</a></li> -->
                       <!-- <li><a href="#">Request a quote</a></li> -->
                       <!-- <li><a href="#">Hire a developer</a></li> -->
                   </ul>
               </div>
               <div class="col-6 col-md-3">
                   <h3 class="text-primary f18 lh22 mb_20 text-uppercase">Resources</h3>
                   <ul class="menu">
                       <li><a href="#">Sitemap</a></li>
                       <li><a href="#">Privacy Policy</a></li>
                       <li><a href="#">Terms and Conditions</a></li>
                   </ul>
               </div>
      </div>
    </div>
  </div>

  <div class="footer_bottom bg-primary text-white pt_20 pb_10">
    <div class="container">
      <div class="row">
         <div class="col">
           <p class="f12 lh18 mb_10">&copy; 2020 codematra.com | All Rights Reserved.</p>
         </div>
         <div class="col">
           <p class="f12 lh18 mb_10 text-right">Developed with <span class="f18">&hearts;</span> for you<a target="_blank" class="text-white hide" href="javascript:void('0');">Shrikant</a></p>
         </div>
      </div>
    </div>
  </div>
  
</footer>

<a href="#" class="gotoparrow"><i class="fas fa-arrow-up"></i></a>
  
  <!-- Modal -->
  <div class="modal fade" id="basicLoginFromModal" tabindex="-1" role="dialog" aria-labelledby="basicLoginFromModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <form class="fui fui1p w-100" action="" method="post" enctype="multipart/form-data">
      <div class="mui muic mui2 muis modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="basicLoginFromModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-success alertrcs dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="form-group">
            <input name="email" value="" type="text" class="form-control" placeholder="Enter your email" /> 
          </div>
          <div class="form-group">
            <input name="password" value="" type="password" class="form-control" placeholder="Enter your password" />
          </div>
          <div class="d-flex justify-content-between">
            <div class="rememberme m-0">
              <label for="rememberme" class="d-flex align-items-center"><input class="mr_5 min_h_0" id="rememberme" name="rememberme" value="yes" type="checkbox" /> Remember me</label>
            </div>
            <a href="#" class="link">Forgot Password?</a>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btnui3" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btnui3">Sign in</button>
        </div>
      </form>
      </div>
    </div>
  </div>


  <!-- jQuery -->
	<script src="../../../js/jquery.min.js" type="text/javascript"></script> 

  <!-- Popper JS -->
	<script src="../../../js/popper.min.js" type="text/javascript"></script>

	<!-- Bootstrap -->
	<script src="../../../js/bootstrap.min.js" type="text/javascript"></script>

	<!-- Slick Slider -->
	<script type="text/javascript" src="../../../js/slick.min.js"></script>

	<!-- Custom Script -->
	<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>  