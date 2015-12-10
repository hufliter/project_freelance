<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

	<!-- Styles -->
	<link rel="stylesheet" href="{{asset('js/owl-carousel/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('js/owl-carousel/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('js/owl-carousel/owl.transitions.css')}}">
	<link rel="stylesheet" href="{{asset('js/rs-plugin/css/settings.css')}}">
	<link rel="stylesheet" href="{{asset('js/flexslider/flexslider.css')}}">
	<link rel="stylesheet" href="{{asset('js/isotope/isotope.css')}}">
	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('js/magnific-popup/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Icon Fonts -->
	<link rel="stylesheet" href="{{asset('css/icomoon/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">

	<!-- SKIN -->
	<link rel="stylesheet" href="{{asset('css/color-scheme/default-black.css')}}" type="text/css">

</head>
<body id="header6">
<div id="page-top"></div>
<div class="outer-wrapper">
	<div class="header-wrap">

		<!-- HEADER -->
		<header id="header-main">
		<div class="container">
			<div class="navbar yamm navbar-default">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand"><img src="{{asset('img/basic/logo.png')}}" width="40" alt=""/></a>
				</div>

				<!-- SEARCH -->
				<div class="header-x pull-right">
					<div class="s-search">
						<div class="ss-trigger"><i class="icon-search2"></i></div>
						<div class="ss-content">
							<span class="ss-close icon-cross2"></span>
							<div class="ssc-inner">
								<form>
									<input type="text" placeholder="Type Search text here...">
									<button type="submit"><i class="icon-search2"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="page-scroll"><a href="#page-top">Trang Chủ</a></li>
						<li class="page-scroll"><a href="#1">Giới Thiệu</a></li>
						<li class="page-scroll"><a href="#2">Ứng Dụng</a></li>
						<li class="page-scroll"><a href="#3">Sản Phẩm</a></li>
						<li class="page-scroll"><a href="#4">Tỉ Giá & Thời Tiết</a></li>
						<li class="page-scroll"><a href="#6">Kĩ Thuật</a></li>
                        <li class="page-scroll"><a href="#5">Tin Tức</a></li>
						<li class="page-scroll"><a href="#7">Liên Hệ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	</div>

	@yield('content')

	
	<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4 class="space30">About us</h4>
			    <img src="{{asset('img/basic/logo-ico.png')}}" class="img-responsive space20" width="262" alt=""/>
					<p>Lorem ipsum dolor sit amet consec tetur elit vel quam ligula. Duis vel pulvinar diam in lacus non nisl commodo convallis.</p>
					<p>Phasellus rutrum urna ut nibh congue, ut vehicula nibh ultricies.</p>
				</div>
				<div class="col-md-3">
					<h4 class="space30">Recent Posts</h4>
			  <ul class="f-posts">
						<li>
							<img src="{{asset('img/blog/1.jpg')}}" class="img-responsive" alt=""/>
							<h5><a href="#">Lorem ipsum post title</a></h5>
							<p><i class="fa fa-comments"></i> 5 Comments</p>
						</li>
						<li>
							<img src="{{asset('img/blog/2.jpg')}}" class="img-responsive" alt=""/>
							<h5><a href="#">Lorem ipsum post title</a></h5>
							<p><i class="fa fa-comments"></i> 5 Comments</p>
						</li>
						<li>
							<img src="{{asset('img/blog/3.jpg')}}" class="img-responsive" alt=""/>
							<h5><a href="#">Lorem ipsum post title</a></h5>
							<p><i class="fa fa-comments"></i> 5 Comments</p>
						</li>
						<li>
							<img src="{{asset('img/blog/4.jpg')}}" class="img-responsive" alt=""/>
							<h5><a href="#">Lorem ipsum post title</a></h5>
							<p><i class="fa fa-comments"></i> 5 Comments</p>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4 class="space30">Contact</h4>
			  <ul class="c-info">
						<li><i class="fa fa-map-marker"></i> 72 Wall street Rd<br>Some county<br>Newyork 20001
						</li>
						<li>
						</li>
						<li><i class="fa fa-phone"></i> (012) 345 5678 910</li>
						<li><i class="fa fa-envelope-o"></i> support@dk-themes.com</li>
						<li><i class="fa fa-skype"></i> myskypeid</li>
					</ul>
					<div class="clearfix space10"></div>
				</div>
				<div class="col-md-3">
					<h4 class="space30">Flickr</h4>
				  <ul id="flickr" class="thumbs"></ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- FOOTER COPYRIGHT -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>&copy; Copyright 2015. Maxima. Designed by <a href="#" target="_blank"> CK Themes</a></p>
				</div>
				<div class="col-md-4">
					<div class="f-social pull-right">
						<a class="fa fa-twitter" href="#"></a>
						<a class="fa fa-facebook" href="#"></a>
						<a class="fa fa-linkedin" href="#"></a>
						<a class="fa fa-dribbble" href="#"></a>
						<a class="fa fa-google-plus" href="#"></a>
						<a class="fa fa-skype" href="#"></a>
						<a class="fa fa-behance" href="#"></a>
						<a class="fa fa-stumbleupon" href="#"></a>
						<a class="fa fa-rss" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/isotope/isotope.pkgd.js')}}"></script>
<script src="{{asset('js/jflickrfeed.min.js')}}"></script>
<script src="{{asset('js/tweecool.js')}}"></script>
<script src="{{asset('js/flexslider/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/easypie/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery.inview.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<script src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.easing/jquery.easing.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="{{asset('js/gmaps/greyscale.js')}}"></script>
 
</body>
</html>