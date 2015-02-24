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
								<option value="projects">Proyectos de instalaciones</option>
								<option value="licenses">Licencias de actividad</option>
								<option value="energy">Energía</option>
								<option value="environmental">Ingeniería ambiental</option>
								<option value="civil">Ingeniería civil</option>
								<option value="expert">Periciales</option>
							</select>

						</fieldset>
						<fieldset class="one-third column">

						@foreach ($services as $service)
							<select name={{$service}} id={{$service}} style="display: none; border: 3px solid #B2B2B2;">
								<option value="0">--- Select a service ---</option>
								@foreach (extraUtils::getServices($service) as $service )
									<option value={{$service['id']}}>{{$service['title']}}</option>
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
		@foreach (extraUtils::getServices($service) as $service )
		<!--start service-->
			<div id={{$service['id']}} style="display: none;">
				<div class="ten columns">
					<!-- Headline --><br />
					<h3 class="margin-reset">{{$service['title']}}</h3><br />

					<div>
						{{$service['text']}}
						
					</div>
				</div>	


				<div class="six columns">
					<!-- Headline --><br />
					<h3 class="margin-reset">Price</h3><br />
					<div>
						{{$service['price']}}<br />
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