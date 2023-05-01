<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kodo - Scholarships</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset ('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/dripicons.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}">
    </head>
    <body>
        <!-- header -->
       
        @include('home.frontend.header')

        <!-- header-end -->
        <!-- offcanvas-area -->
        @include('home.frontend.menu')
          <!-- offcanvas-end -->
        <!-- main-area -->
        <main>
           <!-- slider-area -->
           <section id="home" class="slider-area fix p-relative">
            <div class="slider-active" style="background: #141b22;">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url({{ asset('img/slider/slider-main.jpg') }}); background-size: cover;">
                    <div class="container" style="margin-bottom: 0px;">
                      <div class="row" style="margin-bottom: 0px;">
                        <div class="col-lg-7 col-md-7" style="margin-bottom: -100px;" >
                          <div class="slider" style="margin-top: 30%;color: #d2d4d7;">
                            <h1 style="font-size: 60px;font-weight: bold;color: #fff;" data-swiper-animation="fadeInUp" data-delay=".4s">{{ $homePageContent->section1_main_text1 }}</h1>
                            <h5 style="color: #fff;width: 60%;" data-swiper-animation="fadeInUp" data-delay=".4s" class="d-md-block d-none">{{ $homePageContent->section1_main_text2 }}</h5>
                            <!-- <h3><p style="color: #d2d4d7;" data-swiper-animation="fadeInUp" data-delay=".6s">KODO Scholarships is the #1 college scholarship app in the world and has helped students win more than $1 million dollars.</p></h3> -->
                            <div class="slider-btn mt-30" style="border-radius: 50%;margin-bottom: 50px;">
                              <a style="border-radius: 100px;height:50px;width: 230px;font-weight: bold;color: #fff;padding-bottom: 10px;padding-top: 15px;" href="{{ url('search-programs') }}" class="btn ss-btn" data-swiper-animation="fadeInLeft" data-delay=".4s">Find Scholarships Now <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-5 col-md-5 p-relative d-md-block d-none"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </section>
       
          <style>
            /* Desktop view */
@media (min-width: 992px) {
  .swiper-slide {
    height: 100vh;
  }
}

/* Medium desktop view */
@media (max-width: 991px) and (min-width: 768px) {
  .swiper-slide {
    height: 780px;
  }
}

/* Tablet view */
@media (max-width: 767px) and (min-width: 576px) {
  .swiper-slide {
    height: 680px;
  }
}

/* Mobile view */
@media (max-width: 575px) {
  .swiper-slide {
    height: 580px;
  }
}

            </style>
            <!-- slider-area-end -->
             <!-- service-area -->
            <section class="service-details-two p-relative" style="margin-top: 25px;margin-bottom: 25px;">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="services-box07">
                                
                             <div class="sr-contner">
                                <div class="icon">
                                <img src="{{ asset('img/icon/sve-icon4.png') }}" alt="icon01">
                                </div>
                                <div class="text">
                                    <h5><a href="{{ url('about') }}">{{ $homePageContent->section4_main_text1 }}</a></h5>
                                    <p>{{ $homePageContent->section4_subtext1 }}</p>
                                    <a href="{{ url('blog') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                             </div>
                                
                                
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="services-box07 active">
                                <div class="sr-contner">
                                <div class="icon">
                                <img src="{{ asset('img/icon/sve-icon5.png') }}" alt="icon01">
                                </div>
                                <div class="text">
                                    <h5><a href="{{ url('about') }}">{{ $homePageContent->section4_main_text2 }}</a></h5>
                                    <p>{{ $homePageContent->section4_subtext2 }}</p>
                                    <a href="{{ url('blog') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                             </div>
                               
                            </div>
                        </div>
                        
					 <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="services-box07">
                                <div class="sr-contner">
                                <div class="icon">
                                <img src="{{ asset('img/icon/sve-icon6.png') }}" alt="icon01">
                                </div>
                                <div class="text">
                                    <h5><a href="{{ url('about') }}">{{ $homePageContent->section4_main_text3 }}</a></h5>
                                    <p>{{ $homePageContent->section4_subtext3 }}</p>
                                    <a href="{{ url('blog') }}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                             </div>
                                
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- service-details2-area-end -->
            
             <!-- about-area -->
            <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background: #eff7ff;">
                <div class="animations-02"><img src="{{ asset('img/bg/an-img-02.png') }}" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="{{ asset('img/about_img_02-1.png') }}" alt="img">   
                               <div class="about-text second-about">
                                    <span>25 <sub>+</sub></span> 
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h5><i class="fal fa-graduation-cap"></i> About Our Scholarships</h5>
                                    <h2>A Few Words About Kodo</h2>                                   
                                </div>
                                   <p class="txt-clr">{{ $homePageContent->section1_subtext }}</p>
                                    <p>We’ve helped students win more than $10 million dollars in scholarships. We take the hassle out of the scholarship search process and increase your chances of matching you with scholarships in minutes.</p>
                                    <div class="about-content2">
                                    <div class="row">
                                    <div class="col-md-12">
                                     <ul class="green2">                                              
                                                <li><div class="abcontent"><div class="ano"><span>01</span></div> <div class="text"><h3>Doctoral Degrees</h3> <p>consectetur adipiscing elit sed do eiusmod tem incid idunt.</p></div></div></li>
                                                <li><div class="abcontent"><div class="ano"><span>02</span></div> <div class="text"><h3>Global Students</h3> <p>consectetur adipiscing elit sed do eiusmod tem incid idunt.</p></div></div></li>
                                                
                                           </ul>
                                    </div>
                                    </div>
                                </div>
                                 <div class="slider-btn mt-20">                                          
                                     <a href="{{ url('search-programs') }}" class="btn ss-btn smoth-scroll">{{ $homePageContent->section1_button1_label }}<i class="fal fa-long-arrow-right"></i></a>				
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
          
           <!-- courses-area -->
             <!-- steps-area -->
            <section class="steps-area p-relative"  style="background-color: #032e3f;padding-bottom: 100px;">
                <div class="animations-10"><img src="{{ asset('img/bg/an-img-10.png') }}" alt="an-img-01"></div>
                <div class="container">
          
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-title mb-35 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>Our Best Features</h2>
                                <p>We have developed deep expertise in Education Technology and Communication support.</p>
                            </div>
                            <ul class="pr-20">
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                            <div class="date-box"><img src="img/icon/fea-icon01.png" alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>Kodo AI</h3>
                                            <p>Our kodo scholarship AI will compare your profile to thousands of active scholarships to create a prioritized list of opportunities. You’ll be able to sort by level effort, due dates and award amount.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                             <div class="date-box"><img src="img/icon/fea-icon02.png" alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>Expert Support</h3>
                                            <p>Experience peace of mind with our extensive all-season support team , providing you with the resources and guidance you need.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                        <div class="dnumber">
                                           <div class="date-box"><img src="img/icon/fea-icon03.png" alt="icon"></div>
                                        </div>
                                        <div class="text">
                                            <h3>Application Process</h3>
                                            <p>Take control of your success with our extensive feature-rich dashboard, to provide you with a comprehensive view of your progress and personalized insights to help you reach your full potential.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="step-img wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/bg/man-woman-students-with-documents.jpg" alt="class image">
                            </div>
                           
                        </div>
                        
                       
						
                    </div>
                    
                </div>
            </section>
           
         
     
            <!-- frequently-area-end -->	
            <!-- video-area -->
            <section class="cta-area cta-bg pt-160 pb-160" style="background-image:url(img/video/video.jpg)">
                <div class="container">
                    <div class="row justify-content-center  align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="section-title cta-title video-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <h2> We're <span>Kodo</span> & We're Diffirent</h2>
                                <p>Kodo Search reduces the scholarship search process from months to minutes by matching students with opportunities made for them.</p>	
                            </div>
                                             
                        </div>
                        <div class="col-lg-2 col-md-2">
                        </div>
					   <div class="col-lg-4">

                                <div class="s-video-content">
                                    <a href="http://www.youtube.com/watch?v=2aKza6Zsk68&t=1429s" class="popup-video mb-50"><img src="img/bg/play-button.png" alt="circle_right"></a>
                                   
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <style>
                .cta-bg:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #125875;
  opacity: 0.7;
}

            </style>
            <!-- video-area-end -->	
          
            <!-- testimonial-area-end -->
          <!-- search-area -->
         
            <!-- admission-area -->
          
            <!-- admission-area-end -->
             <!-- brand-area -->
          
            <!-- brand-area-end -->        
              <!-- blog-area -->
            <section id="blog" class="blog-area p-relative fix pt-120 pb-90" style="background-image:url(img/bg/blog_bg.png); background-repeat: no-repeat; background-position: top;">
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h5><i class="fal fa-graduation-cap"></i> Our Blog</h5>
                                <h2>
                                 Latest Blog & News
                                </h2>
                               
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-lg-4 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="{{ url('blog') }}"><img src="img/AIG-Scholarships.jpg" alt="img"></a>
                                     <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> 24th March 2023
                                    </div>
                                </div>                    
                                <div class="blog-content2">    
                                   <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li><i class="fal fa-user"></i> By Admin </li>
                                                <li><i class="fal fa-comments"></i> 3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a href="{{ url('blog') }}">South African student gets familiar with biomedical-engineering.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="{{ url('blog') }}">Read More <i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6">
                            <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="{{ url('blog') }}"><img src="{{ asset('img/istockphoto-818087910-612x612.jpg') }}" alt="img"></a>
                                     <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> 24th March 2023
                                    </div>
                                </div>
                                <div class="blog-content2">                                    
                                   
                                   <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li><i class="fal fa-user"></i> By Admin </li>
                                                <li><i class="fal fa-comments"></i> 3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a href="{{ url('blog') }}">Kodo has reached 10k.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="{{ url('blog') }}">Read More <i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="{{ url('blog') }}"><img src="{{ asset('img/OCC_Default_Banner_OCC.jpg') }}" alt="img"></a>
                                     <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> 24th March 2023
                                    </div>
                                </div>
                                <div class="blog-content2">                                    
                                   
                                   <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li><i class="fal fa-user"></i> By Admin </li>
                                                <li><i class="fal fa-comments"></i> 3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a href="{{ url('blog') }}">Graduation ceremoney held at University of.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="{{ url('blog') }}">Read More <i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                
                        
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->
            
        
            <!-- newslater-aread-end -->
         
        </main>
        <!-- main-area-end -->

        <!-- footer -->
        @include('home.frontend.footer')
        <!-- footer-end -->

		<!-- JS here -->
        <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/ajax-form.js') }}"></script>
        <script src="{{ asset('js/paroller.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/js_isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.min.js') }}"></script>
        <script src="{{ asset('js/parallax.min.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('js/parallax-scroll.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/element-in-view.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>