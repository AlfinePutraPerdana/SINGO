<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SINGO</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('assets_fe/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets_fe/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('assets_fe/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('assets_fe/lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{ asset('assets_fe/lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{ asset('assets_fe/lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{ asset('assets_fe/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets_fe/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets_fe/lib/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{ asset('assets_fe/css/nivo-slider-theme.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('assets_fe/css/style.css')}}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{ asset('assets_fe/css/responsive.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="/">
                  <h1>SINGO</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home"><i class="fa fa-home" style="font-size: 25px;"></i></a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Profil</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#blog">Berita</a>
                  </li>
                  <!--
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Down<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href=# >Drop Down 1</a></li>
                      <li><a href=# >Drop Down 2</a></li>
                    </ul>
                  </li
                  -->
                  <li>
                    <a class="page-scroll" href="#contact">Kontak</a>
                  </li>
                  <li>
                      <a href="/login">Login</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="{{ asset('assets_fe/img/slider/slider1.jpg')}}" alt="" title="#slider-direction-1" />
        <img src="{{ asset('assets_fe/img/slider/slider2.jpg')}}" alt="" title="#slider-direction-2" />
        <img src="{{ asset('assets_fe/img/slider/slider3.jpg')}}" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sistem Informasi NGO</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Sistem Informasi Pendukung Rencana Pembangunan Daerah</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sistem Informasi NGO</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Sistem Informasi Pendukung Rencana Pembangunan Daerah</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Sistem Informasi NGO</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Sistem Informasi Pendukung Rencana Pembangunan Daerah</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Profil KEMENDAGRI</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="{{ asset('assets_fe/img/about/1.jpg')}}" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Kementerian Dalam Negeri</h4>
              </a>
              <p>
                Kementerian Dalam Negeri bertugas menyelenggarakan urusan pemerintahan dalam negeri untuk membantu presiden dalam menyelenggarakan pemerintahan negara.
              </p>
              <ul>
                <h5>Visi</h5>
                <li>
                  <i class="fa fa-check"></i> Poros jalannya pemerintahan dan politik dalam negeri.
                </li>
                <li>
                  <i class="fa fa-check"></i> Meningkatkan pelayanan publik
                </li>
                <li>
                  <i class="fa fa-check"></i> Menegakkan demokrasi
                </li>
                <li>
                  <i class="fa fa-check"></i> Menjaga integrasi bangsa
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
  
  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Tentang SINGO</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a class="floatright" href="#">
                <h4 class="sec-head">Sistem Informasi NGO</h4>
              </a>
              <p class="floatright" style="text-align: right;">
                Sistem informasi ini mendukung informasi, NGO berkolaborasi dengan pemda dalam Rencana Pembangunan Daerah (Kolaborasi dapat berupa informasi program NGO yang mendukung program pembangunan daerah)
              </p>
              <ul class="floatright" style="text-align: right;">
                <li>
                  Rencana Kerja Tahunan  <i class="fa fa-check"></i>
                </li>
                <li>
                  Laporan Tahunan dan Keuangan  <i class="fa fa-check"></i>
                </li>
                <li>
                  Rekomendasi Tenaga Asing  <i class="fa fa-check"></i>
                </li>
                <li>
                  Pemberitahuan Tamu Asing  <i class="fa fa-check"></i>
                </li>
                <li>
                  Pemberdayaan Mitra Lokal  <i class="fa fa-check"></i>
                </li>
                <li>
                  Pengajuan Monitoring dan Evaluasi  <i class="fa fa-check"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="{{ asset('assets_fe/img/about/1.jpg')}}" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Berita Terbaru</h2>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab">Berita</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab">Kisah Sukses</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="row">
                  <!-- Start Left Blog -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-blog">
                      <div class="single-blog-img">
                        <a href="/blog">
                            <img src="{{ asset('assets_fe/img/blog/1.jpg')}}" alt="">
                          </a>
                      </div>
                      <div class="blog-meta">
                        <span class="comments-type">
                            <i class="fa fa-comment-o"></i>
                            <a href="#">13 comments</a>
                          </span>
                        <span class="date-type">
                            <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                          </span>
                      </div>
                      <div class="blog-text">
                        <h4>
                          <a href="/blog">Assumenda repud eum veniam</a>
                          </h4>
                        <p>
                          Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                        </p>
                      </div>
                      <span>
                          <a href="/blog" class="ready-btn">Read more</a>
                        </span>
                    </div>
                    <!-- Start single blog -->
                  </div>
                  <!-- End Left Blog-->
                  <!-- Start Left Blog -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-blog">
                      <div class="single-blog-img">
                        <a href="/blog">
                            <img src="{{ asset('assets_fe/img/blog/2.jpg')}}" alt="">
                          </a>
                      </div>
                      <div class="blog-meta">
                        <span class="comments-type">
                            <i class="fa fa-comment-o"></i>
                            <a href="#">130 comments</a>
                          </span>
                        <span class="date-type">
                            <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                          </span>
                      </div>
                      <div class="blog-text">
                        <h4>
                          <a href="/blog">Explicabo magnam quibusdam.</a>
                          </h4>
                        <p>
                          Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                        </p>
                      </div>
                      <span>
                          <a href="/blog" class="ready-btn">Read more</a>
                        </span>
                    </div>
                    <!-- Start single blog -->
                  </div>
                  <!-- End Left Blog-->
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-awesome-project">
                      <div class="awesome-img">
                        <a href="#"><img src="{{ asset('assets_fe/img/portfolio/1.jpg')}}" alt="" /></a>
                        <div class="add-actions text-center">
                          <div class="project-dec">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('assets_fe/img/portfolio/1.jpg')}}">
                              <h4>Business City</h4>
                              <span>Web Development</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 photo">
                    <div class="single-awesome-project">
                      <div class="awesome-img">
                        <a href="#"><img src="{{ asset('assets_fe/img/portfolio/2.jpg')}}" alt="" /></a>
                        <div class="add-actions text-center">
                          <div class="project-dec">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('assets_fe/img/portfolio/2.jpg')}}">
                              <h4>Blue Sea</h4>
                              <span>Photosho</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 design">
                    <div class="single-awesome-project">
                      <div class="awesome-img">
                        <a href="#"><img src="{{ asset('assets_fe/img/portfolio/3.jpg')}}" alt="" /></a>
                        <div class="add-actions text-center">
                          <div class="project-dec">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('assets_fe/img/portfolio/3.jpg')}}">
                              <h4>Beautiful Nature</h4>
                              <span>Web Design</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 photo development">
                    <div class="single-awesome-project">
                      <div class="awesome-img">
                        <a href="#"><img src="{{ asset('assets_fe/img/portfolio/4.jpg')}}" alt="" /></a>
                        <div class="add-actions text-center">
                          <div class="project-dec">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('assets_fe/img/portfolio/4.jpg')}}">
                              <h4>Creative Team</h4>
                              <span>Web design</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 development">
                    <div class="single-awesome-project">
                      <div class="awesome-img">
                        <a href="#"><img src="{{ asset('assets_fe/img/portfolio/5.jpg')}}" alt="" /></a>
                        <div class="add-actions text-center text-center">
                          <div class="project-dec">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('assets_fe/img/portfolio/5.jpg')}}">
                              <h4>Beautiful Flower</h4>
                              <span>Web Development</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 design photo">
                    <div class="single-awesome-project">
                      <div class="awesome-img">
                        <a href="#"><img src="{{ asset('assets_fe/img/portfolio/6.jpg')}}" alt="" /></a>
                        <div class="add-actions text-center">
                          <div class="project-dec">
                            <a class="venobox" data-gall="myGallery" href="{{ asset('assets_fe/img/portfolio/6.jpg')}}">
                              <h4>Night Hill</h4>
                              <span>Photoshop</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->

  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Kontak Kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +1 5589 55488 55<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: info@example.com<br>
                  <span>Web: www.example.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: A108 Adam Street<br>
                  <span>NY 535022, USA</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>SINGO</strong>. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('assets_fe/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/knob/jquery.knob.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/parallax/parallax.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets_fe/lib/appear/jquery.appear.js')}}"></script>
  <script src="{{ asset('assets_fe/lib/isotope/isotope.pkgd.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('assets_fe/contactform/contactform.js')}}"></script>

  <script src="{{ asset('assets_fe/js/main.js')}}"></script>
</body>

</html>
