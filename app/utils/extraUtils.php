<?php

class extraUtils {

	public static function getServices($category)
	{
		$services = array (
			"projects" => array (
				"1" => array ( "id" => "project1", "title" => "Instalaciones eléctricas en BT", 									"price" => "this stuff costs 100 monneh", 																		"text" => "This is text for Proyectos 111"),
				"2" => array ( "id" => "project2", "title" => "Centros de Transformación", 											"price" => "this stuff costs 100 monneh", 																		"text" => "This is text for Proyectos 222"),
				"3" => array ( "id" => "project3", "title" => "Instalaciones de alumbrado interiores y exteriores", 				"price" => "this stuff costs 100 monneh", 																		"text" => "This is text for Proyectos 333"),
				"4" => array ( "id" => "project4", "title" => "Instalaciones de climatización, ACS, fontanería, saneamiento, etc", 	"price" => "This price is not preset, please ask <a href='contact'>here</a>. <br />Response may take a while.", "text" => "This is text for Proyectos 444")
			),
		
			"licenses" => array (
				"1" => array ( "id" => "license1", "title" => "AAI - Autorizaciones ambientales integradas", 	"price" => "this stuff costs 100 monneh", "text" => "This is text for Licencias 111"),
				"2" => array ( "id" => "license2", "title" => "LA - Licencias de actividad", 					"price" => "this stuff costs 100 monneh", "text" => "This is text for Licencias 222"),
				"3" => array ( "id" => "license3", "title" => "DR - Declaración responsable ambiental", 		"price" => "this stuff costs 100 monneh", "text" => "This is text for Licencias 111"),
				"4" => array ( "id" => "license4", "title" => "AI - Comunicación actividades inocuas", 			"price" => "this stuff costs 100 monneh", "text" => "This is text for Licencias 222")
			),

			"energy" => array (
				"1" => array ( "id" => "energy1", "title" => "Auditorias energéticas", 										"price" => "this stuff costs 100 monneh", "text" => "This is text for Energía 111"),
				"2" => array ( "id" => "energy2", "title" => "Certificados energéticos de edificios de nueva construcción", "price" => "this stuff costs 100 monneh", "text" => "This is text for Energía 222"),
				"3" => array ( "id" => "energy3", "title" => "Certificados energéticos de edificios existentes", 			"price" => "this stuff costs 100 monneh", "text" => "This is text for Energía 333")
			),
			"environmental" => array (
				"1" => array ( "id" => "environmental1", "title" => "Estudios de movilidad urbana sostenible", 	"price" => "this stuff costs 100 monneh", "text" => "This is text for Ingeniería ambiental 111"),
				"2" => array ( "id" => "environmental2", "title" => "Estudios hidrológicos - hidráulicos", 		"price" => "this stuff costs 100 monneh", "text" => "This is text for Ingeniería ambiental 111"),
				"3" => array ( "id" => "environmental3", "title" => "Estudios de impacto ambiental", 			"price" => "this stuff costs 100 monneh", "text" => "This is text for Ingeniería ambiental 111"),
				"4" => array ( "id" => "environmental4", "title" => "Estudio de integración paisajística", 		"price" => "this stuff costs 100 monneh", "text" => "This is text for Ingeniería ambiental 222")
			),
			"civil" => array (
				"1" => array ( "id" => "civil1", "title" => "Proyectos de urbanización", 	"price" => "this stuff costs 100 monneh", "text" => "This is text for Ingeniería civil 111"),
				"2" => array ( "id" => "civil2", "title" => "Proyectos de pequeñas EDARs", 	"price" => "this stuff costs 100 monneh", "text" => "This is text for Ingeniería civil 222")
			),
			"expert" => array (
				"1" => array ( "id" => "expert1", "title" => "Valoración de inmuebles en general", 			"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 111"),
				"2" => array ( "id" => "expert2", "title" => "Valoración de edificios terciarios", 			"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 111"),
				"3" => array ( "id" => "expert3", "title" => "Urbanismo", 									"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 111"),
				"4" => array ( "id" => "expert4", "title" => "Reconstrucción de accidentes", 				"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 111"),
				"5" => array ( "id" => "expert5", "title" => "Propiedad intelectual, patentes y marcas", 	"price" => "this stuff costs 100 monneh", "text" => "This is text for Periciales 222")
			)
		);
		return $services[$category];
	}
}
