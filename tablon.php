<?php

	include 'dbdata.php';

	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consulta = "SELECT * FROM ".$frase." WHERE tipo<>'prohibidas' ORDER BY votos DESC, id DESC LIMIT 0,10;";
	$result = mysql_db_query($dbase, $consulta);

print('
<marquee direction="down" scrolldelay="275" onmouseover="this.setAttribute(');
	
	print("'scrollamount', 0, 0);");
	print('" onmouseout="this.setAttribute(');
	print("'scrollamount', 4, 0);");
	print('">');

    $i=1;
//	$item=$HTTP_GET_VARS['ide'];
//	$itemsVotados=$_SESSION['itemsVotados'];
  
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
	
  print('<br><br><br><div align="center"><strong>Las más votadas</div><br>');
	
//print('<div align="center"><img src="imgvotos/7.gif" width="174" height="220" /></div>');include('marquesina.php');

print('</marquee><br>');
mysql_close($ident);

?>