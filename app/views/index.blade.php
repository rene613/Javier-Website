@extends('base')
@section('css')
@stop
@section('javascript')
@stop
@section('content')

<div id="content">
<!-- LayerSlider  -->
<section id="layerslider-container">
	<div id="layerslider" style="width: 1020px; height: 450px; margin: 0 auto;">

		<!-- Slide 1 -->
		<article class="ls-layer" style="slidedelay: 10000;">
			<img src="img/slide-01.jpg" class="ls-bg" alt="">
			<img class="ls-s4" src="img/sun.jpg" style="top: 50%; left: 120px; width:300px; height: 300px; slidedirection: bottom; slideoutdirection: bottom; durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 1000;" alt=""/>
			<h3 class="ls-s1 caption-color" style="top: 50%; left: 50%; slidedirection: right; slideoutdirection: right; durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 1000;">Rise and shine</h3>
		</article>

		<!-- Slide 2 -->
		<article class="ls-layer" style="slidedelay: 10000; slidedirection: top;">
			<img src="img/slide-02.png" class="ls-bg">
			<img class="ls-s4" src="img/J12.jpg" style="top: 50%; left: 67px; width:400px; height: 400px; slidedirection: left; slideoutdirection: left; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;" alt=""/>
			<img class="ls-s4" src="img/J22.jpg" style="top: 50%; left: 549px; width:400px; height: 400px; slidedirection: right; slideoutdirection: right; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;" alt=""/>
			<img class="ls-s4" src="img/slide-02c.png" style="top: 230px; left: 494px; slidedirection: top; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;" alt=""/>
			<img class="ls-s2" src="img/ruler.png" style="top: 50%; left: 90px; width: 100px; height: 100px; slidedirection: left; slideoutdirection: left; durationin: 600; durationout: 1000; easingin: easeOutExpo; delayin: 1700;" alt=""/>
			<img class="ls-s2" src="img/compass.png" style="top: 50%; left: 840px; width: 120px; height: 120px; slidedirection: right; slideoutdirection: right; durationin: 600; durationout: 1000; easingin: easeOutExpo; delayin: 1700;" alt=""/>
			<h3 class="ls-s1 caption-color" style="top: 307px; width: 100px; text-align: center; left: 50%; slidedirection: bottom; slideoutdirection: top; durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 1000;">
				Licencias
			</h3>
		</article>
		
		<!-- Slide 3 -->
		<article class="ls-layer" style="slidedelay: 10000; slidedirection: top;">
			<img src="img/slide-02.png" class="ls-bg">
			<img class="ls-s4" src="img/slide-02a.png" style="top: 50%; left: 260px; slidedirection: left; slideoutdirection: left; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;" alt=""/>
			<img class="ls-s4" src="img/slide-02b.png" style="top: 50%; left: 544px; slidedirection: right; slideoutdirection: right; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;" alt=""/>
			<img class="ls-s4" src="img/slide-02c.png" style="top: 230px; left: 494px; slidedirection: top; durationin: 800; durationout: 800; easingin : easeOutExpo; delayin : 1200;" alt=""/>
			<img class="ls-s2" src="img/slide-02d.png" style="top: 15px; left: -142px; slidedirection: left; slideoutdirection: left; durationin: 600; durationout: 1000; easingin: easeOutExpo; delayin: 1200;" alt=""/>
			<img class="ls-s2" src="img/slide-02e.png" style="top: 15px; left: 784px; slidedirection: right; slideoutdirection: right; durationin: 600; durationout: 1000; easingin: easeOutExpo; delayin: 1200;" alt=""/>
			<h3 class="ls-s1 caption-color" style="top: 257px; left: 756px; slidedirection: right; slideoutdirection: right; durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 1000;">
				Caption! Place some small points here, it'll attract some attention. think about:<br>
				<li><i class="halflings white circle-arrow-right"></i> ¡Some words! </li>
				<li><i class="halflings white circle-arrow-right"></i> ¡Your Money! </li>
				<li><i class="halflings white circle-arrow-right"></i> ¡And LOTS of magic! </li>
			</h3>
		</article>

		<!-- Slide 4 -->
		<article class="ls-layer" style="slidedelay: 7000;">
			<img src="img/cm.jpg" class="ls-bg" alt="">
			<h1 class="ls-s1 caption-color" style="top: 357px; left: 50%; slidedirection: right; slideoutdirection: top; durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 500;">OM NOM NOM! :3</h1>
			<!--<h3 class="ls-s1 caption-transparent" style="top: 357px; left: 40px;">Image in Slide Directly</h3>-->
		</article>

	</div>
</section>
<!-- LayerSlider / End -->


<!-- 960 Container -->
<div class="container">

	<!-- Icon Boxes -->
	<section class="icon-box-container">

		<!-- Icon Box Start -->
		<div class="one-third column">
			<article class="icon-box">
				<i class="icon-calendar"></i>
				<h3>Planificación</h3>
				<p>El proceso de desarrollo e implementación de planes para alcanzar los propósitos u objetivos.</p>
			</article>
		</div>
		<!-- Icon Box End -->

		<!-- Icon Box Start -->
		<div class="one-third column">
			<article class="icon-box">
				<i class="icon-tasks"></i>
				<h3>Diligencia</h3>
				<p>Desarrollo de los trabajos con gran agilidad y entusiasmo.</p>
			</article>
		</div>
		<!-- Icon Box End -->

		<!-- Icon Box Start -->
		<div class="one-third column">
			<article class="icon-box">
				<i class="icon-user"></i>
				<h3>Responsabilidad</h3>
				<p></p>
			</article>
		</div>
		<!-- Icon Box End -->

	</section>
	<!-- Icon Boxes / End -->

