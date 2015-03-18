<?php

class extraUtils {

	public static function getServices($category)
	{
		$services = array (
			"projects" => array (
				"1" => array ( "id" => "project1", "title" => "Instalaciones eléctricas en BT", 									"price" => "this stuff costs 100 monneh", 																		"text" => "Diseño, redacción y tramitación de proyectos."),
				"2" => array ( "id" => "project2", "title" => "Centros de Transformación", 											"price" => "this stuff costs 100 monneh", 																		"text" => "Diseño, redacción y tramitación de proyectos."),
				"3" => array ( "id" => "project3", "title" => "Instalaciones de alumbrado interiores y exteriores", 				"price" => "this stuff costs 100 monneh", 																		"text" => "Diseño, redacción y tramitación de proyectos."),
				"4" => array ( "id" => "project4", "title" => "Instalaciones de climatización, ACS, fontanería, saneamiento, etc", 	"price" => "This price is not preset, please ask <a href='contact'>here</a>. <br />Response may take a while.", "text" => "Diseño, redacción y tramitación de proyectos.")
			),
		
			"licenses" => array (
				"1" => array ( "id" => "license1", "title" => "AAI - Autorizaciones ambientales integradas", 	"price" => "this stuff costs 100 monneh", "text" => "Redacción y tramitación de proyectos que se rigen mediante la Ley 6/2014 de la Generalitat, de Prevención, Calidad y Control Ambiental de Actividades en la Comunitat Valenciana."),
				"2" => array ( "id" => "license2", "title" => "LA - Licencias de actividad", 					"price" => "this stuff costs 100 monneh", "text" => "Redacción y tramitación de proyectos que se rigen mediante la Ley 6/2014 de la Generalitat, de Prevención, Calidad y Control Ambiental de Actividades en la Comunitat Valenciana."),
				"3" => array ( "id" => "license3", "title" => "DR - Declaración responsable ambiental", 		"price" => "this stuff costs 100 monneh", "text" => "Redacción y tramitación de las actividades que se rigen por la Ley 14/2010 de Espectáculos Públicos, Actividades Recreativas y Establecimientos Públicos."),
				"4" => array ( "id" => "license4", "title" => "AI - Comunicación actividades inocuas", 			"price" => "this stuff costs 100 monneh", "text" => "Redacción y tramitación de proyectos que se rigen mediante la Ley 6/2014 de la Generalitat, de Prevención, Calidad y Control Ambiental de Actividades en la Comunitat Valenciana.")
			),

			"energy" => array (
				"1" => array ( "id" => "energy1", "title" => "Auditorias energéticas", 										"price" => "this stuff costs 100 monneh", "text" => "Realización de auditorías energéticas de edificios residenciales o terciarios. "),
				"2" => array ( "id" => "energy2", "title" => "Certificados energéticos de edificios de nueva construcción", "price" => "this stuff costs 100 monneh", "text" => "Realización de cálculos justificativos para el cumplimiento de la normativa mediante el software reconocido. (Lider, Lider-Calener, Calener Vyp y Calener GT)."),
				"3" => array ( "id" => "energy3", "title" => "Certificados energéticos de edificios existentes", 			"price" => "this stuff costs 100 monneh", "text" => "Realización de cálculos justificativos para el cumplimiento de la normativa mediante el software reconocido. (CE3X).")
			),
			"environmental" => array (
				"1" => array ( "id" => "environmental1", "title" => "Estudios de movilidad urbana sostenible", 	"price" => "this stuff costs 100 monneh", "text" => "Realización de estudios mediante la utilización de la herramienta AIMSUN para las simulaciones del estado del tráfico."),
				"2" => array ( "id" => "environmental2", "title" => "Estudios hidrológicos - hidráulicos", 		"price" => "this stuff costs 100 monneh", "text" => "Realización de estudios tanto en 1D como 2D. Herramientas de cálculo SWMN, HEC-RAS."),
				"3" => array ( "id" => "environmental3", "title" => "Estudios de impacto ambiental", 			"price" => "this stuff costs 100 monneh", "text" => "This is text for Ingeniería ambiental 111"),
				"4" => array ( "id" => "environmental4", "title" => "Estudio de integración paisajística", 		"price" => "this stuff costs 100 monneh", "text" => "This is text for Ingeniería ambiental 222")
			),
			"civil" => array (
				"1" => array ( "id" => "civil1", "title" => "Proyectos de urbanización", 	"price" => "this stuff costs 100 monneh", "text" => "Realización y tramitación de proyectos de urbanización. "),
				"2" => array ( "id" => "civil2", "title" => "Proyectos de pequeñas EDARs", 	"price" => "this stuff costs 100 monneh", "text" => "Diseño y redacción de proyectos de pequeñas depuradoras de agua potable.")
			),
			"expert" => array (
				"1" => array ( "id" => "expert1", "title" => "Urbanismo", 									"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 111"),
				"2" => array ( "id" => "expert2", "title" => "Valoración de inmuebles en general", 			"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 111"),
				"3" => array ( "id" => "expert3", "title" => "Valoración de edificios terciarios", 			"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 111"),
				"4" => array ( "id" => "expert4", "title" => "Reconstrucción de accidentes", 				"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 111"),
				"5" => array ( "id" => "expert5", "title" => "Propiedad intelectual, patentes y marcas", 	"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 222")
			)
		);
		return $services[$category];
	}
}
