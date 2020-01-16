<?php
	include_once ("vars.php");
	
	$fallos = 0;
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
					<p>Juego del ahorcado</p>
				</header>
				<p>
					<?php
						

						foreach ($codificacion as $a) {
							echo $a . " ";
						}
						?>
					
				</p>
			</article>
			<article>
				<form action = "nuevaLetra.php" method="post" class="form-register">
					<table>
						<tr>
							<td>  <input value="q" name="q" class="button" type="submit"></td>
							<td>  <input value="w" name="w" class="button" type="submit"></td>
							<td>  <input value="e" name="e" class="button" type="submit"></td>
							<td>  <input value="r" name="r" class="button" type="submit"></td>
							<td>  <input value="t" name="t" class="button" type="submit"></td>
							<td>  <input value="y" name="y" class="button" type="submit"></td>
							<td>  <input value="u" name="u" class="button" type="submit"></td>
							<td>  <input value="i" name="i" class="button" type="submit"></td>
							<td>  <input value="o" name="o" class="button" type="submit"></td>
							<td>  <input value="p" name="p" class="button" type="submit"></td>
						</tr>

						<tr>
							<td>  <input value="a" name="a" class="button" type="submit"></td>
							<td>  <input value="s" name="s" class="button" type="submit"></td>
							<td>  <input value="d" name="d" class="button" type="submit"></td>
							<td>  <input value="f" name="f" class="button" type="submit"></td>
							<td>  <input value="g" name="g" class="button" type="submit"></td>
							<td>  <input value="h" name="h" class="button" type="submit"></td>
							<td>  <input value="j" name="j" class="button" type="submit"></td>
							<td>  <input value="k" name="k" class="button" type="submit"></td>
							<td>  <input value="l" name="l" class="button" type="submit"></td>
							<td>  <input value="ñ" name="ñ" class="button" type="submit"></td>
						</tr>


						<tr>
							<td>  <input value="z" name="z" class="button" type="submit"></td>
							<td>  <input value="x" name="x" class="button" type="submit"></td>
							<td>  <input value="c" name="c" class="button" type="submit"></td>
							<td>  <input value="v" name="v" class="button" type="submit"></td>
							<td>  <input value="b" name="b" class="button" type="submit"></td>
							<td>  <input value="n" name="n" class="button" type="submit"></td>
							<td>  <input value="m" name="m" class="button" type="submit"></td>
						</tr>
					</table>
				</form>
			</article>
		</section>

		

	</body>

</html>
