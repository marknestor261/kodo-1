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
            
          
		     <!-- map-area-end -->
             <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix" style="background: #e7f0f8;">
                
                <div class="container">
             
					<div class="row justify-content-center">
						
                         
                        <div class="col-lg-5 order-2">
                            <div class="contact-bg">
                            <div class="section-title center-align text-center mb-50">
                                <h2> Testing Payment Form  </h2>
                               
                            </div>
                             
						<form action="{{ url('payfluter') }}" method="post" class="contact-form mt-30 text-center">
                            @csrf
							<div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-message mb-30">                                  
                                        <input type="email"  name="email" placeholder="enter email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-message mb-30">                                  
                                        <input type="text"  name="amount" placeholder="enter amount">
                                    </div>
                                </div>
                                <div class="slider-btn  text-center">                                          
                                    <button type="submit" class="btn ss-btn" >Pay Now</button>				
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