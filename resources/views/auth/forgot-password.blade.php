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
        <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/animate.min.css") }}>
        <link rel="stylesheet" href={{ asset("css/magnific-popup.css") }}>
        <link rel="stylesheet" href={{ asset("fontawesome/css/all.min.css") }}>
        
        <link rel="stylesheet" href={{ asset("css/dripicons.css") }}>
        <link rel="stylesheet" href={{ asset("css/slick.css") }}>
        <link rel="stylesheet" href={{ asset("css/meanmenu.css") }}>
        <link rel="stylesheet" href={{ asset("css/default.css") }}>
        <link rel="stylesheet" href={{ asset("css/style.css") }}>
        <link rel="stylesheet" href={{ asset("css/responsive.css") }}>
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
            
         
             <!-- event-area -->
          
             <section class="contact-area pt-60 pb-120 p-relative fix">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card custom-card">
                                <div class="card-header d-flex align-items-center justify-content-center">
                                    <span class="card-title">Forgot Password</span>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div style="padding-bottom: 30px;" class="form-group">
                                            <!-- <label for="email">Email address</label> -->
                                            <input style="border: none;" type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus placeholder="Enter email">
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ url('login') }}">Back to Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
<style>
    .custom-card {
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}

.card-footer {
    background-color: #f8f9fa;
    border-top: 1px solid #dee2e6;
}

.card-title {
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #343a40;
}
</style>


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