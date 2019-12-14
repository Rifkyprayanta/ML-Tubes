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
              <form action="<?=site_url('user/pertanyaan1')?>" class="form-horizontal" method="post">
              <h2><?php echo $judul1; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="0" name="A1">Selalu</label>
                <label><input type="radio" value="0" name="A1">Sering</label>
                <label><input type="radio" value="1" name="A1">Kadang-kadang</label>
                <label><input type="radio" value="1" name="A1">Jarang</label>
                <label><input type="radio" value="1" name="A1">Tidak Pernah</label>
              </div>
              
              <br>
              <br>

              <h2><?php echo $judul2; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

               <div class="radio">
                <label><input type="radio" value="0" name="A2">Sangat Mudah</label>
                <label><input type="radio" value="0" name="A2">Cukup Mudah</label>
                <label><input type="radio" value="1" name="A2">Cukup Sulit</label>
                <label><input type="radio" value="1" name="A2">Sangat Sulit</label>
                <label><input type="radio" value="1" name="A2">Mustahil</label>
              </div>
              
              <br>
              <br>

              <h2><?php echo $judul3; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

               <div class="radio">
                <label><input type="radio" value="0" name="A3">Berkali - kali sehari</label>
                <label><input type="radio" value="0" name="A3">Beberapa kali sehari</label>
                <label><input type="radio" value="1" name="A3">Beberapa kali seminggu</label>
                <label><input type="radio" value="1" name="A3">Kurang dari sekali seminggu</label>
                <label><input type="radio" value="1" name="A3">Tidak Pernah</label>
              </div>
          
              <br>
              <br>

              <h2><?php echo $judul4; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="0" name="A4">Berkali - kali sehari</label>
                <label><input type="radio" value="0" name="A4">Beberapa kali sehari</label>
                <label><input type="radio" value="1" name="A4">Beberapa kali seminggu</label>
                <label><input type="radio" value="1" name="A4">Kurang dari sekali seminggu</label>
                <label><input type="radio" value="1" name="A4">Tidak Pernah</label>
              </div>

              <br>
              <br>

              <h2><?php echo $judul5; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="0" name="A5">Berkali - kali sehari</label>
                <label><input type="radio" value="0" name="A5">Beberapa kali sehari</label>
                <label><input type="radio" value="1" name="A5">Beberapa kali seminggu</label>
                <label><input type="radio" value="1" name="A5">Kurang dari sekali seminggu</label>
                <label><input type="radio" value="1" name="A5">Tidak Pernah</label>
              </div>

              <br>
              <br>

              <h2><?php echo $judul6; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>
              
               <div class="radio">
                <label><input type="radio" value="0" name="A6">Berkali - kali sehari</label>
                <label><input type="radio" value="0" name="A6">Beberapa kali sehari</label>
                <label><input type="radio" value="1" name="A6">Beberapa kali seminggu</label>
                <label><input type="radio" value="1" name="A6">Kurang dari sekali seminggu</label>
                <label><input type="radio" value="1" name="A6">Tidak Pernah</label>
              </div>

              <br>
              <br>

              <h2><?php echo $judul7; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>
              
               <div class="radio">
                <label><input type="radio" value="0" name="A7">Selalu</label>
                <label><input type="radio" value="0" name="A7">Sering</label>
                <label><input type="radio" value="1" name="A7">Kadang-kadang</label>
                <label><input type="radio" value="1" name="A7">Jarang</label>
                <label><input type="radio" value="1" name="A7">Tidak Pernah</label>
              </div>

              <br>
              <br>

              <h2><?php echo $judul8; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>
              
               <div class="radio">
                <label><input type="radio" value="0" name="A8">Sangat Khas</label>
                <label><input type="radio" value="0" name="A8">Cukup Khas</label>
                <label><input type="radio" value="1" name="A8">Agak Tidak Biasa</label>
                <label><input type="radio" value="1" name="A8">Sangat tidak biasa</label>
                <label><input type="radio" value="1" name="A8">Anak tidak berbicara</label>
              </div>

              <br>
              <br>

              <h2><?php echo $judul9; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="0" name="A9">Berkali - kali sehari</label>
                <label><input type="radio" value="0" name="A9">Beberapa kali sehari</label>
                <label><input type="radio" value="1" name="A9">Beberapa kali seminggu</label>
                <label><input type="radio" value="1" name="A9">Kurang dari sekali seminggu</label>
                <label><input type="radio" value="1" name="A9">Tidak Pernah</label>
              </div>
              
              <br>
              <br>

              <h2><?php echo $judul10; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="1" name="A10">Selalu</label>
                <label><input type="radio" value="1" name="A10">Sering</label>
                <label><input type="radio" value="0" name="A10">Kadang-kadang</label>
                <label><input type="radio" value="0" name="A10">Jarang</label>
                <label><input type="radio" value="0" name="A10">Tidak Pernah</label>
              </div>

              <h2><?php echo $judul11; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="33" name="A11">33 Bulan</label>
                <label><input type="radio" value="34" name="A11">34 Bulan</label>
                <label><input type="radio" value="35" name="A11">35 Bulan</label>
                <label><input type="radio" value="36" name="A11">36 Bulan</label>
                <label><input type="radio" value="37" name="A11">37 Bulan</label>
              </div>

              <h2><?php echo $judul12; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="f" name="A12">Perempuan</label>
                <label><input type="radio" value="m" name="A12">Laki - laki</label>
              </div>

              <h2><?php echo $judul13; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="yes" name="A13">Ya</label>
                <label><input type="radio" value="no" name="A13">Tidak</label>
              </div>

              <h2><?php echo $judul14; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="yes" name="A14">Ya</label>
                <label><input type="radio" value="no" name="A14">Tidak</label>
              </div>

               <h2><?php echo $judul15; ?></h2>
              <h3>Disini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit Autis atau Tidak. Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi / keluhan yang anda rasakan saat ini. Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</h3>
              <p>Jawablah sesuai dengan kondisi saat ini. Anda dapat meminta bantuan kepada orang terdekat untuk mengisikan aplikasi Autism Screening. </p>

              <div class="radio">
                <label><input type="radio" value="Self" name="A15">Diri sendiri</label>
                <label><input type="radio" value="family member" name="A15">Keluarga</label>
                <label><input type="radio" value="Health Care Professional" name="A15">Dokter atau Suster</label>
              </div>




              <div class="form-group">
                <label class="col-lg-2 control-label"></label>
                  <div class="col-lg-5">
                    <button class="btn btn-primary" type="submit" name="submit">       
                      <i class="glyphicon glyphicon-ok"></i>
                        Submit
                    </button>

                    <a href="<?=site_url('user/')?>" class="btn btn-danger">
                      <i class="glyphicon glyphicon-remove"></i> Batal
                    </a>
                  </div>
              </div>


              <br>
              <br>
            </form>
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

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Rapid</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                  </div>

                  <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      A108 Adam Street <br>
                      New York, NY 535022<br>
                      United States <br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>
                      <strong>Email:</strong> info@example.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Send us a message</h4>
              <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
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

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
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
