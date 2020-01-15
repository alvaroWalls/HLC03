<?php
		
		$conexion = mysqli_connect('172.19.0.1','usuario','1234','db');
		$ganadas = 0;
		$perdidas = 0;
		
		if ($_POST['mail'] != "" && $_POST['nombre'] != "" && $_POST['apellidos'] != "") 
		{
   			$mail = $_POST['mail'];
			$jugadores = "SELECT COUNT(*) AS CONT from Jugador WHERE email = '$mail'";
			$result = mySqli_query($conexion,$jugadores);
			$datos = mysqli_fetch_array($result);
			
			if ($datos['CONT'] == 0)
			{
				$query = "INSERT INTO Jugador (nombre, apellido, fechanac, email, ganadas,perdidas) VALUES (?,?,?,?,?,?)";
				$stmt = mysqli_prepare($conexion, $query) or die (mysqli_error($conexion));
				$stmt -> bind_param('ssssii', $_POST['nombre'],$_POST['apellido'],$_POST['fecha_nac'],$_POST['mail'],$ganadas,$perdidas);
				$stmt -> execute();
				$stmt -> close();
				
			}
			else
			{
				header('location: alta.php?error=2');
			}
	
			
			
			
		}else
		{
			
			header('location: alta.php?error=1');
		}
	?>
