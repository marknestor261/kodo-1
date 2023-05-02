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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        
        <link rel="stylesheet" href="css/dripicons.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
         <!-- header -->
         @include('home.frontend.header')
        <!-- header-end -->
        <!-- offcanvas-area -->
        @include('home.frontend.menu')
          <div class="offcanvas-overly"></div>
          <!-- offcanvas-end -->
        <!-- main-area -->
        <main>
            
           <!-- breadcrumb-area -->
        
            <!-- breadcrumb-area-end -->
            
           <!-- services-area -->          
            <section id="services" class="services-area pt-120 pb-90 fix">
                <div class="container">
                   <div class="row">
                         <div class="col-lg-12">
                            <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h5><i class="fal fa-graduation-cap"></i> Contact Info</h5>
                                <h2>
                                 Get In Touch
                                </h2>
                             
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-4 col-md-4">
                             
                          <div class="services-box text-center">
                              <div class="services-icon">
                                   <img src="img/bg/contact-icon01.png" alt="image">
                                </div>
                               <div class="services-content2">
                                    <h5><a href="tel:+46728488313">+46 72 848 83 13</a></h5>   
                                    <p>Phone Support</p>
                                </div>
                            </div>   
                             
                         
                        </div>
                        <div class="col-lg-4 col-md-4">
                             
                          <div class="services-box text-center active">
                              <div class="services-icon">
                                  <img src="img/bg/contact-icon02.png" alt="image">
                                </div>
                               <div class="services-content2">
                                    <h5><a href="mailto:infor@kodoscholarships.com">info@kodoscholarships.com</a></h5>   
                                     <p>Email Address</p>
                                     
                                </div>
                            </div>   
                             
                         
                        </div>
                        <div class="col-lg-4 col-md-4">
                             
                          <div class="services-box text-center">
                              <div class="services-icon">
                                 <img src="img/bg/contact-icon03.png" alt="image">
                                </div>
                               <div class="services-content2">
                                    <h5>Oppegårdsstråket 5 A, lgh 1804,
                                         191 60 Sollentuna</h5>   
                                    <p>Office Address</p>
                                </div>
                            </div>   
                             
                         
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
            <!-- map-area-end -->
            <div class="map fix" style="background: #f5f5f5;">
                <div class="container-flud">
                    
                    <div class="row">
                        <div style="width: 100%"><iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=450&amp;hl=en&amp;q=Oppeg%C3%A5rdsstr%C3%A5ket%205%20A,%20lgh%201804,%20191%2060%20Sollentuna+(Kodo)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
                    </div>
                </div>
            </div>
		     <!-- map-area-end -->
             <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix" style="background: #e7f0f8;">
                
                <div class="container">
             
					<div class="row">
						
                         
                        <div class="col-lg-12 order-2">
                            <div class="contact-bg">
                            <div class="section-title center-align text-center mb-50">
                                <h2>
                                   Inquiry Form
                                </h2>
                               
                            </div>
                             
						<form action="mail.php" method="post" class="contact-form mt-30 text-center">
							<div class="row">
                            <div class="col-lg-4">
                                <div class="contact-field p-relative c-name mb-30">                                    
                                    <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                    <i class="icon fal fa-user"></i>
                                </div>                               
                            </div>
							<div class="col-lg-4">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="email" name="email" placeholder="Email" required>
                                    <i class="icon fal fa-envelope"></i>
                                </div>
                            </div>		
                            <div class="col-lg-4">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                     <i class="icon fal fa-phone"></i>
                                </div>
                            </div>	                            
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">                                  
                                    <textarea name="message" id="message" cols="30" rows="50" placeholder="Write comments"></textarea>
                                     <i class="icon fal fa-edit"></i>
                                </div>
                                <div class="slider-btn  text-center">                                          
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Make An Request <i class="fal fa-long-arrow-right"></i></button>				
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
                            
                            </div>
                        
						</div>
					</div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->
       <!-- brand-area -->
          
            <!-- brand-area-end -->        
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