<?php  
session_start();  
include'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png" />
        <title>Hamara Tiffin and Catering Service in Haryana & Delhi NCR</title>
        <meta name="description" content="Hamara Tiffin - Restaurant, food and Drinks. Prefect for RESTAURANT, Bakery, Cafe, Bar, Catering, food business and for personal chef portfolio website.  Catering Service in Haryana & Delhi NCR"> 

        <!-- Bootstrap stylesheet -->
        <link href="assets/libs/bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- icofont -->
        <link href="assets/libs/icofont/css/icofont.css" rel="stylesheet" type="text/css" />
        <!-- crousel css -->
        <link href="assets/libs/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <!-- Animated Headlines css -->
        <link href="assets/libs/animated-headlines/animated-headlines.css" rel="stylesheet" type="text/css" />
        <!-- mb.YTPlayer css -->
        <link href="assets/libs/mb.YTPlayer/css/jquery.mb.YTPlayer.min.css" rel="stylesheet" type="text/css" />
        <!-- Switch Style css -->
        <link href="assets/switch-style/switch-style.css" rel="stylesheet" type="text/css"/>
        <!-- Theme Stylesheet -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="plugin/timepicki.css" rel="stylesheet" type="text/css"/>
        <!-- Switch Color Style css -->
       
        <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
 
  font-family: Raleway;
  padding: 15px 20px 20px 20;
 
  min-width: 300px;
}
#regForm1 {
  background-color: #ffffff;

  font-family: Raleway;
  padding: 40px;
 
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input,select,textarea {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
.modal-header .close {
    margin-top: -2px;
    background: red;
    padding: 3px;
    width: 51px;
    color: white;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #ec8538;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
      border-radius: 4px;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {

      background-color: #ec8538;
}
</style>
    </head>
    <body>
        <div class="wrapper">
            <!-- Loader Start -->
            <div class="loader">
                <div class="loader-inner">
                    <h4>Cooking in progress..</h4>
                    <div id="cooking">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div id="area">
                            <div id="sides">
                                <div id="pan"></div>
                                <div id="handle"></div>
                            </div>
                            <div id="pancake">
                                <div id="pastry"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Loader End -->

            <!--  Header Start  -->
            <header>
                <!--Top Header Start -->
                 <div class="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <ul class="list-inline float-left icon" style="margin-top: 11px;">
                                    <li class="list-inline-item"><a href="#"><i class="icofont icofont-phone"></i> Order Toll Free : 18002702853, +919999417007</a></li>
                                </ul>
                                <!-- Header Social Start -->
                                <ul class="list-inline float-right icon">
                                    <li class="list-inline-item">
                                        <ul class="list-inline social">
                                          <form action="OrderTrack.php" method="post">     
                                           <li class="list-inline-item">                                     
                                          <input type="text" name="track" id="input-name" class="list-inline-item form-control" placeholder="Track Your Order"></li>
                                             <li class="list-inline-item">  
                                              <div class="buttons " >
                                               <input class="btn btn-theme btn-block" name="send" type="submit" value="Track" style="height: 39px !important; line-height: 12px !important;">
                                              </div>
                                               <!-- <a href="payment.php" class="btn-primary btn" id="addcart">Cart </a> -->
                                            </li>
                                            <li class="list-inline-item text-danger">(<i class="icofont icofont-cart-alt" style="color: white;"></i> 
                                             <a href="payment.php" id="addcart">Cart</a>)
                                           </li>
                                        </form>
                                            
                                        </ul>
                                    </li>
                                </ul>
                                <!-- Header Social End -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Top Header End -->

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- Logo Start  -->
                            <div id="logo">
                                <a href="index.php"><img id="logo_img" class="img-fluid" src="img/logo.png" alt="logo" title="logo" /></a>
                            </div>
                            <!-- Logo End  -->
                        </div>

                        <div class="col-md-7 col-sm-6 col-xs-12 paddleft">
                            <!-- Main Menu Start  -->
                            <div id="menu">	
                                <nav class="navbar navbar-expand-md">
                                    <div class="navbar-header">
                                        <span class="menutext d-block d-md-none">Menu</span>
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggler" type="button"><i class="icofont icofont-navigation-menu"></i></button>
                                    </div>
                                    <div class="collapse navbar-collapse navbar-ex1-collapse padd0">
                                        <ul class="nav navbar-nav">
                                            <li class="nav-item"><a href="index.php">Home</a></li>
                                            <li class="nav-item"><a href="about.php">About us</a></li>
                                            <li class="nav-item"><a href="menu.php">Our Menu</a></li>
                                            <li class="nav-item"><a href="service.php">Our Service</a></li>
                                           <!--  <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Blog</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="blog.php">Blog list </a></li>
                                                            <li><a href="blog-2.html">Blog list </a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li> -->
                                            <li class="nav-item"><a href="contact-us.php">Contact Us</a></li>
                                            
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Main Menu End -->
                        </div>
                        <?php if($_SESSION['user_mobile']){?>
                        <div class="col-md-2 col-sm-12 col-xs-12 button-top ">
                           <div id="menu"> 
                                <nav class="navbar navbar-expand-md">
                                    <div class="navbar-header">
                                    <ul class="nav navbar-nav">
                                      <li class="nav-item dropdown"><a href="#" class="dropdown-toggle btn btn-info p-3" data-toggle="dropdown">Account</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="profile.php">Profile </a></li>
                                                            <li><a href="logout.php">Logout </a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <?php } else{ ?>
                        <div class="col-md-2 col-sm-12 col-xs-12 button-top paddleft">
                            <a href="#" class="btn-primary btn" id="#empModal" data-toggle="modal" data-target="#empModal" >
                            Login</a>
                           
                        </div>
                        <?php }?>
                        
                    </div>
                </div>
            </header>
            <!-- Header End   -->
