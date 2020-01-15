<?php
	
	//session_start();

	if($_GET['error']==1)
	{
		echo "<script>alert('Error: Rellena todos los datos')</script>";
	}
	else if($_GET['error']==2)
	{
		echo "<script>alert('Error: Email ya registrado')</script>";	
	}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
		<meta charset="utf-8"/>
		<meta name="Juego_Con_Php" content="Página índice"/>
		<meta name="keywords" content="html,css,html5,css3,Juego, php, mySql"/>
		<meta name="description" content="Juego, php, mySql"/>
		<title>El ahorcado</title>
		<!--<link rel="shortcut icon" href="imagenes/icono.png" type="imagen/png"/>-->
		<link rel="stylesheet" href="css/index.css"/>
	</head>
	<body onload="bienvenida()">
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
		
		<form action = "insertado.php" method="post" class="form-register" onSubmit="return validar();">
        <fieldset id="datos">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Fecha de nacimiento</td>
                </tr>
                <tr>
                    <td><input name="nombre" type="text" id="nombre" /></td>
                    <td><input name="apellido" type="text" id="apellido" /></td>
                    <td><input name="fecha_nac" type="date" id="fecha" /></td>
                </tr>
                        
                <tr>
                    <td colspan="2">Dirección de email</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input name="mail" type="text" size="50" id="mail"/>
                    </td>
                   
                </tr>                
            </table>
        </fieldset>
        
		<p id="mensajeE"><?php echo $_GET['mensaje'] ?></p>
        <p>
            <input id ="boton" class="button" type="submit" value="Dar de alta"/>
        </p>
    </form>

	

	</body>

</html>
