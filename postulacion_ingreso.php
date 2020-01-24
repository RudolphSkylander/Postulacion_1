<?php 
	// Obviando el origen de los datos solo pondre el procesamiento de datos en el cual se cuentan cuantos pasajeros usan las clases "first", "business" y "economy"
	// Suponiendo tambien que la lista esta ordenada en un array con los datos del pasajero en los cuales esta su clase de vuelo.

	//Ejemplo de posible listado

	$pasajeros = array (
		"11111111-1" => array(
			"nombres"    => "nombres",
			"apellidos"   => "apellidos",
			"clase"   => "first"
		),
		"22222222-2" => array(
			"nombre"    => "nombres",
			"apellido"   => "apellidos",
			"clase"   => "business"
		),
		"33333333-3" => array(
			"nombres"    => "nombres",
			"apellidos"   => "apellidos",
			"clase"   => "business"
		),
		"44444444-4" => array(
			"nombres"    => "nombres",
			"apellidos"   => "apellidos",
			"clase"   => "economy"
		),
		"55555555-5" => array(
			"nombres"    => "nombres",
			"apellidos"   => "apellidos",
			"clase"   => "economy"
		),
		"66666666-6" => array(
			"nombres"    => "nombres",
			"apellidos"   => "apellidos",
			"clase"   => "economy"
		)
	);

	//Funcion que cuenta la cantidad de pasajeros que utiliza cada clase y muestra por pantalla el resultado

	function procesar($pasajeros)
	{
		$first = array_count_values(array_column($pasajeros, 'clase'))["first"];
		$business = array_count_values(array_column($pasajeros, 'clase'))["business"];
		$economy = array_count_values(array_column($pasajeros, 'clase'))["economy"];

		//Se muestra el output mediante un echo debido a la falta de interfaz

		echo "La cantidad de pasajeros viajando en clase First es: " . $first . "<br>La cantidad de pasajeros viajando en clase Business es: " . $business . "<br>La cantidad de pasajeros viajando en clase Economy es: " . $economy;
	}

	//La llamada a la funcion para que se ejecute

	procesar($pasajeros);
 ?>
