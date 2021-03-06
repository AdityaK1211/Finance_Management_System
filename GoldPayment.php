<?php
 session_start();
 include('DBConnection.php');
 if(!isset($_SESSION['TId']))
 {
    $_SESSION['TId'] = 1;
 }
    $random = $_SESSION['TId'] + rand(10,1000);
    $_SESSION['TId'] = $random;
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>FMS | Payment</title>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Icon Font css -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="plugins/fonts/Pe-icon-7-stroke.css">
    <!-- Themify icon Css -->
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="top-header">
    <!-- LOADER TEMPLATE -->
    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="index.html">
                            <h2>Finance Management System</h2>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12">

                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-email"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">fms_admin@gmail.com</h5>
                            <p>Email Us</p>
                        </div>
                    </div>
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-time"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">At Your Service</h5>
                            <p>24x7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation menu-2" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link js-scroll-trigger" href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="service.html" class="nav-link js-scroll-trigger">
                                Loans
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="investment.html" class="nav-link js-scroll-trigger">
                                Investments
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="about.html" class="nav-link js-scroll-trigger">
                                About
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="contact.html" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>

    <!-- HERO
    ================================================== -->
    <section id="about" class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-6 col-md-6">
                    <h1>Payment</h1>    
                    <form id="form1" action="GoldTransaction.php" method="Post">              
                        <div class="form-group row">
                            <div class="col-2">
                                <label class="col-form-label">Transaction ID</label>
                            </div>
                            <div class="col-3">
                                <input type="text" readonly class="form-control-plaintext" id="tid" name="TId" value="<?php echo $_SESSION['TId'];?>">
                            </div>
                            <div class="col-2">
                                <label class="col-form-label">Payment Date</label>
                            </div>
                            <div class="col-3">
                                <input type="text" readonly class="form-control-plaintext" id="currentDate" name="PaymentDate" value="<?php echo date("d-M-Y")?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label class="col-form-label">Name of Customer</label>
                            </div>
                            <div class="col-3">
                                <input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $_SESSION['CustName'];?>" name="CustName">
                            </div>
                            <div class="col-2">
                                <label class="col-form-label">Email Address</label>
                            </div>
                            <div class="col-3">
                                <input type="text" readonly class="form-control-plaintext" id="email"  value="<?php echo $_SESSION['CustEmail'];?>" name="CustEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label class="col-form-label">Address</label>
                            </div>
                            <div class="col-3">
                                <input type="text" readonly class="form-control-plaintext" id="address"  value="<?php echo $_SESSION['CustCity'].",".$_SESSION['CustState'];?>" name="CustAddress">
                            </div>
                            <div class="col-2">
                                <label class="col-form-label">Country</label>
                            </div>
                            <div class="col-3">
                                <input type="text" readonly class="form-control-plaintext" id="address"  value="<?php echo $_SESSION['CustCountry'];?>" name="CustCountry">
                            </div>
                        </div>
        
                        <div class="form-group row">
                            <div class="col-2">
                                <label class="col-form-label">Amount(Rs)</label>
                            </div>
                            <div class="col-3">
                                <input type="text" readonly class="form-control-plaintext" id="amount" value="<?php echo $_POST['Amount'];?>" name="CustAmount">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-8">
                                <button class="btn btn-primary btn-block rounded-pill shadow-sm" type="submit" id="pay" name="pay" onclick="document.getElementById('form1').submit();">Confirm Payment</button>
                            </div>
                            <div class="col-4">
                                <div class="elem-group">
                                    <label for="captcha">Please Enter the Captcha Text</label>
                                    <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
                                    <br>
                                    <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="section" id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            Finance Management System
                        </a>
                        <p>
                            A place that provided a common service layer for all consumer services related to loans and investments.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 ml-lg-auto col-sm-12">
                    <div class="footer-widget">
                        <h3>Team</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <p>Riva Desai</p>
                            </li>
                            <li>
                                <p>Hassan Kapadia</p>
                            </li>
                            <li>
                                <p>Aditya Kataria</p>
                            </li>
                            <li>
                                <p>Vishal Mistry</p>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Products Shop
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>Socials</h3>
                        <!-- Links -->
                        <ul class="list-unstyled footer-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest-p"></i>Pinterest
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>linkedin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>YouTube
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- / .row -->


            <div class="row text-right pt-3">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    <p>
                        &copy; Copyright <strong>Group-1 BE-III CO-E</strong> All rights reserved.
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>
    <!--  Page Scroll to Top  -->
    <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Scripts -->
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Map Js -->
    <script src="plugins/google-map/gmap3.min.js"></script>

    <script src="js/form/contact.js"></script>
    <script src="js/theme.js"></script>
    
    <!--Current Date-->
    <script>
        var d = new Date();
        var dd = d.getDate();
        var mm = d.getMonth() + 1; //January is 0!
        var yyyy = d.getFullYear();

        if (dd < 10) {
            dd = '0' + dd
        }

        if (mm < 10) {
            mm = '0' + mm
        }

        d = dd + '/' + mm + '/' + yyyy;
        document.getElementById("currentDate").innerHTML = '<b>' + d + '</b>';

    </script>
    
    <script type="text/javascript">
        var refreshButton = document.querySelector(".refresh-captcha");
        refreshButton.onclick = function () {
            document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
        }
    </script>
</body>
</html>