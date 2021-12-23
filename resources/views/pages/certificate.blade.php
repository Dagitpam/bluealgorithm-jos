@extends('layouts.other_app')
@section('content')
  <div class="container">
      <section>    
        <form action="/verify-certificate" method="POST">
          @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 success-border" type="text" name="search" placeholder="e.g BLG3874" aria-label="Search">
                        <div class="input-group-append">
                            <button class="input-group-text lime lighten-2" type="submit" onclick="transfer()">
                                <i class="fas fa-search text-grey"
                              aria-hidden="true"></i>
                            </button>
                        </div>
                      </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
      </section>
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
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="template/img/portfolio/app1.jpg" class="img-fluid" alt="">
                  <a href="template/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                  <h4><a href="#">ANIMATION</a></h4> 
                  <p class="text-info">₦ 40,000  for 2 Months</p>
                  
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="template/img/portfolio/web3.jpg" class="img-fluid" alt="">
                  <a href="template/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                <h4><a href="#">ROBOTICS</a></h4> 
                  <p class="text-info">₦ 100,000  for 2 Months</p>
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
                <h4><a href="#">LAMP STACK</a></h4> 
                  <p class="text-info">₦ 80,000  for 2 Months</p>
                </div>
              </div>
            </div>
  
          
            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="template/img/portfolio/card2.jpg" class="img-fluid" alt="">
                  <a href="template/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                   <h4><a href="#">LARAVEL FRAMEWORK</a></h4> 
                  <p class="text-info">₦ 80,000  for 2 Months</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="template/img/portfolio/web2.jpg" class="img-fluid" alt="">
                  <a href="template/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                <h4><a href="#">MERN STACK</a></h4> 
                  <p class="text-info">₦ 80,000  for 2 Months</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="template/img/portfolio/app3.jpg" class="img-fluid" alt="">
                  <a href="template/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                <h4><a href="#">CYBER SECURITY</a></h4> 
                  <p class="text-info">₦ 200,000  for 2 Months</p>
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
                <h4><a href="#">MOBILE DEVELOPMENT</a></h4> 
                  <p class="text-info">₦ 100,000  for 2 Months</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="template/img/portfolio/card3.jpg" class="img-fluid" alt="">
                  <a href="template/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>
  
                <div class="portfolio-info">
                <h4><a href="#">BASIC PROGRAMMING</a></h4> 
                  <p class="text-info">₦ 40,000  for 1 Months</p>
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
                  <p class="text-info">₦ 100,000  for 2 Months</p>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #portfolio -->
  
  </div>
  {{-- <script>
    function transfer(){
      var a;
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
          $.ajax({
              url:"/verify-certificate",
              method: "POST",
              cache: false,
              data: {id: a},
              success:function(result){
                 //  alert(result.msg);
                 document.getElementById('id').value = result.certificates;
                  
              },
              error:function(){
                  alert('fuck');
              }
          });
  };
  </script>  --}}
@endsection