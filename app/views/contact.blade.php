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
				<h4>Información</h4>
				<p>Contactanos para cualquier duda.</p>
			</div>

			<div class="widget">
				<h4>General Inquiries</h4>

				<ul class="contact-informations">
					<li><span class="address">C/ San Vicente nº4 - 3º</span></li>
					<li><span class="address">12002 - Castellón</span></li>
				</ul>

				<ul class="contact-informations second">
					<li><i class="halflings headphones"></i> <p>635.537.402</p></li>
					<li><i class="halflings envelope"></i> <p>jcarmona@iicv.es</p></li>
				</ul>

			</div>

		</aside>
	</div>
	<!-- Sidebar / End -->

	<!-- Page Content -->
	<div class="eleven floated right">
		<section class="page-content">

			<h3 class="margin-reset">Donde estamos</h3>

			<br />

			<!-- Google Maps -->
			<section class="google-map-container">

				<div id="googlemaps" class="google-map google-map-full" style="padding-bottom:40%"></div>
				@section('javascript')
				<script src="http://maps.google.com/maps/api/js?sensor=true&amp;language=es-ES"></script>
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


			<h3 class="margin">Formulario de contacto</h3>

				<!-- Contact Form -->
				<section id="contact">

					<!-- Success Message -->
					<mark id="message"></mark>

					<!-- Form -->
					<form method="post" action="/contact" name="contactform" id="contactform">

						<fieldset>

							<div>
								<label for="name" accesskey="U">Nombre:</label>
								<input name="name" type="text" id="name" />
							</div>

							<div>
								<label for="email" accesskey="E">Email: <span>*</span></label>
								<input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
							</div>
							<div>
								<label for="email" accesskey="E">Asunto: <span>*</span></label>
								<input name="subject" type="text" id="subject" />
							</div>

							<div>
								<label for="comments" accesskey="C">Mensaje: <span>*</span></label>
								<textarea name="comment" cols="40" rows="3" id="comment" spellcheck="true"></textarea>
							</div>

						</fieldset>

						<input type="submit" class="submit" id="submit" value="Enviar" />
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