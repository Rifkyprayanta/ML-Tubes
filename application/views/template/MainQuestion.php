<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Aplikasi Screening Autism</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/rapid/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/rapid/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/rapid/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/rapid/lib/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/rapid/lib/animate/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/rapid/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/rapid/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/rapid/lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/rapid/css/style.css');?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>ASD</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('user/');?>">Beranda</a></li>
          <li><a href="<?php echo base_url('user/konsultasi');?>">Konsultasi</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="about-content">
              <h2><?php echo $judul; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>
              
              <a href="<?php echo base_url('user/pertanyaan1');?>"  class="btn btn-outline-primary" role="button" aria-pressed="true">Mulai</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->
  </main>
 <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="row">

                <div class="col-sm-12">

                  <div class="footer-info">
                    <h3>ASD</h3>
                    <p>Kata autism berasal dari bahasa yunani yang terdiri dari dua kata yaitu ”aut” yang berarti “diri sendiri” dan “ism” yang secara tidak langsung menyatakan orientasi atau arah keadaan (state).</p>
                  </div>
                </div>

            </div>

          </div>

        </div>

      </div>
    </div>

    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/rapid/lib/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/jquery/jquery-migrate.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/easing/easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/mobile-nav/mobile-nav.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/wow/wow.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/waypoints/waypoints.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/counterup/counterup.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/owlcarousel/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/isotope/isotope.pkgd.min.js');?>"></script>
  <script src="<?php echo base_url('assets/rapid/lib/lightbox/js/lightbox.min.js');?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url('assets/rapid/contactform/contactform.js');?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('assets/rapid/js/main.js');?>"></script>

</body>
</html>
