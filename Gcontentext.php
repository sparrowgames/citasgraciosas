<?php
	session_start();
	session_register('itemsVotados');
	session_register('itemsEncuesta');
	
	session_register('tiponavegador');
	$_SESSION['tiponavegador'] = false;
	
//	session_register('ide');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>citasgraciosas.com</title>
<style type="text/css">
<!--
.Estilo2 {font-size: x-small;font-style: italic;}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: xx-small}

-->
</style>

</head>

<?php

	include('dbfechas.php');
	include 'dbdata.php';
	
	$pag = $HTTP_GET_VARS['cat'];
	$pag = $HTTP_GET_VARS['cat'];
	$pag = $HTTP_GET_VARS['cat'];
	
	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);

	$consulta = "SELECT * FROM frases ORDER BY id DESC;";
	$result = mysql_db_query($dbase, $consulta);
	$MAX = mysql_fetch_row($result);
	$numero = rand(1,$MAX[0]);
	
	$iden = $HTTP_GET_VARS["ide"];
	if(!$iden){
		$iden = rand(1,$MAX[0]);

	}
	if(!$iden){
		print('<font color="#FF0000"><strong>SE HA PRODUCIDO UN ERROR...</strong></font>');
	}else{
		

		$consulta = "SELECT * FROM ".$frase." WHERE id=".$iden.";";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);

	/*	$lineaSIG = mysql_fetch_row($result);
		
		$consulta = "SELECT * FROM ".$frase." WHERE id=".$iden." ORDER BY id DESC;";
		$result = mysql_db_query($dbase, $consulta);
		$lineaANT = mysql_fetch_row($result);
		$lineaANT = mysql_fetch_row($result);*/
		
		$cRAN = "SELECT * FROM ".$frase." ORDER BY votos DESC,fecha DESC;";
		$resRAN = mysql_db_query($dbase, $cRAN);
		$rankingG=0;
		do{
			$lR = mysql_fetch_row($resRAN);
			$rankingG++;
		}while($lR[0] != $linea[0]);
		
		$cRAN2 = "SELECT * FROM ".$frase." WHERE tipo='".$linea[4]."' ORDER BY votos DESC, fecha DESC;";
		$resRAN2 = mysql_db_query($dbase, $cRAN2);
		$ranking=0;
		do{
			$lR2 = mysql_fetch_row($resRAN2);
			$ranking++;
		}while($lR2[0] != $linea[0]);

	$numero = rand(1,$MAX[0]);
	
	$tempide = $linea[0];
// botones de navegación

