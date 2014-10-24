 <?php
	session_start();
	session_register('itemsVotados');
	session_register('itemsEncuesta');
	session_register('aleatoria');

include 'dbdata.php';
	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consulta = "SELECT * FROM frases ORDER BY id DESC;";
	$result = mysql_db_query($dbase, $consulta);
	$MAX = mysql_fetch_row($result);


	if($_REQUEST[otra] or !$_SESSION['aleatoria']){
			$numero = rand(1,$MAX[0]);
			$_SESSION['aleatoria'] = $numero;
	}else{
		$numero = $_SESSION[aleatoria];
	}
	
	$consulta = "SELECT * FROM frases WHERE id='".$numero."';";
	$result = mysql_db_query($dbase, $consulta);
	$lineaF = mysql_fetch_row($result);
	
	print('<html><head>');
	
		//print('<meta property="og:type" content="article"/>');
		//print('<meta property="og:title" content="'.$linea[2].'"/>');
		//print('<meta property="og:description" content="La mayor base de datos de citas y frases graciosas."/>');
	    //print('<meta property="og:image" content="http://www.citasgraciosas.com/images/edi.jpg"/>');
		//print('<meta property="og:url" content="http://www.citasgraciosas.com/"/>');

print('</head>
<style type="text/css">
<!--
.Estilo1 {
	color: #990000;
	font-weight: bold;
	font-size: x-small;
}
-->
</style>

<body>
<form name="form1" method="post" action="'.$PHP_SELF.'">
 <table width="100%" border="0">
    <tr>
      <td width="95%"><div align="left" class="Estilo1"><img src="../imgmanos/random.png" width="22" height="20" /> Aleatoria: </div></td>
      <td width="5%"><div align="right">
  
  
  
	   <input type="submit" name="otra" value="Otra">
      </div></td>
    </tr>
  </table>');
 

	print('<br><table align="center"><tr><td>');
print('<div align="center"><a href="http://www.citasgraciosas.com/mostrarfrase.php?ide='.$lineaF[0].'"><font color="#555555"><strong>'.$lineaF[2].'</strong></font><a>');
							
							if($lineaF[5] != "Anónimo"){
								print(' <br>('.$lineaF[5].')');
							}
							
							print('</font></div></td>
                        </tr>
                        <tr>
                          <td></br><div align="center"><a href="votos.php?ide='.$lineaF[0].'&cat=indice&tp=2"><font color="#0000FF" size="1">Si te gusta, vota por ella!</font></a></div></td>
                        </tr>
                      </table></form><br>
					  
			<div align="center">	');	  
					  
					  
/*print('<div id="fb-root"></div><script src="http://connect.facebook.net/es_ES/all.js#appId=273170339359953&amp;xfbml=1"></script><fb:like href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$lineaF[0].'" send="false" layout="button_count" width="100%" show_faces="false" font=""></fb:like></div>');*/
if(strlen($lineaF[2])>100){
	$tempstring = substr($lineaF[2], 0, 97);
	$tempstring = $tempstring."...";
}else{
	$tempstring = $lineaF[2];
}


print('<table width="100%" border="0">
  <tr>
    <td align="center">');

	print('
<div id="fb-root"></div><script src="http://connect.facebook.net/es_ES/all.js#appId=133301816766445&amp;xfbml=1"></script><fb:like href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$lineaF[0].'" send="false" layout="button_count" width="100%" show_faces="false" font=""></fb:like><br><br><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.citasgraciosas.com/mostrarfrase.php?ide='.$lineaF[0].'" data-text="'.$tempstring.'" data-count="horizontal" data-via="citasgraciosas" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><br><br><!-- Añade esta etiqueta donde quieras colocar el botón +1 -->
<g:plusone href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$lineaF[0].'"></g:plusone>');

	
	
/*	<div id="fb-root"></div><script src="http://connect.facebook.net/es_ES/all.js#appId=133301816766445&amp;xfbml=1"></script><fb:like href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$lineaF[0].'" send="true" layout="box_count" width="60" show_faces="false" font=""></fb:like></td>
    <td><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.citasgraciosas.com/mostrarfrase.php?ide='.$lineaF[0].'" data-text="'.$tempstring.'" data-count="vertical" data-via="citasgraciosas" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><br><!-- Añade esta etiqueta donde quieras colocar el botón +1 -->
<g:plusone href="http://www.citasgraciosas.com/mostrarfrase.php?ide='.$lineaF[0].'"></g:plusone>*/

print('</td>
  </tr>
</table>
</body>
</html>');
?>

