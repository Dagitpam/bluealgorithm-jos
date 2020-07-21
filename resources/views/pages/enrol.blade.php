<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Registration Page</title>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="template/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="template/css/style.css" rel="stylesheet">
</head>
<body>
<!-- Navbar begins -->
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
<img src="template/img/logo3.png" height="90" class="d-inline-block align-top"
      alt="mdb logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>
<!-- navbar end -->
<!-- form -->
<section style="margin-top:10%; margin-bottom:2%">
<div class="container">
<!-- Default form subscription -->
<form class="text-center border border-light p-5" method="post" action="/procceed-enrol">
@csrf
@include('include.message')

    <!-- <p class="h4 mb-4">Enrol for one of programmes</p> -->
    <p class="text-success">Proceed to enroll, you're almost there!</p>
    <!-- Name -->
    <!-- row begins -->
    <div class="row">
        <div class="col-md-6">
        <div class="form-group col-sm-12 col-md-12 col-lg-12" style="display: flex; flex-direction: row;">
            <!-- First name -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-user"></i></button>
            <input type="text" id="firstName" name="fName" class="form-control form-control-sm" placeholder="Your first name">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group col-sm-12 col-md-12 col-lg-12" style="display: flex; flex-direction: row;">
            <!-- Last name -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-user"></i></button>
            <input type="text" id="lastName" name="mName" class="form-control form-control-sm" placeholder=" Your middle name">
        </div>
        </div>
        
    </div>
    <!-- row end -->
    <!-- row begins -->
    <div class="row">
        <div class="col-md-6">
        <div class="form-group col-sm-12 col-md-12 col-lg-12" style="display: flex; flex-direction: row;">
            <!-- First name -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-user"></i></button>
            <input type="text" id="lastName" name="lName" class="form-control form-control-sm" placeholder="Your last name">
        </div>
        </div>
        
        <div class="col-md-6">
        <div class="form-group col-sm-12 col-md-12 col-lg-12" style="display: flex; flex-direction: row;">
            <!-- Last name -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-phone"></i></i></button>
            <input type="text" id="phoneNumber" name="phone" class="form-control form-control-sm" placeholder="Your Phone number">
        </div>
        </div>
        
    </div>
    <!-- row end -->
          <!-- row begins -->
          <div class="row">
        <div class="col-md-6">
        <div class="form-group col-sm-12 col-md-12 col-lg-12" style="display: flex; flex-direction: row;">
            <!-- First name -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-map-marker-alt"></i></button>
            <input type="text" id="residentialArea" name="residArea" class="form-control form-control-sm" placeholder="Residential Area">
        </div>
        </div>
        
        <div class="col-md-6">
        <div class="form-group col-sm-12 col-md-12 col-lg-12" style="display: flex; flex-direction: row;">
            <!-- Last name -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-user-friends"></i></button>
            <select class="form-control form-control-sm" name="gender" id="gender">
                      <option value="" disabled selected>Your Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
        </div>
        </div>
        
    </div>
    <!-- row end -->
    <!-- row begins -->
<div class="row">

    <div class="col-md-6">
        <div class="form-group col-sm-12 col-md-12 col-lg-12" style="display: flex; flex-direction: row;">
            <!--  -->
            <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="fas fa-book-open"></i></button>
            <select class="form-control form-control-sm" name="course" id="course" onChange="prices()">
                      <option value="" disabled selected>Choose course</option>
                      <option value="Robotics">Robotics</option>
                      <option value="Mobile">Mobile</option>
                      <option value="Animation">Animation</option>
                      <option value="Gaming">Gaming</option>
                      <option value="Networking">Networking</option>
                      <option value="Lamp Stack">Lamp Stack</option>
                      <option value="Laravel framework">Laravel framework</option>
                      <option value="Mern Stack">Mern Stack</option>
                      <option value="Cyber Security">Cyber Security</option>
                    </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group col-sm-12 col-md-12 col-lg-12" style="display: flex; flex-direction: row;">
        <!-- First name -->
        <button class="btn-sm" style="border: none; background-color: transparent; border-top: 1px solid rgb(194, 190, 190); border-bottom: 1px solid rgb(194, 190, 190); border-left: 1px solid rgb(194, 190, 190); border-radius: 0px;" disabled><i class="far fa-money-bill-alt"></i></button>
        <input type="text" id="amount" class="form-control form-control-sm" placeholder="amount">
    </div>
        </div>
    </div>
    <!-- row end -->
    <!-- Sign in button -->
    <button class="btn btn-success btn-sm" type="submit">Next</button>
    


</form>
<!-- Default form subscription -->
</div>
</section>
<!-- end of form -->

<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Blue Algorithm</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
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
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
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
</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<!-- Side Modal Top Right -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- To change the direction of the modal animation change .right class -->
<div class="modal fade right" id="sideModalTR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-side modal-top-right" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Side Modal Top Right -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// $(document).ready(function(){
//   $("defaultInline2").click(function(){
//     $("p").html("Hello <b>world!</b>");
//   });
// });
// $("#defaultInline2").click(function(){ 
//   myFunction()
  
//   $("p").html("Hello <b>world</b>!")
//   ;
  
//    });
function prices(){
  var course = document.getElementById("course").value;
  var amount = document.getElementById("amount").value;
  amount.style=""
  

if (course == "Robotics") {
  document.getElementById("amount").value = 90000;
} else if(course == "Mobile") {
  document.getElementById("amount").value = 50000;
}
}


</script>
</html>


