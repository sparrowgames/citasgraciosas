<?php

	include 'dbdata.php';

	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consulta = "SELECT * FROM ".$frase." WHERE tipo<>'prohibidas' ORDER BY fecha DESC, id DESC LIMIT 0,10;";

	$result = mysql_db_query($dbase, $consulta);


    $i=1;
	$item=$HTTP_GET_VARS['ide'];
	$itemsVotados=$_SESSION['itemsVotados'];
    print('<br><div align="center"><strong>Últimas 10 frases añadidas</div><br><br><br>');
	while($linea = mysql_fetch_row($result)){
	$cita=$linea[0];
	if($itemsVotados[$cita]!=2){		
			if($i<10){
				print("<font color='#000000'>0".$i." </font>");
				print('<a href="votos.php?ide='.$linea[0].'&cat=indice&tp=2">');
				print("<font color='#555555' size='1px'><strong>".$linea[2]."</strong></font></a><br><br><br>");
			}else{
				print("<font color='#000000'>".$i." </font>");
				print('<a href="votos.php?ide='.$linea[0].'&cat=indice&tp=2">');
				print("<font color='#555555' size='1px'><strong>".$linea[2]."</strong></font></a><br><br><br>");
			}
		}else{
			if($i<10){
				print("<font color='#555555'>0".$i." </font>");
				print('<a href="mostrarfrase.php?ide='.$linea[0].'">');
				print("<font color='#999999' size='1px'><strong>".$linea[2]."</strong></font></a><br><br><br>");
			}else{
				print("<font color='#555555'>".$i." </font>");
				print('<a href="mostrarfrase.php?ide='.$linea[0].'">');
				print("<font color='#999999' size='1px'><strong>".$linea[2]."</strong></font></a><br><br><br>");
			}
		}
		$i++;	
	}	
	
print('<br>');
mysql_close($ident);

?>