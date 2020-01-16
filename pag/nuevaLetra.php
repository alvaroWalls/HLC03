<?php
		include "vars.php";
		$conexion = mysqli_connect('172.18.0.1','usuario','1234','db');

		if ($_POST['q'] == true) {$letra="q";
		}elseif($_POST['w'] == true){$letra="w";
		}elseif($_POST['e'] == true){$letra="e";
		}elseif($_POST['r'] == true){$letra="r";
		}elseif($_POST['t'] == true){$letra="t";
		}elseif($_POST['y'] == true){$letra="y";
		}elseif($_POST['u'] == true){$letra="u";
		}elseif($_POST['i'] == true){$letra="i";
		}elseif($_POST['o'] == true){$letra="o";
		}elseif($_POST['p'] == true){$letra="p";
		}elseif($_POST['a'] == true){$letra="a";
		}elseif($_POST['s'] == true){$letra="s";
		}elseif($_POST['d'] == true){$letra="d";
		}elseif($_POST['f'] == true){$letra="f";
		}elseif($_POST['g'] == true){$letra="g";
		}elseif($_POST['h'] == true){$letra="h";
		}elseif($_POST['j'] == true){$letra="j";
		}elseif($_POST['k'] == true){$letra="k";
		}elseif($_POST['l'] == true){$letra="l";
		}elseif($_POST['ñ'] == true){$letra="ñ";
		}elseif($_POST['z'] == true){$letra="z";
		}elseif($_POST['x'] == true){$letra="x";
		}elseif($_POST['c'] == true){$letra="c";
		}elseif($_POST['v'] == true){$letra="v";
		}elseif($_POST['b'] == true){$letra="b";
		}elseif($_POST['n'] == true){$letra="n";
		}elseif($_POST['m'] == true){$letra="m";
		}
	

		header('location: comprobarLetra.php?letra=' . $letra);
						

	?>
