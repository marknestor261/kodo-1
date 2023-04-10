<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset("auth/css/bootstrap.min.css") }}>
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href={{ asset("auth/fontawesome-all.min.css") }}>
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href={{ asset("auth/font/flaticon.css") }}>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href={{ asset("auth/style.css") }}>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-header">
                            <a href={{ url('/') }} class="fxt-logo"><img src={{ asset('kodo-logo.png') }} alt="Logo"></a>
                            <div class="fxt-page-switcher">
                                <a href="#!" class="switcher-text1 active">Log In</a>
                                <a href={{ url('/') }} class="switcher-text1">Home</a>
                            </div>
                        </div>
                        <div class="fxt-form">
                            <h2>Log In</h2>
                            <p>Log in to continue to Kodo</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="email" class="form-control" name="email"
                                        :value="old('email')"
                                        placeholder="Email Address" required="required">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input type="password" class="form-control" name="password" autocomplete="current-password" placeholder="Password" required="required">
                                        <i class="flaticon-padlock"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                                        <div class="fxt-content-between">
                                            <button type="submit" class="fxt-btn-fill">Log in</button>
                                            <a href="#!" class="switcher-text2">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="fxt-footer">
                            <ul class="fxt-socials">
                                <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4">
                                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-5">
                                    <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="fxt-google fxt-transformY-50 fxt-transition-delay-6">
                                    <a href="#" title="google"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-7">
                                    <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
                                    <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6 col-12 fxt-none-767 fxt-bg-img" data-bg-image={{ asset("auth/img/bg1-l.jpg") }}></div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src={{ asset("auth/js/jquery-3.5.0.min.js") }}></script>
    <!-- Bootstrap js -->
    <script src={{ asset("auth/js/bootstrap.min.js") }}></script>
    <!-- Imagesloaded js -->
    <script src={{ asset("auth/js/imagesloaded.pkgd.min.js") }}></script>
    <!-- Validator js -->
    <script src={{ asset("auth/js/validator.min.js") }}></script>
    <!-- Custom Js -->
    <script src={{ asset("auth/js/main.js") }}></script>

</body>

</html>