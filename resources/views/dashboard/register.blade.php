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

    <section id="intro-register" class="clearfix">
        <div class="container">
            <h1>Registrasi</br><span>NGO</span></h1>
        </div>
    </section>

    <main>
        <section id="register">
            <div class="container">
                <div class="form">
                    <form action="" method="post" class="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <h6>Nama Organisasi</h6>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group">
                                    <h6>Negara Asal</h6>
                                    <input type="text" name="nation" class="form-control" id="nation" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <h6>Nomor Registrasi Izin Prinsip</h6>
                                    <input type="text" name="nomor" class="form-control" id="nomor" required>
                                </div>
                                <div class="form-group">
                                    <h6>Country Director / Representative</h6>
                                    <input type="text" name="director" class="form-control" id="director" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Alamat</h6>
                            <textarea rows="5" name="address" class="form-control" id="address" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <h6>Nomor Telepon</h6>
                                    <input type="tel" name="telp" class="form-control" id="telp" required>
                                </div>
                                <div class="form-group">
                                    <h6>Faximile</h6>
                                    <input type="tel" name="fax" class="form-control" id="fax">
                                </div>
                                <div class="form-group">
                                    <h6>Email</h6>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <h6>Website</h6>
                                    <input type="url" name="web" class="form-control" id="web">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <h6>Bidang Kerja</h6>
                                    <input type="text" name="bidang" class="form-control" id="bidang" required>
                                </div>
                                <div class="form-group">
                                    <h6>Tanggal Mulai Beroperasi di Indonesia</h6>
                                    <input type="date" name="date-1" class="form-control" id="date-1" required>
                                </div>
                                <div class="form-group">
                                    <h6>Tanggal Penandatanganan MSP Terakhir</h6>
                                    <input type="date" name="date-2" class="form-control" id="date-2" required>
                                </div>
                                <div class="form-group">
                                    <h6>Lokasi Kerja Sama</h6>
                                    <input type="text" name="lokasi" class="form-control" id="lokasi" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" title="Daftar">Daftar</button>
                        </div>
                    </form>
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