<?php
	session_start();

	$letra = "";
	$cont = 0;
	if($_GET['letra'] != "")
	{
		$letra = $_GET['letra'];
		
		for($i = 0; $i < count($_SESSION["palabra"]); $i++)
		{
			if(($_SESSION["palabra"])[$i] == $letra)
				{
					if(($_SESSION["codificacion"])[$i] == '_')
					{	($_SESSION["codificacion"])[$i] = $letra;
						$cont++;
					}
				}
		}

		/*foreach ($_SESSION["codificacion"] as $a) {
							echo $a . " ";
						}*/


		if($cont==0)
		{
			$_SESSION["fallos"] = $_SESSION["fallos"] + 1;
		}
		else
		{
			$_SESSION["acertadas"] = $_SESSION["acertadas"] + $cont;
			$cont=0;
		}
		
		if($_SESSION["fallos"] !=6)
		{
			$a = $_SESSION["acertadas"];
			$c = count($_SESSION["palabra"]);
			
			if ($_SESSION["acertadas"] == count($_SESSION["palabra"]))
				{
					
					$_SESSION['ganadas'] = $_SESSION['ganadas'] +1;
					$conexion = mysqli_connect('172.19.0.1','usuario','1234','db');

					$sql = "UPDATE Jugador SET ganadas = ".$_SESSION['ganadas'] . " WHERE email = '".$_SESSION['mail']."'";
					$conexion -> query($sql);
					$conexion -> close();
					header('location: resultado.php');
				}else
					header('location: juego.php?jugando=1');
		}
		else
		{
			$_SESSION['perdidas'] = $_SESSION['perdidas'] +1;
			$conexion = mysqli_connect('172.19.0.1','usuario','1234','db');

			$sql = "UPDATE Jugador SET perdidas = ".$_SESSION['perdidas'] . " WHERE email = '".$_SESSION['mail']."'";
			$conexion -> query($sql);
			$conexion -> close();
			header('location: resultado.php');
		}
	
	}
	

	
?>
