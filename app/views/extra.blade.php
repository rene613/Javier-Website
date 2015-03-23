@extends('base')
@section('css')
@stop
@section('content')

<div id="content">


<!-- 960 Container -->
<div class="container floated">

	<div class="sixteen floated page-title">

		<h2>Exxtra</h2>

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
		<form method="post" action="contactProcess.php" name="contactform" id="contactform">
						<fieldset class="one-third column">

							<select name="services" id="services" style="border: 3px solid #B2B2B2">

								<option value="0">--- Select a service ---</option>
								@foreach ($services as $service)
									<option value={{$service->service_id}}>{{$service->service_name}}</option>
								@endforeach
							</select>

						</fieldset>
						<fieldset class="one-third column">

						@foreach ($services as $service)
							<?php $id = $service->service_id; ?>
							<select name={{$id}} id={{$id}} style="display: none; border: 3px solid #B2B2B2;">
								<option value="0">--- Select a service ---</option>

								<?php $subservices = DB::select("select * from subservices where service_name = '$id' ORDER BY sub_id"); ?>
								@foreach ($subservices as $subservice)
									<option value={{$subservice->sub_id}}>{{$subservice->sub_name}}</option>
								@endforeach
							</select>
						@endforeach

						</fieldset>

					</form>
	</div>
	<!-- Texts / End -->

</div>
<!-- 960 Container / End -->

<br />

<!-- 960 Container -->
<div class="container">

	<!-- Extras -->

	@foreach ($services as $service)
		<?php $subservices = DB::select("select * from subservices where service_name = '$service->service_id' ORDER BY sub_id"); ?>
		@foreach ($subservices as $subservice)
		<?php
			$id = $subservice->sub_id;
			$name = $subservice->sub_name;
			$text = $subservice->sub_text;
			$price = $subservice->price;
		?>
		<!--start service-->
			<div id={{$id}} style="display: none;">
				<div class="ten columns">
					<!-- Headline --><br />
					<h3 class="margin-reset">{{$name}}</h3><br />

					<div>
						{{$text}}
						
					</div>
				</div>	

				<!-- space -->
				<div class="three columns" style="visibility: hidden;">.</div>

				<div class="three columns">
					<!-- Headline --><br />
					<h3 class="margin-reset">Price</h3><br />
					<div>
						@if ($price == null)
							No price available.
							<a href="contact" class="button color launch">Contact us</a>	
						@else 
							{{$price}}
						@endif<br />
					</div>
				</div>
			</div>
			<!--end service-->
		@endforeach
	@endforeach


</div>
<!-- 960 Container / End -->

<br />
<br />



</div>
<!-- Page Content / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

@stop
@section('javascript')
{{ HTML::script('scripts/extra.js') }}
@stop