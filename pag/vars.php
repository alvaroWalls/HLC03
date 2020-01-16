<?php
	$conexion = mysqli_connect('172.19.0.1','usuario','1234','db');

	$codificacion = array();
	$palabra = array();
	$letra = "";
	$rellenar = true;

	if($_GET['letra'] != "")
	{
		
		for($i = 0; $i < count($palabra); $i++)
		{
			echo ".";
			if($palabra[$i] == $letra)
				echo ",";
				//$codificacion[i] = $letra;
		}

		//header('location: juego.php');
	}else
	{
		$numero = rand(1, 5);
		$query = "SELECT nombre from palabra where id = '$numero'";
		$result = mySqli_query($conexion,$query);						
		$datos = mysqli_fetch_array($result);			

		for($i = 0; $i < strlen($datos['nombre']); $i++)
		{
			array_push($codificacion, "_" );
			array_push($palabra, ($datos['nombre'])[$i]);
		}
	}

	

	
?>
