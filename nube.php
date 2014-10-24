<?php
	include 'dbdata.php';
	
	$identnube = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consultanube = "select * from ".$etiquetas." ORDER BY etiqueta ASC;";
	$resultnube = mysql_db_query($dbase, $consultanube);
	
	while($lineanube = mysql_fetch_row($resultnube)){
			
		print('<a href="buscatag?t='.$lineanube[0].'" class="link2c3">'.$lineanube[1].' </a>');
	}

?>