<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>FMS | Fixed Deposit</title>
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
    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark trans-navigation fixed-top navbar-togglable">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h3>Finance Management System</h3>
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
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
        </div> <!-- / .container -->
    </nav>

    <!-- HERO
    ================================================== -->
    <section class="banner-area py-5" id="banner-3">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-6">
                    <div class="banner-content text-center style-2">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                            <b>Gold</b> Investment Plan
                        </h1>

                        <!-- Button -->
                        <a href="#" target="_blank" class="btn btn-primary btn-circled">
                            Purchase now
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-white rounded-lg shadow-sm p-5">
                                <h3 class="alert alert-success text-center">Invest in Gold</h3>
                                <form id="form1" method="POST" action="GoldPayment.php"> 
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label>Date of Fixed Deposit</label>
                                            </div>
                                            <div class="col">
                                                <p style="color: #21c87a;float:right" id="currentDate"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label>Amount(₹)</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control" type="text" name="Amount" id="amount" value="5000" placeholder="₹" />
                                            </div>
                                        </div>
                                    </div>
                                    <buttons type="button" id="calculateFD" class="btn btn-primary btn-block rounded-pill shadow-sm" onclick="document.getElementById('form1').submit();">Purchase</buttons>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <section class="section" id="service" style="background-color: whitesmoke">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-lg-7 pl-4 text-center">
                    <div class="service-heading">
                        <h1>Partners</h1>
                        <p>Get a better deal and start saving money today</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <img src="images/partners/sbi.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>State Bank of India</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <img src="images/partners/post.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Indian Post</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <img src="images/partners/bob.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Bank of Baroda</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-icon">
                            <img src="images/partners/patym.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Patym</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-icon">
                            <img src="images/partners/axis.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Axis Bank</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <img src="images/partners/paypal.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>PayPal</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <img src="images/partners/google.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Google Pay</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <img src="images/partners/icici.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>ICICI Bank</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <img src="images/partners/lic.png" width="70" />
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>LIC</h4>
                            <p>Our team are experts in matching you with the right provider.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="pl-3">Want to know more about this? <a href="#">Contact us</a></p>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

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

</body>
</html>