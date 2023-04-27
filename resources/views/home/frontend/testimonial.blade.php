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
          <section class="testimonial-section">
            <div class="container">
              <h3 class="section-title">Testimonials</h3>
              <div class="testimonial-carousel">
                <div class="testimonial-item">
                  <div class="testimonial-image">
                    <img src="img/testimonial/samantha.jpg" alt="testimonial-1">
                    <div class="testimonial-icon">
                      <i class="fas fa-quote-left"></i>
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <p>Thank you for giving people opportunity to know more about scholarships and opening opportunities for people to access higher education especially in developing countries.</p>
                    <div class="testimonial-meta">
                      <span class="testimonial-name">Samantha Abena - </span>
                      <span class="testimonial-title">Ghana</span>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <div class="testimonial-image">
                    <img src="img/testimonial/ayesha.jpg" alt="testimonial-1">
                    <div class="testimonial-icon">
                      <i class="fas fa-quote-left"></i>
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <p>Scholars in Pakistan like in other developing countries are barred from seeking higher education due to certain prejudices. Lack of resources and social environment keep us away from the opportunities provided by the developed countries of the world. Thanks to this website which have made me think that the social and economic barriers can be surpassed with the help of the internet facilities..</p>
                    <div class="testimonial-meta">
                      <span class="testimonial-name">Ayesha Patricia - </span>
                      <span class="testimonial-title">Pakistan</span>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <div class="testimonial-image">
                    <img src="img/testimonial/thomas.jpg" alt="testimonial-1">
                    <div class="testimonial-icon">
                      <i class="fas fa-quote-left"></i>
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <p>Thanks for your scholarships updates. May the Lord bless you for such a wonderful job that you have took upon yourself to educate the whole world especially Africa.</p>
                    <div class="testimonial-meta">
                      <span class="testimonial-name">Thomas Adebiyi - </span>
                      <span class="testimonial-title">Nigeria</span>
                    </div>
                  </div>
                </div>
                 <div class="testimonial-item">
                  <div class="testimonial-image">
                    <img src="img/testimonial/robin.jpg" alt="testimonial-1">
                    <div class="testimonial-icon">
                      <i class="fas fa-quote-left"></i>
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <p>Just a big thank you to the guys running this site. i secured a scholarship to Glasgow, all thanks to this site. Was recommended for by a friend just last month. Keep up the good job guys. God Bless!</p>
                    <div class="testimonial-meta">
                      <span class="testimonial-name">Robin Kristofer - </span>
                      <span class="testimonial-title">Estonia</span>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <div class="testimonial-image">
                    <img src="img/testimonial/marvin.jpg" alt="testimonial-2">
                    <div class="testimonial-icon">
                      <i class="fas fa-quote-left"></i>
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <p>It gives me pleasure to find such opportunities online for the whole world to benefit. Thank you for reaching out to the world and for your kindness.</p>
                    <div class="testimonial-meta">
                      <span class="testimonial-name">Marvin Anyango - </span>
                      <span class="testimonial-title">Kenya</span>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item">
                  <div class="testimonial-image">
                    <img src="img/testimonial/maria.jpg" alt="testimonial-3">
                    <div class="testimonial-icon">
                      <i class="fas fa-quote-left"></i>
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <p>I cannot say thank you enough for your site. Fantastic and wonderful! It is the bridge for the students of financial in need to have the opportunity to go ahead. I call more and more people and organizations to sponsor such sites..</p>
                    <div class="testimonial-meta">
                      <span class="testimonial-name">Maria  Amihan - </span>
                      <span class="testimonial-title">Phillipines</span>
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
          </section>

          <style>
            .testimonial-section {
  padding: 60px 0;
  background: #f8f8f8;
}

.section-title {
  text-align: center;
  margin-bottom: 60px;
}

.testimonial-carousel {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.testimonial-item {
  flex-basis: calc(33.33% - 30px);
  margin-bottom: 60px;
}

.testimonial-image {
  position: relative;
  margin-bottom: 20px;
}

.testimonial-image img {
  width: 100%;
  height: auto;
}

.testimonial-icon {
  position: absolute;
  top: -20px;
  left: 0;
  right: 0;
  margin: 0 auto
  ;

font-size: 30px;
color: #f4b400;
}

.testimonial-content {
background: #ffffff;
width: 390px;
border-radius: 8px;
box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
padding: 30px;
position: relative;
}

.testimonial-content:before {
content: "";
position: absolute;
top: -15px;
left: 50%;
transform: translateX(-50%);
border-style: solid;
border-width: 0 15px 15px 15px;
border-color: transparent transparent #ffffff transparent;
}

.testimonial-content:after {
content: "";
position: absolute;
bottom: -15px;
right: 50%;
transform: translateX(50%);
border-style: solid;
border-width: 15px 15px 0 0;
border-color: #ffffff transparent transparent transparent;
}

.testimonial-text {
margin-bottom: 20px;
font-size: 18px;
line-height: 1.5;
}

.testimonial-author {
display: flex;
align-items: center;
}

.testimonial-author-image {
width: 50px;
height: 50px;
border-radius: 50%;
margin-right: 20px;
}

.testimonial-author-image img {
width: 100%;
height: 100%;
object-fit: cover;
border-radius: 50%;
}

.testimonial-author-name {
font-size: 20px;
font-weight: 600;
margin-bottom: 5px;
}

.testimonial-author-company {
font-size: 16px;
color: #888888;
}
.testimonial-section {
  padding: 60px 0;
  background: #f8f8f8;
}

.section-title {
  text-align: center;
  margin-bottom: 60px;
}

.testimonial-carousel {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.testimonial-item {
  flex-basis: calc(33.33% - 30px);
  margin-bottom: 60px;
}

.testimonial-image {
  position: relative;
  width: 100px;
  height: 100px;
  margin-bottom: 20px;
  border-radius: 50%;
  border: 3px solid #ffd700;
  overflow: hidden;
}

.testimonial-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.testimonial-icon {
  position: absolute;
  top: -20px;
  left: 0;
  right: 0;
  margin: 0 auto;
}

          </style>
          
        
        

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