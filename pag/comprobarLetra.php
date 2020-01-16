<?php
	include "vars.php";

	$letra = "";
	$cont = 0;
	$codificacion = array();
	if($_GET['letra'] != "")
	{
		$letra = $_GET['letra'];
		for($i = 0; $i < count($_SESSION["palabra"]); $i++)
		{
			if(($_SESSION["palabra"])[$i] == $letra)
				{
					$codificacion[$i] = $letra;
					$cont++;
				}
			else
				$codificacion[$i] = "_";
		}

		/*foreach ($_SESSION["codificacion"] = array(); as $a) {
							echo $a . " ";
						}*/

		if($cont==0)
			$_SESSION["fallos"]++;
		else
			$cont=0;

		if($_SESSION["fallos"] == 6)
			$_SESSION["rellenar"] = 0;
		else
			$_SESSION["rellenar"] = 1;
		
		header('location: juego.php');
	}

	

	
?>
