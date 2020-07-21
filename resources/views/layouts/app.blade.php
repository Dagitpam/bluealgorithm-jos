<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blue Algorithm') }}</title>
    <!-- MDB icon -->

  <!-- Favicons -->
  <link href="template/img/logo1.png" rel="icon">
  <link href="template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript Libraries -->
<script src="template/lib/jquery/jquery.min.js"></script>
  <!-- Libraries CSS Files -->
  <link href="template/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="template/lib/animate/animate.min.css" rel="stylesheet">
  <link href="template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <script src="template/lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- Main Stylesheet File -->
  <link href="template/css/style.css" rel="stylesheet">
    </head>
<body>
    <div id="app">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
      <!-- <img src="template/img/logo.png" alt=""> -->
         
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="#intro"><img src="template/img/logo4.png" alt=""> </a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Courses</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="/blog">Blog</a></li>
          
          <li><a href="#contact">Contact</a></li>
          <li><a href="/verify">Verify Certificate</a></li>
          <li><a href="/register">Enrol Now!</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<!--/.Navbar -->
        <main>
          <div class="container">
          </div>
            @yield('content')
        </main>

    </div>
  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Blue Algorithm</h3>
            <p>
              At Blue Algorithm Technology Limited, we believe completely in satisfying our client needs and that is the main reason why 
              all of what we do is done with the client at heart.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Block 2, Suit 1, 2, 3 1st Floor Kalwa Plaza. <br>
              Zarmaganda Rayfield Road Roundabout Jos, <br>
              Plateau State Nigeria. <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
      
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Powered by Blue Algorithm
      </div>
    </div>
  </footer><!-- #footer -->
  
  <!-- JavaScript Libraries -->
  <script src="template/lib/jquery/jquery.min.js"></script>
  <script src="template/lib/jquery/jquery-migrate.min.js"></script>
  <script src="template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="template/lib/easing/easing.min.js"></script>
  <script src="template/lib/superfish/hoverIntent.js"></script>
  <script src="template/lib/superfish/superfish.min.js"></script>
  <script src="template/lib/wow/wow.min.js"></script>
  <script src="template/lib/waypoints/waypoints.min.js"></script>
  <script src="template/lib/counterup/counterup.min.js"></script>
  <script src="template/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="template/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="template/lib/lightbox/js/lightbox.min.js"></script>
  <script src="template/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="template/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="template/js/main.js"></script>
</body>
</html>
