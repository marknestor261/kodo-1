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
        <section id="contact" class="contact-area after-none contact-bg pt-60 pb-120 p-relative fix">
        <div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card custom-card">
        <div class="card-header d-flex align-items-center justify-content-center">
          <img src="{{ asset('logo.png') }}" alt="Logo" class="logo">
          <span class="card-title" style="font-size: 18px;margin-bottom: -4px;">Scholarships</span>
        </div>
        <div class="card-body">
          <p class="card-text text-center"> We’ve helped students win more than $10 million dollars in scholarships. </p>
          <a href="{{ url('login') }}" class="btn ss-btn w-100">Login</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card custom-card">
        <div class="card-header d-flex align-items-center justify-content-center">
          <img src="{{ asset('logo.png') }}" style="width: 95px;" alt="Logo" class="logo">
          <span class="card-title" style="font-size: 18px;margin-bottom: -4px;">Jobs</span>
        </div>
        <div class="card-body">
          <p class="card-text text-center">We’ve helped students win more than $10 million dollars in scholarships.</p>
          <a href="{{ url('login') }}" class="btn ss-btn w-100">Login</a>
        </div>
      </div>
    </div>
   
  </div>
</div>
</div>
<style>
.custom-card {
  margin-bottom: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.card-header {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #fff;
  height: 50px; /* add height to align the logo and text properly */
}

.logo {
  width: 80px; /* reduce the width to avoid the weird look */
  height: auto;
  margin-right: 5px; /* reduce the margin to align the logo and text properly */
}

.card-title {
  font-size: 15px;
}


</style>
                      
            <!-- brand-area-end -->        
        </main>

        
        <!-- main-area-end -->
        <!-- footer -->
        @include('home.frontend.footer')
        <!-- footer-end -->
		<!-- JS here -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
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