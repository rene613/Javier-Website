@extends('base')
@section('css')
@stop
@section('javascript')
@stop
@section('content')
<!-- Content
================================================== -->

<div class="container">
	<div class="sixteen columns">
                <br><br>
                <img src="img/J3.jpg" alt="" />
	</div>
</div>
@foreach (extraUtils::getServices($page) as $service )
	<div class="container">
		<div class="container" style="margin: 15px 9px;">
		        <h2><a href="projects" class="titleLink">{{$service['title']}}</a></h2>
		</div>

		<!-- 960 Container -->
		<div class="container"style="margin-bottom: 50px;">
		        <div class="twelve columns">
				{{$service['text']}}
		        </div>
		</div>
	</div>
	<!-- 960 Container / End -->
@endforeach
@stop