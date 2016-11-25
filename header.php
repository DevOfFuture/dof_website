<?
/**
* @author : Onwuka Gideon  <dongidomed@gmail.com> <dongido>
* @Description: Sends email...
*/
   if($_SERVER['REQUEST_METHOD'] == "POST"){
    die("mail integration in progress...");
      $name    = $_POST[''];
      $email   = $_POST[''];
      $phone   = $_POST[''];
      $message = $_POST[''];
      $subject = $_POST[''];
      $status = (mail()) ? "success" : 'fail' ;
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DOF - Home Of Developers</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="img/core-img/favicon.ico">

    <!-- ::::::::::::::::::::::::::: All CSS Files ::::::::::::::::::::::::::: -->

    <!-- Style css -->
    <link rel="stylesheet" href="style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Preloader Start -->
    <!--<div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div> -->
    <!-- /.end preloader -->

    <!-- ::::::::::::::::::::::::::: Header Start ::::::::::::::::::::::::::: -->
    <header class="header_area">
        <!-- Main Header Area Start -->
        <div class="main_header_area" id="sticky">
            <div class="container">
                <div class="row">

                    <div class="col-sm-2 col-xs-9">
                        <!-- Logo Area:: For better view in all device please use logo image max-width 70px -->
                        <div class="logo_area">
                            <a href="index.html"><img src="images/dof.png" alt=""></a>
                        </div>
                    </div>

                    <div class="col-sm-10 col-xs-12">
                        <!-- Menu Area Start -->
                        <div class="main_menu_area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current_page_item"><a href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#service">Service</a></li>
                                        <li><a href="#advisor">Advisor</a></li>
                                        <li><a href="#work">Work</a></li>
                                        <li><a href="#price">Prices</a></li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <!-- Menu Area End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
    </header>
    <!-- ::::::::::::::::::::::::::: Header End ::::::::::::::::::::::::::: -->