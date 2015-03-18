@extends('base')
@section('css')
@stop
@section('content')
<div id="content">


<!-- 960 Container -->
<div class="container floated">

	<div class="sixteen floated page-title">

		<h2>Contact</h2>

		<nav id="breadcrumbs">
			<ul>
				<li>You are here:</li>
				<li><a href="index.html">Home</a></li>
				<li>Contact</li>
			</ul>
		</nav>

	</div>

</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class="container floated">

	<!-- Sidebar -->
	<div class="four floated sidebar left">
		<aside class="sidebar padding-reset">

			<div class="widget">
				<h4>Information</h4>
				<p>Phasellus ultricies id suscipit mauris monte lobortis. Cum sociis natoque penatibus magnis parturient.</p>
			</div>

			<div class="widget">
				<h4>General Inquiries</h4>

				<ul class="contact-informations">
					<li><span class="address">123 Seward Street</span></li>
					<li><span class="address">Los Angeles, CA 90185, USA</span></li>
				</ul>

				<ul class="contact-informations second">
					<li><i class="halflings headphones"></i> <p>+48 880 440 110</p></li>
					<li><i class="halflings envelope"></i> <p>support@example.com</p></li>
					<li><i class="halflings globe"></i> <p>www.example.com</p></li>
				</ul>

			</div>

			<div class="widget">
				<h4>Business Hours</h4>
				<ul class="contact-informations hours">
					<li><i class="halflings time"></i>Monday - Friday <span class="hours">8 am to 4 pm</span></li>
					<li><i class="halflings time"></i>Saturday <span class="hours">9 am to 2 pm</span></li>
					<li><i class="halflings ban-circle"></i>Sunday <span class="hours">Closed</span></li>
				</ul>
			</div>

		</aside>
	</div>
	<!-- Sidebar / End -->

	<!-- Page Content -->
	<div class="eleven floated right">
		<section class="page-content">

			<h3 class="margin-reset">Our Location</h3>

			<br />

			<!-- Google Maps -->
			<section class="google-map-container">

				<div id="googlemaps" class="google-map google-map-full" style="padding-bottom:40%"></div>
				@section('javascript')
				<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
				{{ HTML::script("scripts/jquery.gmap.min.js") }}
				<script type="text/javascript">
				jQuery('#googlemaps').gMap({
					maptype: 'ROADMAP',
					scrollwheel: false,
					zoom: 16,
					markers: [
						{
							address: 'castellon de la plana Carrer de Sant Vicent, 4', // Your Adress Here
							html: '',
							popup: false,
						}
					],
				});
				</script>
				@stop
				
			</section>
			<!-- Google Maps / End -->


			<h3 class="margin">Contact Form</h3>
			<p class="margin">The simple contact form below comes packed within this theme. This HTML5 & AJAX contact form utilises cutting edge HMTL5 code and jQuery animations to make your contact page elegant and ultra-usable.</p>

				<!-- Contact Form -->
				<section id="contact">

					<!-- Success Message -->
					<mark id="message"></mark>

					<!-- Form -->
					<form method="post" action="/contact" name="contactform" id="contactform">

						<fieldset>

							<div>
								<label for="name" accesskey="U">Name:</label>
								<input name="name" type="text" id="name" />
							</div>

							<div>
								<label for="email" accesskey="E">Email: <span>*</span></label>
								<input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
							</div>
							<div>
								<label for="email" accesskey="E">Subject: <span>*</span></label>
								<input name="subject" type="text" id="subject" />
							</div>

							<div>
								<label for="comments" accesskey="C">Message: <span>*</span></label>
								<textarea name="comment" cols="40" rows="3" id="comment" spellcheck="true"></textarea>
							</div>

						</fieldset>

						<input type="submit" class="submit" id="submit" value="Send Message" />
						<div class="clearfix"></div>

					</form>

				</section>
				<!-- Contact Form / End -->


		</section>
	</div>
	<!-- Page Content / End -->


</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

@stop