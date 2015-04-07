@extends('base')
@section('css')
@stop
@section('javascript')
@stop
@section('content')
<!-- Content
================================================== -->
<!-- 960 Container -->
<div class="container">
	<div class="sixteen columns">
                <br><br>
                <img src="img/J3.jpg" alt="" />
	</div>
</div>

@foreach ($services as $service)
	<?php 
		$id = $service->service_id;
		$name = $service->service_name;
		$text = $service->service_text;
	?>
<!-- 960 Container -->
<div class="container" style="margin: 20px 39px;">
        <h1><a href={{"service".$id}} class="titleLink">{{$name}}</a></h1>
</div>
<!-- 960 Container -->
<div class="container">
        <div class="twelve columns">
			{{$text}}
        </div>
    
	<div class="four columns">
		<div class="project-info-container">
				<ul class="project-info">
				<li><strong>Client:</strong> Google</li>
				<li><strong>Date:</strong> December 2012</li>
				<li><a href="service{{$id}}" class="button color launch"> View Project</a></li>
			</ul>
		</div>
	</div>

</div>
<!-- 960 Container / End -->
@endforeach

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

@stop