print('<table width="100%" border="0" align="center">
  <tr>
    <td width="25%"><div align="left">');
	
	if(($tempide-1) >= 1){
		print('<a href="movil.php?ide='.($tempide-1).'"><img src="imgmanos/ant.png" width="20" height="20" /></a>');
	}else{
		print('<img src="imgmanos/antno.png" width="20" height="20" />');
	}
	
	print('</div></td>
    <td width="25%"><div align="center">');
	
	$consulta = "SELECT * FROM aux;";
	$result = mysql_db_query($dbase, $consulta);
	$lineaA = mysql_fetch_row($result);
	
	print('<a href="movil.php?ide='.$lineaA[2].'"><img src="imgmanos/cal.png" /></a>');

	print('</div></td><td width="25%"><div align="center">');
	//	$imagen= "imgmanos/".rand(1,9).".png";
		print('<a href="movil.php?ide='.$numero.'"><img src="imgmanos/random.png" /></a>');
	
	
	print('</div></td>');

	print('<td width="25%"><div align="right">');
	
	
	if(($tempide +1) <= $MAX[0]){
		print('<a href="movil.php?ide='.($tempide+1).'"><img src="imgmanos/sig.png" width="20" height="20" /></a>');
	}else{
		print('<img src="imgmanos/signo.png" width="20" height="20" />');
	}
	
	print('</div></td>
  </tr>
</table><br>');

//--------------------------------------------------------------------------------------------------------------
// Option de categorias ----------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------

print('<table width="100%" border="0" align="center">
  <tr>
    <td width="25%"><div align="left">
      	  <div align="center">
		   <select  onchange="window.location.href=this.value" >
		    <option value="">Selecciona una...</option>');

			$consultaCAT = "SELECT * FROM ".$tipo." ORDER BY tipo ASC";
			$resultCAT = mysql_db_query($dbase, $consultaCAT);

		while($lineaCAT = mysql_fetch_row($resultCAT)){
 					
			if($lineaCAT[1]!="prohibidas")
				print('<option value="movilcat.php?cat='.$lineaCAT[1].'">'.$lineaCAT[1].'</option>');
										
		}
			
				print('</select>
	      </div>

      </div></td>
  </tr>
</table>');

//--------------------------------------------------------------------------------------------------------------

		print('<table width="90%" border="0" align="center">
  <tr>
    <td><table width="90%" border="0">
      <tr>
        <td><div align="left">');
		
//		print('<strong>Fecha de inserci&oacute;n: </strong><font size="2">'.$linea[3].'</font>');
//
//
//



		print('
		</div></td>
        <td>'); /*<div align="left">');
		
		print("<strong>Votos: </strong>".$linea[1]);
		
		</div>*/print('</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><hr><table border="0">
  <tr>
    <td align="left"><strong>Frase:</strong></td>
  </tr>
  <tr>
    <td align="left">');
	print('<font size="2">');
	print($linea[2]);
	print('<font>');
	print('</td>
  </tr>
</table>');

// Votaciones -------------------------------------------------	
					
					$itemsVotados=$_SESSION['itemsVotados'];
					$cita=$linea[0];
					
			
					if($itemsVotados[$cita]!=2){
					
					print('<br>
					<table width="90%" border="1" align="center" bordercolor="#555555">
  <tr bordercolor="#FFFFFF">
    <td width="45%" align="left" bordercolor="#FFFFFF"><font color="#555555"><strong>Votar</strong></font></td>
    <td width="45%"><div align="right" bordercolor="#FFFFFF"><a href="votos.php?ide='.$linea[0].'&cat=movil&tp=2"><img src="/images/up.gif" width="20" height="20" border="0" /></a><font color="#0000FF"><strong> ('.$linea[1].') </strong></font><a href="votos.php?ide='.$linea[0].'&cat=movil&tp=1"><img src="/images/dw.gif" width="20" height="20" border="0" /></a></div></td>
  </tr>
</table>');
					
					}else{
					
						print('<table width="90%" border="1" align="center" bordercolor="#555555">
  <tr bordercolor="#FFFFFF">
    <td width="45%" align="left" bordercolor="#FFFFFF"><font color="#555555"><strong>Votar</strong></font></td>
    <td width="45%"><div align="right" bordercolor="#FFFFFF"><font color="#0000FF"><strong> ('.$linea[1].') </strong></font><img src="/images/no.gif" width="20" height="20" border="0" /></div></td>
  </tr>
</table>'); 

					
					}
// BARRA + INFO ---------------------------------------------------------------------------------------------------	

print('<br><table width="100%" border="0" align="center">
  <tr>
    <td width="3%">');
	
	print('<a href="movil.php?ide='.$linea[0].'"><img src="images/info.gif" width="20" height="20" alt="+ Info"/>');
	
	/*<a href="'.$PHP_SELF.'"><img src="images/info.gif" width="20" height="20" alt="+ Info" onClick"onClick="');
	
	print("javascript:location.href='infosino.php'");
	print('"/></a>');*/
	
	print('</td>
    <td width="97%"><hr /></td>
  </tr>
</table>');
		

// -----------------------------------------------------------------------------------------------------------------	
//if($_SESSION['info']){
print('</td>
  </tr>
  <tr>
    <td align="center">');
		print('<strong>Inserci&oacute;n: </strong>'.cambiaf_a_normal($linea[3]));
		print("<p><strong>Categor&iacute;a: </strong>".$linea[4]."</p>");

	print('</td>
  </tr>
  <tr>
    <td align="center">');
	
	print("<strong>Autor: </strong>".$linea[5]);
	print('</td>
  </tr><tr>
    <td><table width="100%" border="0">
  <tr>
    <td align="center"> <strong>Ranking: </strong>');
	
	switch($ranking){
		case 1:	print('<span class="Estilo11">'.$ranking.'</span>');
				break;
		case 2:	print('<span class="Estilo12">'.$ranking.'</span>');
				break;
		case 3:	print('<span class="Estilo13">'.$ranking.'</span>');
				break;
		default: print($ranking);
	}
	print('<br><strong>Ranking global: </strong>');
	switch($rankingG){
		case 1:	print('<span class="Estilo11">'.$rankingG.'</span>');
				break;
		case 2:	print('<span class="Estilo12">'.$rankingG.'</span>');
				break;
		case 3:	print('<span class="Estilo13">'.$rankingG.'</span>');
				break;
		default: print($rankingG);
	}
//}//fin if info

	print('</td>
  </tr>
  
</table>');
	print('
	<hr><br></td>
  </tr>
</table>');
/*<br>
<div align="center"><div id="fb-root"></div><script src="http://connect.facebook.net/es_ES/all.js#appId=133301816766445&amp;xfbml=1"></script><fb:like href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$linea[0].'" send="true" layout="button_count" width="100%" show_faces="false" font=""></fb:like><br><br><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.citasgraciosas.com/mostrarfrase.php?ide='.$linea[0].'" data-text="'.$linea[2].'" data-count="horizontal" data-via="citasgraciosas" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
<div id="fb-root"></div><script src="http://connect.facebook.net/es_ES/all.js#appId=133301816766445&amp;xfbml=1"></script><fb:like href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$linea[0].'" send="true" width="100%" show_faces="true" font="arial"></fb:like>*/


	}
	

mysql_close($ident);
?>
<div align="center"><strong><span class="Estilo4">citasgraciosas.com 2005-<?php echo date('Y') ?> <br /> Juanuxx y Alex. <br />
		          Powered by: </span><span class="icons Estilo4"><a href="http://www.champinet.com/" target="_blank"><font color="#9900FF">CHAMPINET</font></a></span><span class="icons "><span class="Estilo11 Estilo11"><br />
		          <br />
<a href="http://webdesing.champinet.com/cgi-bin/awstats.pl?config=citasgraciosas" target="_blank"><img src="images/stat.gif" width="20" height="20" border="0" /></a> <span class="Estilo3">-</span></span></span></strong> <strong> <a href="/index.php"><img src="images/pc.png" width="20" height="20" border="0" /></a></strong></div>
</span>
</body>
</html>
