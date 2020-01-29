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

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="{{ asset('assets_fe/img/intro-img.svg')}}" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>solutions</span><br>for your NGOs!</h2>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Tentang Kami</h3>
          <p>SINGO adalah sistem informasi yang dipersembahkan oleh Kementerian Dalam Negeri Republik Indonesia.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              <b>Kementerian Dalam Negeri Republik Indonesia</b> mempunyai tugas menyelenggarakan urusan pemerintahan dalam negeri untuk membantu Presiden dalam menyelenggarakan pemerintahan negara.
            </p>
            <h3>Visi dan Misi</h3>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-check"></i></div>
              <h4 class="title"><p>Menjadi Poros Pemerintahan Dalam Negeri</p></h4>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-check"></i></div>
              <h4 class="title"><p>Meningkatkan Pelayanan Publik</p></h4>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.3s">
              <div class="icon"><i class="fa fa-check"></i></div>
              <h4 class="title"><p>Menegakkan Demokrasi</p></h4>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-check"></i></div>
              <h4 class="title"><p>Menjaga Integrasi Bangsa</p></h4>
            </div>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="{{ asset('assets_fe/img/logo-kemendagri.svg')}}" class="img-fluid kemendagri" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{ asset('assets_fe/img/about-extra-1.svg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Sistem Informasi Non-Government Organization</h4>
            <p>
              Sistem Informasi Non-Government Organization atau <b>SINGO</b> adalah sistem informasi yang mendukung NGO dalam berkolaborasi dengan pemda dalam Rencana Pembangunan Daerah.
            </p>
            <h5>Modul yang Disediakan</h5>
            <div class="row">
              <div class="col-sm-6">
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Rencana Kerja Tahunan
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Laporan Tahunan & Keuangan
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Rekomendasi Tenaga Asing
                  </li>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Pemberitahuan Tamu Asing
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Pemberdayaan Mitra Lokal
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Monitoring & Evaluasi
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Berita Terbaru</h3>
        </header>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/app1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/app2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/mg/portfolio/web2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/web2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/app3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/card1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/card3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets_fe/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{ asset('assets_fe/img/portfolio/web1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Kontak Kami</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4717.214048199167!2d106.82880419552595!3d-6.172460646646389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x30b7ec7f0aeb8f12!2sKementerian%20Dalam%20Negeri%20Republik%20Indonesia!5e0!3m2!1sid!2sid!4v1580195984657!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6 info">
                <i class="ion-ios-location-outline"></i>
                <p>Jl. Medan Merdeka Utara No. 7, Jakarta Pusat 10110</p>
              </div>
              <div class="col-md-6 info">
                <i class="ion-ios-email-outline"></i>
                <p>pusdatin@kemendagri.go.id</p>
                <i class="ion-ios-telephone-outline"></i>
                <p>(021) 3450038</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
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
