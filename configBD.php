<?php
	$servidorBD = "198.91.81.4";
	$usuarioBD = "galardon_2018";
	$contrasenaBD = "proyectoweb";
	$nombreBD = "galardon_galardonados";
	$link = mysql_connect($servidorBD, $usuarioBD, $contrasenaBD,$nombreBD);
	mysql_select_db($nombreBD, $link);
	mysql_query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	$result = mysql_query("SELECT G.RFC, NOMBRE, U.UNIDAD_ACADEMICA, P.GALARDON FROM Galardonado G, Unidad_Academica U, Galardon P  WHERE G.UNIDAD_ACADEMICA = U.ID  AND G.Galardon = P.ID ", $link);
	echo"RFC: ".mysql_result($result, 1, "rfc")."<br>";
	mysql_free_result($result);
	mysql_close($link);	
?>