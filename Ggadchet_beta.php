<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Gadget Google citasgraciosas.com</title>
<style type="text/css">
<!--
body {
	background-image: url(images/bg.gif);
}
body,td,th {
	font-size: small;
	color: #000000;
}
a {
	font-size: x-small;
	color: #0000FF;
}
a:visited {
	color: #0000FF;
	text-decoration: none;
}
a:hover {
	color: #0000FF;
	text-decoration: underline;
}
a:active {
	color: #0000FF;
	text-decoration: none;
}
.Estilo1 {font-size: xx-small}
a:link {
	text-decoration: none;
}
.Estilo2 {
	font-size: x-small;
	font-style: italic;
	font-weight: bold;
}
-->
</style></head>

<body>
<?php
$opcion=$HTTP_GET_VARS['opc'];
if(!$opcion){$opcion=1;}
if($opcion!=2){
print('<div align="center"><a href="http://www.citasgraciosas.com/" target="_blank"><img src="images/Gtitulo.png" alt="citasgraciosas.com"  width="249" height="42" border="0" /></a></div>');
}

?>

  <table width="100%" border="1" align="center" bordercolor="#FFFFFF">
    <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
      <td width="33%" onmouseover="this.style.color='white'; this.style.background='#3399FF'; this.style.cursor='pointer'"
     onmouseout="this.style.color='#555555'; this.style.background='white';" onclick="document.location='http://www.citasgraciosas.com/Ggadchet.php?opc=1'" align="center"><span class="Estilo2">FRASE DEL DIA</span></td>
   
      <td width="33%" onmouseover="this.style.color='white'; this.style.background='#3399FF'; this.style.cursor='pointer'"
     onmouseout="this.style.color='#555555'; this.style.background='white';" onclick="document.location='http://www.citasgraciosas.com/Ggadchet.php?opc=2'" align="center"><span class="Estilo2">ÚLTIMAS AÑADIDAS</span></td>
   
      <td width="33%" onmouseover="this.style.color='white'; this.style.background='#3399FF'; this.style.cursor='pointer'"
     onmouseout="this.style.color='#555555'; this.style.background='white';" onclick="document.location='http://www.citasgraciosas.com/Ggadchet.php?opc=3'" align="center"><span class="Estilo2">FRASE AL AZAR</span></td>
    </tr>
</table>
  <table width="100%" border="1" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr bordercolor="#FFFFFF">
      <td width="100%"><div align="center">
        <?php

	

$opcion=$HTTP_GET_VARS['opc'];
if(!$opcion){$opcion=1;}

