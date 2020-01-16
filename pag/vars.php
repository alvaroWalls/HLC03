<?php
	$conexion = mysqli_connect('172.18.0.1','usuario','1234','db');

	$letra = "";
	$cont = 0;
	$codificacion = array();
	$palabra = array();

	echo $_SESSION["rellenar"];
	if ($_SESSION["rellenar"] == 0){
		$numero = rand(1, 5);
		$query = "SELECT nombre from palabra where id = '$numero'";
		$result = mySqli_query($conexion,$query);						
		$datos = mysqli_fetch_array($result);			

		for($i = 0; $i < strlen($datos['nombre']); $i++)
		{
			array_push($codificacion, "_" );
			array_push($palabra, ($datos['nombre'])[$i]);
		}
		
		$_SESSION["palabra"] = $palabra;
		$_SESSION["codificacion"] = $codificacion;
		$_SESSION["rellenar"] = 1;
	}
	

	
?>
