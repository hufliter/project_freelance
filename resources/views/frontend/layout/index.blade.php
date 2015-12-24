<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>CÔNG TY PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="{{ elixir('css/all.css') }}">

</head>
<body id="header6">
<div id="page-top"></div>
<div class="outer-wrapper">

	@yield('content')

	
	<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
			    	<img src="{{asset('img/logo.png')}}" class="img-responsive space20" alt="Not Found" style="float: left; margin: auto; padding: 0;" />
					<h4 style="color:white; font-weight: bold; text-align: center;">Công Ty TNHH Phát Triển Công Nghiệp Sài Gòn</h4>
					<h4 style="color:white; font-weight: bold; text-align: center;">Saigon Industrial Development Co,LTD</h4>
				</div>
				
				<div class="col-md-4">
					<h4 class="space30" style="color:white;">Liên Hệ</h4>
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
				
			</div>
		</div>
	</footer>

	<!-- FOOTER COPYRIGHT -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>&copy; Copyright 2015. TP. <a href="#" target="_blank"> TPGabriel</a></p>
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

<script src="{{ elixir('js/all.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="{{asset('js/gmaps/greyscale.js')}}"></script>
</body>
</html>