</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class="container floated">
	<div class="blank floated">

	<li class="one-third column">
		<a href="projects" class="portfolio-item">
			<figure>
				<img src="img/J1.jpg" alt=""/>
				<figcaption class="item-description">
					<h5>Proyectos de instalaciones</h5>
					<span>something short to say about the item. If anything at all.</span>
				</figcaption>
			</figure>
		</a>
		<a href="licenses" class="portfolio-item">
			<figure>
				<img src="img/J1.jpg" alt=""/>
				<figcaption class="item-description">
					<h5>Licencias de actividad</h5>
					<span>something short to say about the item. If anything at all.</span>
				</figcaption>
			</figure>
		</a>
	</li>
	<li class="one-third column">
		<a href="energy" class="portfolio-item">
			<figure>
				<img src="img/J1.jpg" alt=""/>
				<figcaption class="item-description">
					<h5>Energía</h5>
					<span>something short to say about the item. If anything at all.</span>
				</figcaption>
			</figure>
		</a>
		<a href="environmental" class="portfolio-item">
			<figure>
				<img src="img/J1.jpg" alt=""/>
				<figcaption class="item-description">
					<h5>Ingeniería ambiental</h5>
					<span>something short to say about the item. If anything at all.</span>
				</figcaption>
			</figure>
		</a>
	</li>
	<li class="one-third column">
		<a href="civil" class="portfolio-item">
			<figure>
				<img src="img/J1.jpg" alt=""/>
				<figcaption class="item-description">
					<h5>Ingeniería civil</h5>
					<span>something short to say about the item. If anything at all.</span>
				</figcaption>
			</figure>
		</a>
		<a href="expert" class="portfolio-item">
			<figure>
				<img src="img/J1.jpg" alt=""/>
				<figcaption class="item-description">
					<h5>Periciales</h5>
					<span>something short to say about the item. If anything at all.</span>
				</figcaption>
			</figure>
		</a>
	</li>

	</div>
</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class="container">

	<!-- Recent News -->
	<div class="eight columns">

		<h3 class="margin-1">Recent News <span>/ Stuff From Our Blog</span></h3>

		<div class="four columns alpha">
			<article class="recent-blog">
				<section class="date">
					<span class="day">28</span>
					<span class="month">Dec</span>
				</section>
				<h4><a href="blog-post.html">The Boating Life Begins With a Good Storm</a></h4>
				<p>Integer libero lectus, porta acean pulvinar ac, facilisis non arcu. <span class="cut">Maecenas enim orci, adipiscing dictum sit amet gusce dapibus.</span></p>
			</article>
		</div>

		<div class="four columns omega">
			<article class="recent-blog">
				<section class="date">
					<span class="day">15</span>
					<span class="month">Dec</span>
				</section>
				<h4><a href="blog-post.html">Visiting Tuscany Without the Crowds</a></h4>
				<p>Integer libero lectus, porta acean pulvinar ac, facilisis non arcu. <span class="cut">Maecenas enim orci, adipiscing dictum sit amet gusce dapibus.</span></p>
			</article>
		</div>

	</div>

	<!-- Testimonials -->
	<div class="eight columns">

		<h3 class="margin-1">Testimonials <span>/ What Our Clients Say</span></h3>

		<!-- Testimonial Rotator -->
		<section class="flexslider testimonial-slider">
			<ul class="slides">
				<li class="testimonial">
					<div class="testimonials">Integer eu libero sit amet nisl vestibulum semper. Fusce costant Proin sit amet mauris odio pellentesque iaculis posuer dapibus natoque penatibus et magnis dis parturient montes.</div>
					<div class="testimonials-bg"></div>
					<div class="testimonials-author">Michael, <span>Flash Developer</span></div>
				</li>

				<li class="testimonial">
					<div class="testimonials">Posuere erat a ante venenatis dapibus posuere velit aliquet. Proin sit amet mauris odio pellentesque iaculis. Cum sociis natoque penatibus et lorem magnis dis parturient montes, nascetur ridiculus mus. Duisean lorem llis noenan coeammodo luctus.</div>
					<div class="testimonials-bg"></div>
					<div class="testimonials-author">John, <span>Web Developer</span></div>
				</li>

				<li class="testimonial">
					<div class="testimonials">Cras sed odio est, sit amet porttitor elit. Vestibulum Proin sit amet mauris et odio pellentesque iaculis. Cum sociis natoque proin sit amet mauris odio pellentesque iaculis.</div>
					<div class="testimonials-bg"></div>
					<div class="testimonials-author">Peter, <span>Project Manager</span></div>
				</li>

				<li class="testimonial">
					<div class="testimonials">Elementum erat vitae ante venenatis dapibus. Maecenas cursus  cursus Proin sit amet mauris et odio pellentesque iaculis.</div>
					<div class="testimonials-bg"></div>
					<div class="testimonials-author">Kathy, <span>Art Director</span></div>
				</li>
			</ul>
		</section>
		<!-- Testomonial Rotator / End -->

	</div>

</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

@stop