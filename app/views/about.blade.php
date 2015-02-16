@extends('base')
@section('css')
@stop
@section('javascript')
@stop
@section('content')

<div id="content">


<!-- 960 Container -->
<div class="container floated">

	<div class="sixteen floated page-title">

		<h2>About</h2>

		<nav id="breadcrumbs">
			<ul>
				<li>You are here:</li>
				<li><a href="index.html">Home</a></li>
				<li>About</li>
			</ul>
		</nav>

	</div>

</div>
<!-- 960 Container / End -->

<!-- Page Content -->
<div class="page-content">


<!-- 960 Container -->
<div class="container">

	<!-- Texts -->
	<div>
		<h3 style="margin: -10px 0 15px 0;">Who We Are?</h3>
		<p>Donec odio ut arcu fringilla dictum eu eu nisl. Donec rutrum erat non arcu gravida porttitor. Nunc et magna nisi. lore Aliquam at erat in lorem purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas. Maecenas ut nulla quis eros scelerisque posuere vel vitae nibh. Proin id condimentum sem. Morbi vitae dui in magna vestibulum suscipit vitae vel nunc. Integer ut risus nulla. malesuada tortor, nec scelerisque lorem mattis.</p>
		<p>Nunc et rutrum consetetur sadipscing dolor elitr, sed diam nonumy lore at volutpat. Sed consectetur suscipit lorem nunc.adipiscing elit. Integercommodo tristique odio, quis fringilla ligula aliquet. Proin iaculis purus consequat dursus dolor dignitea onecade lore porttitora suscipit aenean roncus posuere odio tincidunt posuere molestie. Nam aliquam volutpat vel bibendum nunc elit purus tempus pulvinar rhoncus eges tas vel nibheas volutpat leo aliquam in scelerise sagittis.</p>
	</div>
	<!-- Texts / End -->

</div>
<!-- 960 Container / End -->

<br />

<!-- 960 Container -->
<div class="container">

	<!-- Extras -->
	<div class="ten columns">
			<!-- Headline --><br />
			<h3 class="margin-reset">How We Do?</h3><br />

			<!-- Accordion -->
			<div class="accordion">

				<!-- Section 1 -->
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon ui-accordion-icon-active"></span>Our Company Mission</h3>
				<div>
					<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque.</p>
				</div>

				<!-- Section 2 -->
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>Success Stories</h3>
				<div>
					<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut condimentum feugiat, felis nibh ornare massa, quis consectetur.</p>
				</div>

				<!-- Section 3 -->
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>Our Approach</h3>
				<div>
					<p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis. </p>
				</div>
			</div>
			<!-- Accordion / End -->
	</div>

	<div class="six columns">
		<!-- Headline --><br />
		<h3 class="margin-reset">Our Skills</h3><br />
		<div id="skill-bars">
			<div class="skill-bar"><div class="skill-bar-content" data-percentage="100"></div><span class="skill-title">Web Design</span></div>
			<div class="skill-bar"><div class="skill-bar-content" data-percentage="100"></div><span class="skill-title">HTML / CSS</span></div>
			<div class="skill-bar"><div class="skill-bar-content" data-percentage="100"></div><span class="skill-title">WordPress</span></div>
			<div class="skill-bar"><div class="skill-bar-content" data-percentage="100"></div><span class="skill-title">jQuery</span></div>
			<div class="skill-bar"><div class="skill-bar-content" data-percentage="100"></div><span class="skill-title">SEO</span></div>
		</div>

	</div>
	<!-- Extras / End -->

</div>
<!-- 960 Container / End -->

<br />
<br />

<!-- 960 Container -->
<div class="container">

	<div class="sixteen columns">
		<h3>Meet the Team</h3><br />
	</div>

	<!-- About -->
	<div class="one-third column">
		<img src="img/about-01.jpg" alt=""/>
		<div class="team-name"><h5>Jane Smith</h5> <span>Chief Executive Officer / CEO</span></div>
		<div class="team-about"><p>Consectetur dolor ipsum quiam dolor adipisci velit, aenean at lorem vel est posuere feugiat sed quia noneas numquasa mode tempora incidunt.</p></div>
	</div>

	<!-- About -->
	<div class="one-third column">
		<div class="clear"></div>
		<img src="img/about-02.jpg" alt=""/>
		<div class="team-name"><h5>John Doe</h5> <span>Web Designer</span></div>
		<div class="team-about"><p>Consectetur dolor ipsum quiam dolor adipisci velit, aenean at lorem vel est posuere feugiat sed quia noneas numquasa mode tempora incidunt.</p></div>
	</div>

	<!-- About -->
	<div class="one-third column">
		<img src="img/about-03.jpg" alt=""/>
		<div class="team-name"><h5>Michael Smith</h5> <span>Project Manager</span></div>
		<div class="team-about"><p>Consectetur dolor ipsum quiam dolor adipisci velit, aenean at lorem vel est posuere feugiat sed quia noneas numquasa mode tempora incidunt.</p></div>
	</div>

</div>
<!-- 960 Container / End -->


</div>
<!-- Page Content / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

@stop