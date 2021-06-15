<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SINGO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <!--
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets_fe/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('assets_fe/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets_fe/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets_fe/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets_fe/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets_fe/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets_fe/css/style.css')}}" rel="stylesheet">

</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
                <a href="/" class="scrollto">
                <h1>SINGO</h1>
                </a>
            </div>

            <a class="btn-kembali float-right" href="/">Kembali</a>
        </div>
    </header>

    <section id="intro-login" class="clearfix">
    </section>

    <main>
        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-3">
                  <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" method="POST" action="/login">
                      <div class="form-label-group">
                        <label>Email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                      </div>

                      <div class="form-label-group">
                        <label>Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      </div>

                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                      <hr class="my-3">
                    <a class="btn btn-md btn-info btn-block text-uppercase" href="/register">
                        Register
                    </a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </main>

    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>SINGO</strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets_fe/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets_fe/lib/lightbox/js/lightbox.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('assets_fe/contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('assets_fe/js/main.js')}}"></script>
</body>
</html>
