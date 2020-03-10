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

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="/" class="scrollto">
          <h1>SINGO</h1>
        </a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#portfolio">Berita</a></li>
          <!--
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          -->
          <li><a href="#contact">Kontak</a></li>
          <li class="drop-down"><a href="#">Account</a>
            <ul>
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <main>
    <section id="intro-register" class="clearfix">
      <div class="container">
        <h1>NGO</br><span>News</span></h1>
      </div>
    </section>

    <section id="news">
      <div class="container">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="side-column">
              <h4>Berita Terbaru</h4>
              @php $no = 1;
              @endphp
              @foreach ($news as $news)
              @php
                if($no == 6)
                  break;
                $no++;
              @endphp
              <div class="single-post">
                <div class="news-thumbnail">
                  <a href="/news/{{$news -> id}}">
                    <img src="{{ asset('Artikel_file/foto/'.$news->foto.'')}}" alt=>
                  </a>
                </div>
                <div class="news-headline">
                  <p>
                    <a href="/news/{{$news -> id}}">{{$news -> judul}}</a>
                  </p>
                </div>
              </div>
              @endforeach

            </div>
          </div>

          <!-- Content -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row main-column">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="content-news">
                  @foreach ($data as $data)
                  @php
                    $date = $data -> updated_at;
                  @endphp
                  <div class="content-header">
                    <h3>{{$data -> judul}}</h3>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>
                      {{ substr($date, 0, 10) }} / {{ substr($date,11) }}
                    </span>
                  </div>

                  <div class="content-img">
                    <img src="{{ asset('Artikel_file/foto/'.$data -> foto.'')}}" alt=>
                  </div>

                  <div class="news-text">
                    {{$data -> artikel}}
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
