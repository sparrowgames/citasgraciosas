<?php
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$consulta = "SELECT Count(*) AS TotalF FROM ".$frase.";";
				$result = mysql_db_query($dbase, $consulta);
				$lineaF = mysql_fetch_row($result);
				
				$consulta = "SELECT Count(*) AS TotalF FROM ".$tipo.";";
				$result = mysql_db_query($dbase, $consulta);
				$lineaT = mysql_fetch_row($result);				
				
				
				print('<meta name="description" content="Recopilación de citas y frases graciosas. Tenemos '.$lineaF[0].' frases en '.($lineaT[0]-1).' categorías." />');
				mysql_close($ident);
		?>
