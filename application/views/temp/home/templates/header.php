<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Need For Blood</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/font-awesome.min.css">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/owl.theme.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/home/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.html">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <div role="navigation" class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header"><a href="<?php echo base_url();?>home/index" class="navbar-brand"><img src="<?php echo base_url();?>assets/home/img/logo.png" alt="logo" class="hidden-xs hidden-sm"><img src="<?php echo base_url();?>assets/home/img/logo.png" alt="logo" class="visible-xs visible-sm"><span class="sr-only">Go to homepage</span></a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
            </div>
          </div>
          <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url();?>home/about">Who We Are</a></li>
              <li><a href="<?php echo base_url();?>home/mission">Our Mission</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Our Project<b class="caret"></b></a>
                <ul class="dropdown-menu hide">
                  <li><a href="<?php echo base_url();?>home/client_register">Login or Register</a></li>
                  <li><a href="<?php echo base_url();?>home/client_dashboard">Dashboard</a></li>
                  <li><a href="<?php echo base_url();?>home/client_applicants">Applicants</a></li>
                  <li><a href="<?php echo base_url();?>home/client_job">Post a new job</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Our Team <b class="caret"></b></a>
                <ul class="dropdown-menu hide">
                  <li><a href="<?php echo base_url();?>home/index">Home</a></li>
                  <li><a href="<?php echo base_url();?>home/category">Jobs Listing</a></li>
                  <li><a href="<?php echo base_url();?>home/detail">Job detail</a></li>
                  <li><a href="<?php echo base_url();?>home/about">About</a></li>
                  <li><a href="<?php echo base_url();?>index.php/home/contact">Contact</a></li>
                  <li><a href="<?php echo base_url();?>home/blog">Blog listing</a></li>
                  <li><a href="<?php echo base_url();?>home/post">Blog Post</a></li>
                  <li><a href="<?php echo base_url();?>home/packages">Pricing packages</a></li>
                  <li><a href="<?php echo base_url();?>home/testimonials">Testimonials</a></li>
                  <li><a href="<?php echo base_url();?>home/text">Text page</a></li>
                  <li><a href="<?php echo base_url();?>home/faq">FAQ</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url();?>index.php/home/contact">Contact</a></li>
            </ul><a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white"><i class="fa fa-sign-in"></i>Become a Donor</a>
          </div>
        </div>
      </div>
    </header>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
          </div>
          <div class="modal-body">
            <form action="http://jobs.ondrejsvestka.cz/1-2/customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="<?php echo base_url();?>home/client_register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->
