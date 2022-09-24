<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $title ?> | Greensage Outsourcing Limited </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon/fav/favicon-16x16.png">
    <link rel="manifest" href="assets/img/icon/fav/site.webmanifest">
    <link rel="mask-icon" href="assets/img/icon/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicons -->
    <!-- {{-- <link href="assets/img/favicon.png'" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}} -->
    <!-- <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon"> -->
    <!-- {{-- <link rel="icon" href="assets/img/icon/favicon.ico" type="image/x-icon"> --}} -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/fontello/css/fontello.css" rel="stylesheet">
    <link href="assets/font/flaticon.css" rel="stylesheet">



    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/page/faq.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        .overlay {
            position: absolute !important;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
        }
    </style>

</head>

<body>
    <section id="nav">

       
        <div class="nav-middle">
            <div class="logo">
              <a href="index.php"><img src="assets/img/icon/logo.svg" class="logo" alt="logo" /></a>
            </div>
            <div class="menus">
                <div class="row">
                    <div class="col-4 a">
                        <div class="inner-r ">
                            <div class="icon">
                              <i class="fa fa-phone"></i>
                            </div>
                            <div class="content-r ">
                                <h6>Phone Number</h6>
                                <p>+2348060942907</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 b">
                        <div class="inner-r ">
                            <div class="icon">
                              <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="content-r">
                                <h6>Email Address</h6>
                                <p>info@greensageoutsourcing.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 c">
                        <div class="inner-r">
                            <div class="icon">
                              <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="content-r">
                                <h6>Contact Address</h6>
                                <p>F1, City Mall beside TBS onikan Lagos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-md main">
            <!-- <div class="container"> -->
            <!-- Brand -->
            <a class="navbar-brand" href="index.php"><img src="assets/img/icon/logo.svg" class="logo logo-sticky" alt="logo" /></a>
        

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'home') {
                                                echo 'active';
                                            } ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'about') {
                                                echo 'active';
                                            } ?>" href="about.php">About Us</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($page == 'sales' || $page == 'services'  || $page == 'logistics'  || $page == 'hr'  || $page == 'hmo') {
                                                                echo 'active';
                                                            } ?>" href="services.php" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            
                            <!--<a class="dropdown-item" href="sales-and-marketing-outsourcing.php">Sales and Marketing Outsourcing</a>-->
                            <a class="dropdown-item" href="call-center-outsourcing.php">Call Center Outsourcing</a>
                            <!--<a class="dropdown-item" href="logistics-outsourcing.php">Logistics Outsourcing</a>-->
                            <!--<a class="dropdown-item" href="hr-outsourcing.php">HR Outsourcing</a>-->
                            <!--<a class="dropdown-item" href="hmo-outsourcing.php">Outsourcing HMO</a>-->
                            <a class="dropdown-item" href="debts-recovery-outsourcing.php">Debt Recovery Outsourcing</a>
                            <!--<a class="dropdown-item" href="sales-and-marketing-outsourcing.php">Sales and Marketing Outsourcing</a>-->
                            <a class="dropdown-item" href="services.php">Services</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'faq') {
                                                echo 'active';
                                            } ?>" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'contact') {
                                                echo 'active';
                                            } ?>" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- </div> -->

        </nav>

        <nav id="navbar" class="navbar navbar-expand-md main-and-mobile">
            <div class="container">
            <!-- Brand -->
            <div class="nav-bar-wrap">
                <a class="navbar-brand" href="index.php"><img src="assets/img/icon/logo.svg" class="logo logo-sticky" alt="logo" /></a>
        

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-bars"></i>
            </button>
            </div>
            

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'home') {
                                                echo 'active';
                                            } ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'about') {
                                                echo 'active';
                                            } ?>" href="about.php">About Us</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($page == 'sales' || $page == 'services'  || $page == 'logistics'  || $page == 'hr'  || $page == 'hmo') {
                                                                echo 'active';
                                                            } ?>" href="services.php" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">

                            <!--<a class="dropdown-item" href="sales-and-marketing-outsourcing.php">Sales and Marketing Outsourcing</a>-->
                            <a class="dropdown-item" href="call-center-outsourcing.php">Call Center Outsourcing</a>
                            <!--<a class="dropdown-item" href="logistics-outsourcing.php">Logistics Outsourcing</a>-->
                            <!--<a class="dropdown-item" href="hr-outsourcing.php">HR Outsourcing</a>-->
                            <!--<a class="dropdown-item" href="hmo-outsourcing.php">Outsourcing HMO</a>-->
                            <a class="dropdown-item" href="debts-recovery-outsourcing.php">Debt Recovery Outsourcing</a>
                            <!--<a class="dropdown-item" href="sales-and-marketing-outsourcing.php">Sales and Marketing Outsourcing</a>-->
                            <a class="dropdown-item" href="services.php">Services</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'faq') {
                                                echo 'active';
                                            } ?>" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'contact') {
                                                echo 'active';
                                            } ?>" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            </div>

        </nav>
    </section>