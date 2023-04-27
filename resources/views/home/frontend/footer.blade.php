<footer class="footer-bg footer-p pt-90" style="background-color: #125875; background-image: url({{ asset('img/bg/footer-bg.png') }});">
          <div class="footer-top pb-70">
              <div class="container" >
                  <div class="row justify-content-between">
                      <div class="col-xl-4 col-lg-4 col-sm-6">
                          <div class="footer-widget mb-30">
                              <div class="f-widget-title">
                                  <img src="{{ asset('img/logo-urayana.png') }}" alt="img" style="margin-right: 10px;width: 130px;margin-top: 40px;">
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-5 col-lg-5 col-md-8 col-sm-12">
                          <div class="footer-link">
                              <div class="row">
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <ul class="link-list" style="font-weight: bold;">
                                          <li><a href="{{ url('about') }}">About Us</a></li>
                                          <li><a href="{{ url('faq') }}">FAQ</a></li>
                                          <li><a href="{{ url('search-programs') }}">Scholarships</a></li>
                                          <li><a href="#">Privacy Policy</a></li>
                                      </ul>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <ul class="link-list" style="font-weight: bold;">
                                          <li><a href="{{ url('testimonial') }}">Testimonials</a></li>
                                          <li><a href="#">Terms of Service</a></li>
                                          <li><a href="{{ url('blog') }}">Blog</a></li>
                                          <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-sm-6">
                          <div class="footer-widget mb-30">
                              <div class="footer-social mt-10">
                                  <a href="https://www.facebook.com/people/Kodo-Scholarships/100064161548720/"><i class="fab fa-facebook-f"></i></a>
                                  <a href="https://www.instagram.com/kodoscholarships/"><i class="fab fa-instagram"></i></a>
                                  <a href="https://twitter.com/kodoscholarship"><i class="fab fa-twitter"></i></a>
                              </div>
      
                              <div class="app-download mt-20">
                                  <a href="#">
                                      <img style="width: 140px;" src="{{ asset('img/playstore.png') }}" alt="Google Playstore">
                                  </a>
                                  <a href="#">
                                      <img style="width: 130px;" src="{{ asset('img/appstore.png') }}" alt="Appstore">
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="desktop-footer-bottom" style="background-color: #125875;">
              <div class="container">
                  <div class="row align-items-center">
                      <!-- <div class="col-lg-4">
                          <div class="copy-text">
                              <a href="index.html" style="display: flex; align-items: center; text-decoration: none;">
                                  <span style="font-weight: bold;font-size: 20px;color: white;">KODO Scholarships</span>
                              </a>
                          </div>
                      </div> -->
                      <div style="color: #d2d4d7; text-align: center;" class="col-lg-4 text-center mx-auto">
                          Copyright &copy; Kodo Scholarships 2023
                      </div>
                      
                   
                  </div>
              </div>
          </div>
      </footer>
      
      <style>
          @media only screen and (max-width: 767px) {
/* your mobile styles here */
.footer {
  display: flex;
  flex-direction: column;
}
}
@media (max-width: 576px) {
.link-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-left: 10px;
  padding-bottom: 20px;
}

.link-list li {
  flex: 0 0 48%;
  margin-bottom: 10px;
}
.footer-social{
 margin-left:0px;
 padding-bottom: 28px;
 padding-left: 13px;
}
.footer-widget{
  margin-left: -15px;
  margin-bottom: -10px;
}
.f-widget-title {
  margin-top: -30px;
  padding-bottom: 30px;
}
}

</style>