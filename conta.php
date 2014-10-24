<?php
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$consulta = "SELECT Count(*) AS TotalF FROM ".$frase.";";
				$result = mysql_db_query($dbase, $consulta);
				$lineaF = mysql_fetch_row($result);
				
				$consulta = "SELECT Count(*) AS TotalF FROM ".$tipo.";";
				$result = mysql_db_query($dbase, $consulta);
				$lineaT = mysql_fetch_row($result);				
				
				print('Tenemos <strong>'.$lineaF[0].'</strong> frases<br>en <strong>'.($lineaT[0]-1).'</strong> categor&iacute;as.');
				mysql_close($ident);
		?>
