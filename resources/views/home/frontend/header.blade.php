<header class="header-area header-three">  
            <div id="header-sticky" class="menu-area">
              <div class="container">
                <div class="second-menu" style="display: flex; justify-content: space-between; align-items: center;">
                  <div class="row align-items-center" style="margin-left: 10px;">
                    <div class="col-xl-3 col-lg-3">
                      <div class="logo" >
                        <a href="index.html" class="logo-container">
                          <img style="width: 120px;height: auto;" src="{{ asset('img/logo/logo-kodo.png') }}" alt="logo" class="logo-icon">
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                      <div class="main-menu text-center">
                        <nav id="mobile-menu">
                            <ul class="mobile-menu-list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About Us</a></li>
                                <li>
                                <a href="{{ url('faq') }}">Scholarships</a>
                                </li>

                                <li><a href="{{ url('testimonial') }}">Testimonials</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                                <li><a href="{{ url('blog') }}">Blog</a></li>
                                <li><a href="{{ url('payform') }}">PayForm</a></li>
                                <!-- Add the new list item here -->
                                <div id="mobile-menu-buttons">
                                    <li><a href="{{ route('login') }}" class="mobile-btn" style="background-color: #ffffff; color: #000; border: 2px solid #000; height: auto;  width: 85px; text-align: center;padding: 5px 5px 5px 5px; margin-bottom: 1px; margin-left: 8px; margin-top:20px; border-radius: 80px;">Login</a></li>
                                    <li><a href={{ route('frontend.landing') }} class="mobile-btn" style="background-color: #ec1d64; height: auto; color: #ffffff; width: 250px; padding: 10px 20px; margin-bottom: 10px;margin-top: 30px; margin-left: 8px; border-radius: 80px;text-align: center;">Find scholarships</a></li>
                                  </div>
                                  
                              </ul>
                              
                        </nav>
                      </div>
                    </div>   
                    
                
                    <div class="col-xl-3 col-lg-3 text-right" style="margin-right: 0;">
                      <div class="login">
                        <ul>
                          <li>
                            <div class="second-header-btn">
                              <a href="{{ route('login') }}" class="btn" style=" border: 1px solid #fff; background-color: #fff; color: #000;z-index: 999;">Login</a>
                            </div>
                          </li>
                          <li>
                            <div class="second-header-btn" style="width: 130px;">
                              <a href={{ route('frontend.landing') }} class="btn">Find scholarships</a>
                            </div>
                          </li>
                        </ul>
                      </div>                               
                    </div>
                    <div class="col-12" style="position: absolute; right: 0; top: 30px;bottom: 0;">
                      <div class="mobile-menu">
                     

                      </div>
                     <!-- Mobile menu buttons -->
                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <style>
            .logo {
    display: flex;
    align-items: center;
    margin-left: -70px; /* Set negative margin */
}
.header-area .second-menu .col-xl-6 {
  display: flex;
  justify-content: center;
}
.header-area .main-menu {
  text-align: center;
  margin-left: -80px;
}
@media (max-width: 991px) {
  .logo {
    margin-left: -8px;
  }
  .login,
  .second-header-btn {
    display: none;
  }
  .mobile-menu {
    display: block;
    text-transform: lowercase;
    top: 50px;
    width: 100%;
    right: 0;
  }
}

@media (min-width: 768px) {
  /* Hide mobile menu buttons on desktop */
  #mobile-menu-buttons {
    display: none;
  }

}

@media (max-width: 767px) {
    .has-sub.sub-menu {
    display: none;
  }
  /* Show mobile menu buttons on mobile */
  #mobile-menu-buttons {
    display: block;
    margin-top: 30px;
    margin-bottom: 10px;
  }
}
@media (max-width: 991px) {
  .mobile-menu-list {
    height: 380px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .mobile-menu-list li {
    text-transform: lowercase;
    padding-top: 0;
    margin-bottom: 1px;
    padding-bottom: 0;
  }

}




          </style>