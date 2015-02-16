<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Javier C</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link href="{{URL::to('css/style.css') }}" rel="stylesheet" type="text/css">
@yield('css')

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>

<!-- Wrapper / Start -->
<div id="wrapper">

<!-- Header
================================================== -->
<div id="top-line"></div>

<!-- 960 Container -->
<div class="container">

	<!-- Header -->
	<header id="header">

		<!-- Logo -->
		<div class="ten columns">
			<a href="#"><img src="<?php echo asset('img/logo.png')?>" /></a>
		</div>

		<!-- Social / Contact -->
		<div class="six columns">

			<!-- Social Icons -->
			<ul class="social-icons">
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="dribbble"><a href="#">Dribbble</a></li>
				<li class="linkedin"><a href="#">LinkedIn</a></li>
				<li class="rss"><a href="#">RSS</a></li>
			</ul>

			<div class="clearfix"></div>

			<!-- Contact Details -->
			<div class="contact-details">Contact Phone: +48 880 440 110</div>

			<div class="clearfix"></div>

			<!-- Search -->
			<nav class="top-search">
				<form action="404-page.html" method="get">
					<button class="search-btn"></button>
					<input class="search-field" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search" />
				</form>
			</nav>

		</div>
	</header>
	<!-- Header / End -->

	<div class="clearfix"></div>

</div>
<!-- 960 Container / End -->


<!-- Navigation
================================================== -->
<nav id="navigation" class="style-2">

<div class="left-corner"></div>
<div class="right-corner"></div>

<ul class="menu" id="responsive">

	<li><a href="index" 	{{baseUtils::pageCheck($page, 'index')}}	><i class="halflings white home"></i> Inicio</a></li>
	<li><a href="about" 	{{baseUtils::pageCheck($page, 'about')}} 	><i class="halflings white briefcase"></i> Empresa</a></li>
	<li><a href="services" 	{{baseUtils::pageCheck($page, 'services')}} 	><i class="halflings white cog"></i> Servicios</a>
		<!-- Second Level / Start -->
		<ul class="cols2">
			<li><a href="projects" 		{{baseUtils::pageCheck($page, 'projects')}} 	>Proyectos de instalaciones</a></li>
			<li><a href="licenses" 		{{baseUtils::pageCheck($page, 'licenses')}} 	>Licencias de actividad</a></li>
			<li><a href="energy" 		{{baseUtils::pageCheck($page, 'energy')}}	>Energía</a></li>
			<li><a href="environmental" {{baseUtils::pageCheck($page, 'environmental')}}	>Ingeniería ambiental</a></li>
			<li><a href="civil" 		{{baseUtils::pageCheck($page, 'civil')}}	>Ingeniería civil</a></li>
			<li><a href="expert"		{{baseUtils::pageCheck($page, 'expert')}}	>Periciales</a></li>
			
		</ul>
		<!-- Second Level / End -->
	</li>
	<li><a href="contact" {{baseUtils::pageCheck($page, 'contact')}} ><i class="halflings white envelope"></i> Contacto</a></li>
	<li><a href="extra" {{baseUtils::pageCheck($page, 'extra')}} ><i class="halflings white envelope"></i> extra</a></li>

</ul>
</nav>
<div class="clearfix"></div>
@yield('content')


<!-- Footer / Start -->
<footer id="footer">
	<!-- 960 Container -->
	<div class="container">

		<!-- About -->
		<div class="four columns">
			<a href="#"><img src="{{asset('img/logo.jpg')}}" style="width: 210px; height: 70px;" /></a>
			<p>Morbi gravida imperdiet rutrum fusce mattis, lectus consequat vestibulum, duinibh fermentum ligula.</p>

		</div>

		<!-- Contact Details -->
		<div class="four columns">
			<h4>Contact Details</h4>
			<ul class="contact-details-alt">
				<li><i class="halflings white map-marker"></i> <p><strong>Address:</strong> 123 Seward Street, Oklahoma City, USA</p></li>
				<li><i class="halflings white user"></i> <p><strong>Phone:</strong> +48 880 440 110</p></li>
				<li><i class="halflings white envelope"></i> <p><strong>Email:</strong> <a href="#">mail@example.com</a></p></li>
			</ul>
		</div>

		<!-- Photo Stream -->
		<div class="four columns">
			<h4>Photo Stream</h4>
			<div class="flickr-widget">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=72179079@N00"></script>
				<div class="clearfix"></div>
			</div>
		</div>

		<!-- Twitter -->
		<div class="four columns">
			<h4>Twitter</h4>
			<ul id="twitter"></ul>
				<script type="text/javascript">
					jQuery(document).ready(function($){
					$.getJSON('twitter.php?url='+encodeURIComponent('statuses/user_timeline.json?screen_name=Vasterad&count=1'), function(tweets){
						$("#twitter").html(tz_format_twitter(tweets));
					}); });
				</script>
			<div class="clearfix"></div>
		</div>

	</div>
	<!-- 960 Container / End -->

</footer>
<!-- Footer / End -->


<!-- Footer Bottom / Start  -->
<footer id="footer-bottom">

	<!-- 960 Container -->
	<div class="container">

		<!-- Copyrights -->
		<div class="eight columns">
			<div class="copyright">
				© Copyright 2013 by <a href="#">Nevia</a>. All Rights Reserved.
			</div>
		</div>

		<!-- Menu -->
		<div class="eight columns">
			<nav id="sub-menu">
				<ul>
					<li><a href="#">FAQ's</a></li>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>

	</div>
	<!-- 960 Container / End -->

</footer>
<!-- Footer Bottom / End -->

<!-- Java Script
================================================== -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{ HTML::script("scripts/jquery.flexslider.js") }}
{{ HTML::script("scripts/jquery.selectnav.js") }}
{{ HTML::script("scripts/jquery.twitter.js") }}
{{ HTML::script("scripts/jquery.modernizr.js") }}
{{ HTML::script("scripts/jquery.easing.1.3.js") }}
{{ HTML::script("scripts/jquery.contact.js") }}
{{ HTML::script("scripts/jquery.isotope.min.js") }}
{{ HTML::script("scripts/jquery.jcarousel.js") }}
{{ HTML::script("scripts/jquery.fancybox.min.js") }}
{{ HTML::script("scripts/jquery.transit-modified.js") }}
{{ HTML::script("scripts/jquery.layerslider-transitions.js") }}
{{ HTML::script("scripts/jquery.layerslider.min.js") }}
{{ HTML::script("scripts/jquery.shop.js") }}
{{ HTML::script("scripts/custom.js") }}
@yield('javascript')

</body>
</html>