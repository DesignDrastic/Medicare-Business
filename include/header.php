<?php 
   $file = basename($_SERVER['PHP_SELF']);
   $page = strrpos($file, '.');
   $page = substr($file, 0, $page);
   ?>
<!--
   Crafted and Designed By DesignDrastic
   Author: DesignDrastic
   Author URL: http://designdrastic.com
   License URL: http://designdrastic.com/license
   -->
<!doctype html>
<html>
   <head>
      <title>Medicare Business</title>
      <meta name="description" content="Medicare Business HTML5 AND CSS3 Responsive Template">
      <meta name="author" content="DesignDrastic">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!--Bootstrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- Google fonts -->
      <link href='https://fonts.googleapis.com/css?family=Lato|Poiret+One|Source+Sans+Pro|PT+Sans|Dosis|Ubuntu|Ubuntu+Condensed' rel='stylesheet' type='text/css'>
      <!-- Font Awesome Css -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <!--coustom css-->
      <link href="css/style.css" rel="stylesheet" type="text/css"/>
      <!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> -->
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.css">
      <!-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
      <!--default-js-->
      <script src="js/jquery-2.1.4.min.js"></script>
      <!--Bootstrap-js-->
      <script src="js/bootstrap.min.js"></script>
      <script src="owlcarousel/owl.carousel.min.js"></script>
   </head>
   <body>
      <div class="header">
      <div class="container">
         <div class="pull-right">
            <div class="navbar-action">
               <div class="navbar-action-center">
                  <p class="ad-call"><i class="fa fa-phone"></i>&nbsp;Call Us : 1234567890</p>
                  <p class="ad-call"><i class="fa fa-envelope"></i>&nbsp;Email : abc@gmail.com</p>
               </div>
            </div>
         </div>
         <div class="pull-left">
            <div class="logo">
               <a href="index.html"><img src="images/sushrusha.png" class="img-responsive" width="130"></a>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="header_nav" id="home">
         <div  class="container">
            <nav class="navbar navbar-default chn-gd">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                     <li <?php if($page == 'index') echo "class='active'"; ?>><a href="index.html"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                     <li <?php if($page == 'about') echo "class='active'"; ?>><a href="about.html"><i class="fa fa-info-circle"></i>&nbsp;About Us</a></li>
                     <li <?php if($page == 'services') echo "class='active'"; ?>><a href="services.html"><i class="fa fa-cog"></i>&nbsp;Services</a></li>
                     <li <?php if($page == 'portfolio') echo "class='active'"; ?>><a href="portfolio.html"><i class="fa fa-calendar"></i>&nbsp;Portfolio</a></li>
                     <li <?php if($page == 'testimonial') echo "class='active'"; ?>>  <a href="testimonial.html"><i class="fa fa-commenting-o"></i>&nbsp;Testimonial</a></li>
                     <li <?php if($page == 'contact') echo "class='active'"; ?>>  <a href="contact.html"><i class="fa fa-envelope"></i>&nbsp;Contact Us</a></li>
                     <!-- <li class="las"><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact us</a></li> -->
                     <div class="clearfix"></div>
                     <!--script-->
                     <script type="text/javascript">
                        jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){   
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                        });
                        });
                        
                        //    Portfolio jquery
                        $(document).ready(function(){
                          $(".filter-button").click(function(){
                            var value = $(this).attr('data-filter');
                            if(value == "all")
                            {
                              //$('.filter').removeClass('hidden');
                              $('.filter').show('1000');
                            }
                            else
                            {
                        //                    $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                        //                    $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                              $(".filter").not('.'+value).hide('3000');
                              $('.filter').filter('.'+value).show('3000');
                            }
                            if ($(".filter-button").removeClass("active")) {
                               $(this).removeClass("active");
                              }
                               $(this).addClass("active");
                          });
                              /*if ($(".filter-button").removeClass("active")) {
                               $(this).removeClass("active");
                              }
                               $(this).addClass("active");*/
                          });
                     </script>
                     <!--script-->
                  </ul>
                  <!-- /.navbar-collapse -->
                  <div class="clearfix"></div>
                  <!-- /.container-fluid -->
            </nav>
            </div>
         </div>
      </div>