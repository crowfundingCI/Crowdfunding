<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/templatemo-style.css">
        <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- 
        Masonry Template 
        http://www.templatemo.com/preview/templatemo_434_masonry
        -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>

        <div class="content-bg"></div>
        <div class="bg-overlay"></div>

        <!-- SITE TOP -->
        <div class="site-top">
            <div class="site-header clearfix">
                <div class="container">
                    <a href="#" class="site-brand pull-left"><strong>Exclushare</strong></a>
                    <div class="header_menu pull-right">
                        <ul>
                            <li><a href="#" class="">Home</a></li>
                            <li><a href="#" class="">Public Content</a></li>
                            <li><a href="#" class="">Exclusive Content</a></li>
                            <li><a href="<?php echo site_url('Login');?>" class="">Login</a></li>
                            <li><a href="#" class="">Subscribe</a></li>
                            <li><a href="#" class="">Support</a></li>
                        </ul>
                    </div>
                </div>
                
            </div> <!-- .site-header -->
            <div class="site-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2>Get Started With <span class="blue">Exclushare</span><span class="green">.com</span></h2>
                            <p>Recurring funding for artists and creators.<br/>Creators receive millions of dollars each month in support from their patrons</p>
                            <div><a href="#"><strong>2,000 posts</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><strong>1m followers</strong></a></div>
                        </div>
                    </div>
                </div>
            </div> <!-- .site-banner -->
        </div> <!-- .site-top -->