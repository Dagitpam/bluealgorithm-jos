@extends('layouts.app')
@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="template/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>We conduct business professionally for quality performance in everything we do..</p>
                <a href="/register" class="btn-get-started scrollto">Enrol now!</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="template/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We understand</h2>
                <p> our advance knowledge, extensive global partnerships and 
                well knitted Local presence allows us identify,
                 anticipate and satisfy customer related needs.</p>
                <a href="/register" class="btn-get-started scrollto">Enrol now!</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="template/img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Inspire the quest for technological innovation</h2>
                <p>Blue Algorithm powered a program that offers free exciting and qualitative 
                ICT and life skilled training, innovation and mentorship. It is specially designed and open for every
                 African child between the ages of nine to fifteen years, so that we 
                can deliberately inspire the quest for technological innovation and passion for coding</p>
                <a href="/register" class="btn-get-started scrollto">Enrol now!</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="template/img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We simplify</h2>
                <p>whether it’s the way we communicate, provide information, answer queries 
                or support our clients we will ensure that the 
                solution is simple yet effective</p>
                <a href="/register" class="btn-get-started scrollto">Enrol now!</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="template/img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Team Work</h2>
                <p>We recognize that our employees are our greatest asset. As a result, we have 
                created a work environment that value team work, full participation and empowerment so 
                that employees work together to 
                realize their full potential, for the overall success of the company.</p>
                <a href="/register" class="btn-get-started scrollto">Get Star</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Training</a></h4>
            <p class="description">
              We at Blue-algorithm provide immense training for individuals in web development,
              mobile development, Gaming, Animation etc. <a href="/register">Enrol now!</a>  
            </p>
          </div>

          <div class="col-lg-4 box box-bg">
          <i class="icon ion-ios-book-outline"></i>
            <h4 class="title"><a href="">ALPHA-SIMS</a></h4>
            <p class="description">Alpha-Sims is a School Management System that
               provides all key features required for the effective administration of any school: 
                Nursery, Kindergarten, Elementary, Secondary or High school. By using Alpha-Sims,
                 you can easily implement 
              a state-of-the-art system that can offer you all the features you may need. <a href="https://www.alpha-sims.com/">Visit us here...</a></p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Kids Code Club Africa</a></h4>
            <p class="description">It is a program that offers free exciting and 
              qualitative ICT and life skilled training, innovation and mentorship. It is specially designed and open for every African child between the ages of nine to fifteen (9-15) years, so that we can deliberately 
              inspire the quest for technological innovation and passion for coding. <a href="http://kidcodeclubafrica.org/">Visit us here...</a></p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>
          Blue Algorithm Technology limited is a fast growing and leading innovation software company, industrial 
                technology solutions provider and technology training company. We provide cutting edge intelligent solution and consulting
                services to businesses, organization and government institutions, by building impactful digital solution,
                powered by latest technologies. We provide a complete business solution like web and mobile application,
                Website Design and Development, CCTV, Networking, Hardware and etc.
          </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="template/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
               Our Mission is to champion a global brand, with outstanding products and services at the best value.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="template/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Client Focus</a></h2>
              <p>
              At Blue Algorithm Technology Limited, we believe completely in satisfying our client 
              needs and that is 
              the main reason why all of what we do is done with the client at heart.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="template/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Our Vission is to inspire creative and innovative ecosystem for technological and economic advancement.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Blue Algorithm is an  innovation software company, industrial technology solutions provider and technology training company
          that provides services in the following areas:
          </p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="#">Software Development</a></h4>
            <p class="description">We are known as the hub of software development expert, for our profficient and excellent track record in software development.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="#">School Management System</a></h4>
            <p class="description">We provide all key features required for the effective administration of any school: Nursery, Kindergarten, Elementary, Secondary or High school.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Graphics / Animation</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Software Development Training</a></h4>
            <p class="description">Enrol today in Programming Training, enhance your skills.
              In order for programmers and developers
              to meet the market needs and growing demand
              Brytosoft offers Basic and Advance training on
              several programming languages</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">IT Consultancy</a></h4>
            <p class="description">We offer consultancy service:
              To new start ups and existing companies.
              To Government Agencies.
              To N.G.O's and Communities.
              Individuals.e.t.c</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Cybersecurity / Networking</a></h4>
            <p class="description">Cyberattacks seem to be in the news
              every day, with hackers finding ways to
              steal valuable info. Lets shield your gadjets and valuables from cybercrimes.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Courses</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">App</li>
              <li data-filter=".filter-web">App</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a class="link-preview" title="Preview" data-toggle="modal" data-target="#web"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#" data-toggle="modal" data-target="#web">WEB DEVELOPMENT(Front End)</a></h4> 
                <p class="text-info">₦ 70,000  for 3 Months</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a  class="link-preview" data-toggle="modal" data-target="#lamp" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4><a href="#" data-toggle="modal" data-target="#lamp">LAMP STACK</a></h4> 
                <p class="text-info">₦ 85,000  for 3 Months</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="template/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
      
              </figure>
              <div class="portfolio-info">
              <h4><a href="#">MOBILE DEVELOPMENT</a></h4> 
                <p class="text-info">₦ 100,000  for 3 Months</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a  class="link-preview" data-toggle="modal" data-target="#mern" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                 <h4><a href="#" data-toggle="modal" data-target="#mern">MERN STACK</a></h4> 
                <p class="text-info">₦ 85,000  for 3 Months</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a class="link-preview" data-toggle="modal" data-target="#network" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4><a href="#" data-toggle="modal" data-target="#network">NETWORKING</a></h4> 
                <p class="text-info">₦ 65,000  for 3 Months</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a class="link-preview" data-toggle="modal" data-target="#cyber" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4><a href="#" data-toggle="modal" data-target="#cyber">CYBER SECURITY</a></h4> 
                <p class="text-info">₦ 100,000  for 3 Months</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="template/template/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4><a href="#">PYTHON PROGRAMING</a></h4> 
                <p class="text-info">₦ 80,000  for 3 Months</p>
              </div>
            </div>
          </div> 

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a class="link-preview" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4><a href="#">UI/UX </a></h4> 
                <p class="text-info">₦ 70,000  for 3 Months</p>
              </div>
            </div>
          </div> 

           <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="template/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4><a href="#">GAMING</a></h4> 
                <p class="text-info">₦ 100,000  for 3 Months</p>
              </div>
            </div>
          </div> 


          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="template/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a class="link-preview" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4><a href="#">GRAPHIC DESIGN </a></h4> 
                <p class="text-info">₦ 70,000  for 3 Months</p>
              </div>
            </div>
          </div> 

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="template/img/logo.png" alt="">
          <img src="template/img/logo.png" alt="">
          <img src="template/img/logo.png" alt="">
          <img src="template/img/logo.png" alt="">
          <img src="template/img/logo.png" alt="">
          <img src="template/img/logo.png" alt="">
          <img src="template/img/logo.png" alt="">
          <img src="template/img/logo.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Stories</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="template/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="template/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="template/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="template/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="template/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="template/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="template/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="template/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="template/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="template/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="template/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="template/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="template/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="template/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3><b>MEET</b> <small>the</small> <b>TEAM</b></h3>
          <p>Our team is made up of diverse and highly skilled professionals from all over the country that are passionate about solving real life problems in their societies</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="template/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="template/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="template/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="template/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p></p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Block 2, Suit 1, 2, 3 1st Floor Kalwa Plaza. 
                Zarmaganda Rayfield Road Roundabout Jos, Plateau State Nigeria.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+234 8075563000">+234 8075563000</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:brytosoft@gmail.com">brytosoft@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage"> @include('include.message')</div>
          <div id="errormessage"></div>
            <form action="/contact" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success">Send Message</button></div>

            </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
     
  <!-- Web Modal -->
    <div class="modal fade" id="web" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success modal-xl" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header text-center">
            <p class="heading lead">FRONT END</p>
   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>
   
          <!--Body-->
          <div class="modal-body">
            <div class="text-center">
              <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
              <h2>About the program</h2>
              <p class="text-justify">Front end also known as the client-side application, is the face of every 
                business “as far as the user is concerned, the interface is the product." 
                Front-end developers are the magicians who create
                 the interface you first see when you fire up a website.
                 Having a clean and attractive front page that appeals to customers is a 
                 crucial business strategy. As a front-end web developer, you will create 
                 interactive and functional websites that gives users the ultimate user experience.
                  BRYTO-SOFT Academy Frontend Development course will teach you how to create front
                   end web applications from scratch. You will learn the core functions and uses of HTML, 
                   CSS and JavaScript to create web pages that are visually appealing and stimulating. </p>
                   <div class="row">
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item list-group-item-action text-success text-bold">
                            Key Features
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">72 hours of Instructor led sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Hands-on training sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Learn fundamentals and advanced concepts of front-end programming</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Create visually stunning web pages with HTML, CSS, JavaScript,boostrap and jQuery</a>
                        <a href="#!" class="list-group-item list-group-item-action">Hands-on training sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Learn fundamentals and advanced concepts of front-end programming</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Create visually stunning web pages with HTML, CSS, JavaScript,boostrap and jQuery</a>
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item text-center text-success text-bold">
                            By taking this course you will learn the following:
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">Learn the fundamentals of front-end programming and gain the knowledge to build web applications.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Create advanced navigation and learn to incorporate metadata and multimedia with HTML5 and CSS3.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Develop your concepts in programming by learning to code in JavaScript.</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Use HTML outline, content models, accessibility attributes, forms and tables to develop rich web pages that rank high in search engines</a>
                        <a href="#!" class="list-group-item list-group-item-action">Use CSS grids to develop responsive page layouts that can adapt to any screen irrespective of device or technology</a>
                        <a href="#!" class="list-group-item list-group-item-action">Use JavaScript to create an advanced web interface that is highly responsive and to fix layout issues</a>
                      </div>
                     </div>
                   </div>
                   {{-- End of row --}}
              <div class="list-group">
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="mb-2 h5 text-center text-success">WHO CAN TAKE THIS COURSE?</h5>
                          
                          </div>
                          <p class="mb-2">Web developers, designers, bloggers, students and even entrepreneurs who wish to promote their websites, will greatly benefit from this Frontend Developer certification course.</p>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="text-center text-success">PRE-REQUREISITE</h5>
                          </div>
                          <p class="mb-2">Basic computer knowledge is sufficient to pursue this course.</p>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="text-center text-success text-bold">PRICE & DURATION</h5>
                            
                          </div>
                          <p class="mb-2">N60,000 & 3 Months</p>
                        </a>
                      </div>
            </div>
          </div>
   
          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <a type="button" href="/register" class="btn btn-success">Enrol now <i class="far fa-gem ml-1 text-white"></i></a>
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Web Modal-->

      <!-- Lamp stack Modal -->
      <div class="modal fade" id="lamp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success modal-xl" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <p class="heading lead">LAMP STACK
            </p>
   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>
   
          <!--Body-->
          <div class="modal-body">
            <div class="text-center">
              <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
              <h2 class="text-bold">About the program</h2>
              <p class="text-justify">A LAMP Stack is a set of open-source software that can be used to create websites and web applications. LAMP is an acronym, and these stacks typically consist of the Linux operating system, the Apache HTTP Server, the MySQL relational database management system, and the PHP programming language.

                Linux: The operating system (OS) makes up our first layer. Linux sets the foundation for the stack model. All other layers run on top of this layer. Linux is the lowest-level layer and provides the operating system. Linux actually runs each of the other components. You are not specifically limited to Linux, however; you can easily run each of the other components on Microsoft®; Windows®;, Mac OS X, or UNIX® if you need to.
                
                Apache: The second layer consists of web server software, typically Apache Web Server. This layer resides on top of the Linux layer. Web servers are responsible for translating from web browsers to their correct website. Apache provides the mechanics for getting a Web page to a user. Apache is a stable, mission-critical-capable server, and it runs more than 65 percent of all Web sites on the Internet. The PHP component actually sits inside Apache, and you use Apache and PHP together to create your dynamic pages.
                
                MySQL: Our third layer is where databases live. MySQL stores details that can be queried by scripting to construct a website. MySQL usually sits on top of the Linux layer alongside Apache/layer 2. In high-end configurations, MySQL can be offloaded to a separate host server. MySQL provides the data-storage side of the LAMP system. With MySQL, you have access to a very capable database suitable for running large and complex sites. Within your Web application, all your data, products, accounts, and other types of information will reside in this database in a format that you can easily query with the SQL language.
                
                PHP: Sitting on top of them all is our fourth and final layer. The scripting layer consists of PHP and/or other similar web programming languages. Websites and Web Applications run within this layer. PHP is a simple and efficient programming language that provides the glue for all the other parts of the LAMP system. You use PHP to write dynamic content capable of accessing the data in the MySQL database and some of the features that Linux provides</p>
                   <div class="row">
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item list-group-item-action text-success text-bold">
                            Key Features
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">72 hours of Instructor led sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Interactive hands-on learning</a>
                        <a href="#!" class="list-group-item list-group-item-action">Create enterprise style applications with advanced features</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Learn the latest versions of the Linux, Apache, MySQL and PHP (LAMP)</a>
                        <a href="#!" class="list-group-item list-group-item-action">Get lifetime assistance from our lamp Stack trainers</a>
                        <a href="#!" class="list-group-item list-group-item-action">Our experts will assist students in implementing the technology in future projects</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Provision of reference materials to all our candidates, that help them to gain a better understanding</a>
                        <a href="#!" class="list-group-item list-group-item-action">Post training mentorship</a>
                        <a href="#!" class="list-group-item list-group-item-action">WI-FI enable classroom</a>
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item text-center text-success text-bold">
                            PRE-REQUREISITE
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">Basic experience developing web applications</a>
                        <a href="#!" class="list-group-item list-group-item-action">Familiarity with HTML and CSS</a>
                        <a href="#!" class="list-group-item list-group-item-action">Familiarity with JavaScript</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">An IDE or Text Editor</a>
                        <a href="#!" class="list-group-item list-group-item-action">Command Line Interface</a>
                        <a href="#!" class="list-group-item list-group-item-action">Price 80,000 Duration 3 months</a>
                      </div>
                     </div>
                   </div>
                   {{-- End of row --}}
              <div class="list-group">
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="mb-2 h5 text-center text-success">WHO CAN TAKE THIS COURSE?</h5>
                          
                          </div>
                          <p class="mb-2">Web developers and entrepreneurs who want to build and test their own applications using MERN, will greatly benefit from this LAMP Stack course.</p>
                        </a>
                        
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          
                            <h5 class="text-center text-success text-bold">PRICE & DURATION</h5>
                          <p class="mb-2">N80,000 & 3 Months</p>
                        </a>
                      </div>
            </div>
          </div>
   
          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <a type="button" href="/register" class="btn btn-success">Enrol now <i class="far fa-gem ml-1 text-white"></i></a>
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Lamp Stack Modal-->

      <!-- Mern Stack Modal -->
      <div class="modal fade" id="mern" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success modal-xl" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <p class="heading lead">MERN STACK
            </p>
   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>
   
          <!--Body-->
          <div class="modal-body">
            <div class="text-center">
              <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
              <h2>About the program</h2>
              <p class="text-justify">MERN is the acronym name given to the set of technologies including Mongo DB, Express JS, React JS/ Redux and Node JS. 
                Among these technologies, Mongo DB is a database system, Node JS is a back-end runtime environment, Express JS is a back-end
                 web framework and React is a front-end framework. - QUORA We offer MERN Stack training course by the leading 
                industry expert trainers and ensures your mastery of full MERN Stack development. Upskill your career by acquiring this MERN Stack
                 certification program from our academy which proves that you are an expert at JavaScript technologies of the most popular MERN Stack. 
                 Join Blue algorithm technologies today, as we explore this advanced new technology of web 
                development in detailed with Mern Stack training and learn to develop great web apps that could transform the industry.</p>
                   <div class="row">
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item list-group-item-action text-success text-bold">
                            Key Features
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">72 hours of Instructor led sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Interactive hands-on learning</a>
                        <a href="#!" class="list-group-item list-group-item-action">Create enterprise style applications with advanced features</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Learn the latest versions of Node.js, Express js, Mongo DB, Angular 4.0</a>
                        <a href="#!" class="list-group-item list-group-item-action">Get lifetime assistance from our MEAN Stack trainers</a>
                        <a href="#!" class="list-group-item list-group-item-action">Our experts will assist students in implementing the technology in future projects</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Provision of reference materials to all our candidates, that help them to gain a better understanding</a>
                        <a href="#!" class="list-group-item list-group-item-action">Post training mentorship</a>
                        <a href="#!" class="list-group-item list-group-item-action">WI-FI enable classroom</a>
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item text-center text-success text-bold">
                            By taking this course you will learn the following:
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">You will learn to Code a MERN Stack Application.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Develop Single Page Applications.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Route the Single Page Application.</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Write Express Back-End Web Services.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Consume Express Web Services.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Develop React JS/ Redux Reusable Services, Filters and Directives.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Create and Query MongoDB Documents.</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Understand the basic components of MERN and their uses.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Learn about core Node.js building blocks, Express, React JS/ Redux and MongoDB.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Learn about advanced web technology.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Learn to authenticate and authorize users with Express.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Build applications with simple codes and that are easy to test.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Create enterprise style applications with superb functionality.</a>
                      </div>
                     </div>
                   </div>
                   {{-- End of row --}}
                   <div class="list-group">
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="mb-2 h5 text-center text-success">WHO CAN TAKE THIS COURSE?</h5>
                          
                          </div>
                          <p class="mb-2">Web developers and entrepreneurs who want to build and test their own applications using MERN, will greatly benefit from this Mean Stack course.</p>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="text-center text-success">PRE-REQUREISITE</h5>
                          </div>
                          <p class="mb-2">Basic experience developing web applications.</p>
                          <p class="mb-2">Familiarity with HTML and CSS.</p>
                          <p class="mb-2">Familiarity with JavaScript.</p>
                          <p class="mb-2">An IDE or Text Editor.</p>
                          <p class="mb-2">Command Line Interface.</p>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="text-center text-success text-bold">PRICE & DURATION</h5>
                            
                          </div>
                          <p class="mb-2">N80,000 & 3 Months</p>
                        </a>
                      </div>
            </div>
          </div>
   
          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <a type="button" href="/register" class="btn btn-success">Enrol now <i class="far fa-gem ml-1 text-white"></i></a>
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Mern Stack Modal-->

      <!-- Networking Modal -->
      <div class="modal fade" id="network" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success modal-xl" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <p class="heading lead">NETWORKING (CISCO), IT ESSENTIALS, ROUTHING AND SWITCHING
            </p>
   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>
   
          <!--Body-->
          <div class="modal-body">
            <div class="text-center">
              <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
              <h2>About the program</h2>
              <p>AT Blue Algorithm Technologies Learning Networking will help you develop and improve your skill set, stay on top of the latest trends in your industry, keep a pulse on the job market, meet prospective mentors, partners, and clients, and gain access 
                to the necessary resources that will foster your career development. </p>
                   <div class="row">
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item list-group-item-action text-success text-bold">
                            Key Features
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">72 hours of Instructor led sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Hands-on training sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Learn fundamentals and advanced concepts of Networking</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Learn how to use packet tracer program to enhance good networking skills</a>
                        <a href="#!" class="list-group-item list-group-item-action">Hands-on training sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Post training mentorship</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">WI-FI enable classroom</a>
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item text-center text-success text-bold">
                            Here are some of the key networking benefits:
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">Strength business connections. Networking is about sharing, not taking.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Get fresh ideas.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Advance your career.</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Get access to job opportunities</a>
                        <a href="#!" class="list-group-item list-group-item-action">Interconnected business contacts more knowledge</a>
                        <a href="#!" class="list-group-item list-group-item-action">Get career advice and support</a>
                        <a href="#!" class="list-group-item list-group-item-action">Gain a different perspective.</a>
                      </div>
                     </div>
                   </div>
                   {{-- End of row --}}
              <div class="list-group">
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="mb-2 h5 text-center text-success">PRICE & DURATION</h5>
                          
                          </div>
                          
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <p class="mb-2">N60,000 & 3 Months</p>
                          </div>
                          
                        </a>
                      </div>
            </div>
          </div>
   
          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <a type="button" href="/register" class="btn btn-success">Enrol now <i class="far fa-gem ml-1 text-white"></i></a>
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Networking Modal-->
      <!-- Cyber Security Modal -->
      <div class="modal fade" id="cyber" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success modal-xl" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <p class="heading lead">CYBER SECURITY AND FORENSIC. WIRESHARK, TRACING OF IP ADDRESS</p>
   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>
   
          <!--Body-->
          <div class="modal-body">
            <div class="text-center">
              <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
              <h2>About the program</h2>
              <p class="text-justify">AT Blue Algorithm Technologies, learning CYBER SECURITY Helps you to encompass everything that pertains to protecting our sensitive data, personally identifiable information (PII), protected health information (PHI), personal information, intellectual property, data, and governmental and industry 
                information systems from theft and damage attempted. </p>
                   <div class="row">
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item list-group-item-action text-success text-bold">
                            Key Features
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">72 hours of Instructor led sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Hands-on training sessions</a>
                        <a href="#!" class="list-group-item list-group-item-action">Learn fundamental and advance concept of Cyber Security</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Learn fundamental and advance concept of Forensic experts</a>
                        <a href="#!" class="list-group-item list-group-item-action">Learn how to access computers remotely</a>
                        <a href="#!" class="list-group-item list-group-item-action">Post training mentorship</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">WI-FI enable classroom</a>
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="list-group">
                        <h4>
                          <a href="#!" class="list-group-item text-center text-success text-bold">
                            By taking this course you will learn the following:
                          </a>
                        </h4>
                        
                        <a href="#!" class="list-group-item list-group-item-action">Learn the fundamentals of front-end programming and gain the knowledge to build web applications.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Create advanced navigation and learn to incorporate metadata and multimedia with HTML5 and CSS3.</a>
                        <a href="#!" class="list-group-item list-group-item-action">Develop your concepts in programming by learning to code in JavaScript.</a>
                        <a href="#!" class="list-group-item list-group-item-action disabled">Use HTML outline, content models, accessibility attributes, forms and tables to develop rich web pages that rank high in search engines</a>
                        <a href="#!" class="list-group-item list-group-item-action">Use CSS grids to develop responsive page layouts that can adapt to any screen irrespective of device or technology</a>
                        <a href="#!" class="list-group-item list-group-item-action">Use JavaScript to create an advanced web interface that is highly responsive and to fix layout issues</a>
                      </div>
                     </div>
                   </div>
                   {{-- End of row --}}
              <div class="list-group">
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="mb-2 h5 text-center text-success">WHO CAN TAKE THIS COURSE?</h5>
                          
                          </div>
                          <p class="mb-2">Web developers, designers, bloggers, students and even entrepreneurs who wish to promote their websites, will greatly benefit from this Frontend Developer certification course.</p>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="text-center text-success">PRE-REQUREISITE</h5>
                          </div>
                          <p class="mb-2">Basic computer knowledge is sufficient to pursue this course.</p>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="">
                            <h5 class="text-center text-success text-bold">PRICE & DURATION</h5>
                            
                          </div>
                          <p class="mb-2">N60,000 & 3 Months</p>
                        </a>
                      </div>
            </div>
          </div>
   
          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <a type="button" href="/register" class="btn btn-success">Enrol now <i class="far fa-gem ml-1 text-white"></i></a>
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Cyber Security Modal-->
@endsection
