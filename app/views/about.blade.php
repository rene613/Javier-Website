@extends('base')
@section('css')
@stop
@section('javascript')
@stop
@section('content')

<div id="content">

<!-- Page Content -->
<div class="page-content">


<!-- 960 Container -->
<div class="container">
	<div class="sixteen columns">
	<!-- Texts -->
	<div>
		<h3 style="margin: -10px 0 15px 0;">¿Quiénes somos?</h3>
		<p>Ingeniero Industrial cuyo objetivo es aprender y mejorar constantemente. La actividad se inicia en 2010 en colaboración con el despacho de ingeniería Planifica Urbanismo y Gestión con el que hoy en día se siguen desarrollando diversos trabajos y adquiriendo nuevos conocimientos. 
		La experiencia conseguida a lo largo de estos años me proporciona la confianza necesaria para enfrentarme a los nuevos retos que aparecen en el día a día. 
		</p>

	</div>
	<!-- Texts / End -->
	</div>
</div>
<!-- 960 Container / End -->

<br />

<!-- 960 Container -->
<div class="container">

	<!-- Extras -->
	<div class="ten columns">
			<!-- Headline --><br />
			<h3 class="margin-reset">Misión, visión y valores</h3><br />

			<!-- Accordion -->
			<div class="accordion">

				<!-- Section 1 -->
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon ui-accordion-icon-active"></span>Misión</h3>
				<div>
					<p>Dar respuesta a los clientes mediante un servicio de consultoría personalizada para garantizar que se satisfacen los objetivos con el máximo nivel de calidad.</p>
				</div>

				<!-- Section 2 -->
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>Visión</h3>
				<div>
					<p>Seguir creciendo preservando aquellos valores que son diferenciales. Confianza y buen hacer.</p>
				</div>

				<!-- Section 3 -->
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>Valores</h3>
				<div>
					<p>Confianza y buen hacer. El entorno de trabajo que he vivido me ha permitido adquirir unos valores focalizados hacia el cliente, transmitiendo confianza en primer lugar y demostrando el buen hacer a la entrega de los trabajos.
					<br><br>Coworking o trabajo colaborativo. Disponer de una red de profesionales colaboradores de diferentes especialidades permite dar una respuesta satisfactoria al cliente. La confianza, el compromiso, la comunicación, la coordinación, y la complementariedad son esenciales para lograr los objetivos.
					</p>
				</div>
			</div>
			<!-- Accordion / End -->
	</div>

	<div class="six columns">
		<!-- Headline --><br />
		<h3 class="margin-reset">Clientes</h3><br />
		<div id="skill-bars">
			<div style="cursor:pointer; cursor:hand;" class="skill-bar" onclick="location.href='http://planifica.org';" >			<div class="skill-bar-content" data-percentage="100"></div><span class="skill-title">PLANIFICA URBANISMO Y GESTIÓN</span></div>
			<div style="cursor:pointer; cursor:hand;" class="skill-bar" onclick="location.href='http://inmobiliariacarmona.es';" >	<div class="skill-bar-content" data-percentage="100"></div><span class="skill-title">CARMONA 1952</span></div>
			<div style="cursor:pointer; cursor:hand;" class="skill-bar" onclick="location.href='http://sigogestion.com';" >			<div class="skill-bar-content" data-percentage="100"></div><span class="skill-title">SiGO</span></div>
		</div>

	</div>
	<!-- Extras / End -->

</div>
<!-- 960 Container / End -->


</div>
<!-- Page Content / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

@stop