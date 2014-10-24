<?php
print('<meta name="keywords" content="citas graciosas, citasgraciosas, frases graciosas, ');
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = "SELECT * FROM ".$etiquetas.";";
				$result = mysql_db_query($dbase, $consulta);
				while($linea = mysql_fetch_row($result)){
					print($linea[1].', ');
				}
print('recopilacion de citas y frases graciosas" />');
?>
