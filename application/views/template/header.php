

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TeleOperateur | </title>

    <script src="<?php echo base_url(); ?>assets/vendors/js/angular.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/w3.css">

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/css/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/vendors/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/vendors/css/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/vendors/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md"  ng-app="myApp" ng-controller="myCtrl">
<div class="container body">
    <div class="main_container">

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>assets/images/<?php if(isset($_SESSION["manager"])){
                                    echo $_SESSION["manager"]->getPhoto();
                                }
                                if(isset($_SESSION["agent"])){
                                    echo $_SESSION["agent"]->getPhoto();
                                }
                                ?>" alt="">
                                <?php
                                if(isset($_SESSION["agent"])){
                                    echo $_SESSION["agent"]->getFullName();
                                }
                                else if(isset($_SESSION["manager"])){
                                    echo $_SESSION["manager"]->getFullName();
                                }
                                ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="<?php echo base_url(); ?>.Utilisateur/deconnexion"><i class="fa fa-sign-out pull-right"></i> Deconnexion</a></li>
                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->