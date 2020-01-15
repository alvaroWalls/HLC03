<?php
	$conexion = mysqli_connect('172.19.0.1','usuario','1234','db');
	
	if($_GET['error']==3)
	{
		echo "<script>alert('Jugador registrado con exito')</script>";	
	}
?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<meta name="Juego_Con_Php" content="Página índice"/>
		<meta name="keywords" content="html,css,html5,css3,Juego, php, mySql"/>
		<meta name="description" content="Juego, php, mySql"/>
		<title>El ahorcado</title>
		<!--<link rel="shortcut icon" href="imagenes/icono.png" type="imagen/png"/>-->
		<link rel="stylesheet" href="css/index.css"/>
		
	</head>
	<body>
		<header id = "Cabecera">
			<hgroup>
				<h1>Juego del ahorcado</h1>
			</hgroup>
		</header>
		<nav id ="Menu">
			<ul id = "Principal">
				<li><a href="index.php">INICIO</a></li>
				<li><a href="alta.php">ALTA JUGADOR</a></li>
				<li><a href="resultado.php">RESULTADOS</a></li>
			</ul>
		</nav>

		
		<nav id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<ul>
				<li><a href="index.php">INICIO</a></li>
				<li><a href="alta.php">ALTA JUGADOR</a></li>
				<li><a href="resultado.php">RESULTADOS</a></li>
			</ul>
		</nav>
		<span id="botonMenuLateral" onclick="openNav()">&#9776; Menu</span>
		
		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			}
			
			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			}
		</script>	


		<section>

			<article>
				<header>
					<p>-Lista de jugadores disponibles-</p>
				</header>
				<table>
					<tr>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>EDAD</th>
					</tr>
					<?php
						$jugadores = "SELECT * from Jugador ORDER BY apellido";
						$result = mySqli_query($conexion,$jugadores);
						
						while($datos = mysqli_fetch_array($result)){
							$fecha = time() - strtotime($datos['fechanac']);
							$edad = floor($fecha / 31556926);
					?>
					<tr>
						<td><?php echo $datos['nombre'] ?></td>
						<td><?php echo $datos['apellido'] ?></td>
						<td><?php echo $edad ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</article>

		</section>

		

	</body>

</html>