if($opcion==3){
print('<font color="#990000"><strong>FRASE AL AZAR:</strong></font><br>');
include 'dbdata.php';
	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consulta = "SELECT * FROM frases ORDER BY id DESC;";
	$result = mysql_db_query($dbase, $consulta);
	$MAX = mysql_fetch_row($result);
	
	$numero = rand(1,$MAX[0]);
	
	$consulta = "SELECT * FROM frases WHERE id='".$numero."';";
	$result = mysql_db_query($dbase, $consulta);
	$lineaF = mysql_fetch_row($result);

	print('<br><table align="center"><tr><td>');
print('<div align="center"><strong>'.$lineaF[2].'</strong>');
							
							if($lineaF[5] != "Anónimo"){
								print(' <br>('.$lineaF[5].')');
							}
							
							print('</font></div></td>
                        </tr>
                             </table></br>');
							
					 if($itemsVotados[$cita]!=2){	
						  
						  print('<p><input type="image" src="images/votar.gif" onClick="');
						  print("javascript:window.open('Gvotos.php?ide=".$lineaF[0]."&cat=indice&tp=2', 'noimporta', 'width=550, height=300, scrollbars=NO')");
print('"></p>');
                     } 
						  
						/*  <div align="center"><a href="Gvotos.php?ide='.$lineaF[0].'&cat=indice&tp=2" target="_blank"><font color="#0000FF" size="1">Si te gusta, vota por ella!</font></a></div></td>*/
 

}

if($opcion==2){
	
	include 'dbdata.php';

	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consulta = "SELECT * FROM ".$frase." WHERE tipo<>'prohibidas' ORDER BY fecha DESC, id DESC LIMIT 0,10;";
	$result = mysql_db_query($dbase, $consulta);

print('<table width="100%" border="1" background="/images/fnd10.png"><tr>
    <td>
<marquee direction="down" scrolldelay="200" onmouseover="this.setAttribute(');
	
	print("'scrollamount', 0, 0);");
	print('" onmouseout="this.setAttribute(');
	print("'scrollamount', 4, 0);");
	print('">');

    $i=1;
	$item=$HTTP_GET_VARS['ide'];
	$itemsVotados=$_SESSION['itemsVotados'];

	while($linea = mysql_fetch_row($result)){
		$cita=$linea[0];
		if($itemsVotados[$cita]!=2){		
			if($i<10){
				print("<font color='#0000CC' size='2'>0".$i." </font>");
				print('<a href="votos.php?ide='.$linea[0].'&cat=indice&tp=2" target="_blank">');
				print("<font color='#000000' size='2'><strong>".$linea[2]."</strong></font></a><br><br>");
			}else{
				print("<font color='#0000CC' size='2'>".$i." </font>");
				print('<a href="votos.php?ide='.$linea[0].'&cat=indice&tp=2" target="_blank">');
				print("<font color='#000000' size='2'><strong>".$linea[2]."</strong></font></a><br><br>");
			}
		}else{
			if($i<10){
				print("<font color='#0000CC' size='2'>0".$i." </font><strong>".$linea[2]."</strong><br><br>");
			}else{
				print("<font color='#0000CC' size='2'>".$i." </font><strong>".$linea[2]."</strong>");
			}
		}
		$i++;	
	}	
	


print('</marquee></td>
  </tr></table><br>');
mysql_close($ident);


}

if($opcion==1){
print('<font color="#990000"><strong>FRASE DEL DIA:</strong></font><br>');

						print('<br><table align="center"><tr><td>');
					  // LA FRASE DEL DIA
					   	include 'dbdata.php';
						$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
						$consulta = "SELECT * FROM aux;";
						$result = mysql_db_query($dbase, $consulta);
						$lineaA = mysql_fetch_row($result);
						
						if(($lineaA[1])==(date("Y-m-d")))
						{
							$consulta = "SELECT * FROM frases WHERE id=".$lineaA[2].";";
							$result = mysql_db_query($dbase, $consulta);
							$lineaF = mysql_fetch_row($result);
							print('<div align="center"><strong>'.$lineaF[2].'</strong>');
							
							if($lineaF[5] != "Anónimo"){
								print(' <br>('.$lineaF[5].')');
							}
							
							print('</font></div></td>
                        </tr>
                      </table><br>');
						  
						  print('<input type="image" src="images/votar.gif" onClick="');
						  print("javascript:window.open('Gvotos.php?ide=".$lineaF[0]."&cat=indice&tp=2', 'noimporta', 'width=550, height=300, scrollbars=NO')");
print('"></p>');
						  
						  /*<div align="center"><a href="Gvotos.php?ide='.$lineaA[2].'&cat=indice&tp=2" target="_blank"><font color="#0000FF" size="1">Si te gusta, vota por ella!</font></a></div>*/
						  
						
						}else
						{
							$consulta = "SELECT Count(*) AS TotalF FROM frases;";
							$result = mysql_db_query($dbase, $consulta);
							$tempTOTAL = mysql_fetch_row($result);
							$numero = rand(1,$tempTOTAL[0]);
							$consulta = "SELECT * FROM frases WHERE id=".$numero.";";
							$result = mysql_db_query($dbase, $consulta);
							$lineaN = mysql_fetch_row($result);
							$consultaFF = "UPDATE aux SET fecha='".date("Y-m-d")."', frase='".$lineaN[0]."' WHERE id='0';";
							mysql_db_query($dbase, $consultaFF);
							print('<div align="center"><strong>'.$lineaN[2].'</strong>');
							
if($lineaF[5] != "Anónimo"){
								print(' <br>('.$lineaN[5].')');
							}

							print('</strong></span></div></td>
                        </tr>
                        <tr>
                            <td><div align="center"><a href="Gvotos.php?ide='.$lineaA[2].'&cat=indice" target="_blank"><font color="#0000FF" size="1">Si te gusta, vota por ella!</a></font></div></td>
                        </tr>
                      </table>');
						}
					mysql_close($ident);	


}

?>
      </div></td>
    </tr>
</table>
  <div align="right" class="Estilo1"><a href="versiones.php" target="_blank">V 3.0</a> </div>

  <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3597745-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>

</body>
</html>
