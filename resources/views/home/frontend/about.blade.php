<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kodo - Scholarships</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
            
         
            <!-- breadcrumb-area-end -->
              <!-- about-area -->
            <section class="about-area about-p pt-120 pb-120 p-relative fix">
                <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/about_img_05-1.png" alt="img">   
                               <div class="about-text second-about three-about">
                                    <span>25 <sub>+</sub></span> 
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h5><i class="fal fa-graduation-cap"></i> About Kodo Scholarships</h5>
                                    <h2>{{ $aboutPageContent->section1_main_text1 }}</h2>                                   
                                </div>
                                   <p class="txt-clr">{{ $aboutPageContent->section1_subtext }}</p>
                                    <p>{{ $aboutPageContent->section1_subtext2 }}</p>
                                    <div class="about-content2">
                                    <div class="row">
                                    <div class="col-md-12">
                                     <ul class="green2">                                              
                                                <li><div class="abcontent"><div class="ano"><span>01</span></div> <div class="text"><h3>{{ $aboutPageContent->section2_main_text3 }}</h3> <p>{{ $aboutPageContent->section2_subtext1 }}</p></div></div></li>
                                                <li><div class="abcontent"><div class="ano"><span>02</span></div> <div class="text"><h3>{{ $aboutPageContent->section2_main_text4 }}</h3> <p>{{ $aboutPageContent->section2_subtext2 }}</p></div></div></li>
                                                
                                           </ul>
                                    </div>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <!-- cta-area -->
            <section class="cta-area cta-bg pt-50 pb-50 mb-100" style="background-image:url(img/Screenshot\ 2023-04-17\ at\ 07.27.50.png)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <h2>{{ $aboutPageContent->section3_main_text1 }}</h2>
								<p>{{ $aboutPageContent->section3_subtext1 }}</p>
                            </div>
                                             
                        </div>
                        <div class="col-lg-4 text-right"> 
                            <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
									  <a href="about.html" class="btn ss-btn smoth-scroll">{{ $aboutPageContent->section3_button1_label }} <i class="fal fa-long-arrow-right"></i></a>			
								</div>
                        </div>
					
                    </div>
                </div>
            </section>
            <!-- cta-area-end -->	
           <!-- frequently-area -->
           <section class="steps-area2 p-relative fix"  style="background-color: #125875;">
            <div class="animations-02"><img src="img/bg/an-img-10.png" alt="an-img-01"></div>
            <div class="container">
      
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="step-box step-box2 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="dnumber">
                                <div class="date-box"><img src="img/icon/fea-icon01.png" alt="icon"></div>
                            </div>
                            <div class="text">
                                <h2>Campus Tour</h2>
                                <p>{{ $aboutPageContent->section5_main_text1 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="step-img2 wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                            <img src="img/slider/lecturer-professor-with-students-2022-04-14-08-02-34-utc.jpg" alt="class image">
                        </div>
                       
                    </div>
                    
                   
                    
                </div>
                
            </div>
        </section>
        
            <!-- steps-area-end -->
             <!-- steps-area -->
            <section class="steps-area2 p-relative fix"  style="background-color: #032e3f;">              
                <div class="container">
                    <div class="animations-08"><img src="img/bg/an-img-20.png" alt="contact-bg-an-01"></div>
                    <div class="row align-items-center">                       
                        <div class="col-lg-6 col-md-12">
                            <div class="step-img3 wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                                <img src="img/slider/felipe-gregate-Ph2KD5qr7VQ.jpg" alt="class image">
                            </div>
                           
                        </div>
                         <div class="col-lg-6 col-md-12">
                            <div class="step-box step-box3 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="img/icon/fea-icon03.png" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h2>Powerful Alumni</h2>
                                    <p>{{ $aboutPageContent->section5_main_text2 }}</p>
                                </div>
                            </div>
                        </div>
                       
						
                    </div>
                    
                </div>
            </section>
            <!-- steps-area-end -->
            <!-- testimonial-area -->
           
               
         
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