<?php
	
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
							$lineaFB = $lineaF = mysql_fetch_row($result);

	print('<br><table align="center"><tr><td>');
print('<div align="center"><a href="mostrarfrase.php?ide='.$lineaF[0].'"><font color="#555555"><strong>'.$lineaF[2].'</strong></font></a>');
							
							if($lineaF[5] != "Anónimo"){
								print(' <br>('.$lineaF[5].')');
							}
							
							print('</font></div></td>
                        </tr>
                        <tr>
                          <td></br><div align="center"><a href="votos.php?ide='.$lineaA[2].'&cat=indice&tp=2"><font color="#0000FF" size="1">Si te gusta, vota por ella!</font></a></div></td>
                        </tr>
                      </table>');
						
						}else
						{
							$consulta = "SELECT Count(*) AS TotalF FROM frases;";
							$result = mysql_db_query($dbase, $consulta);
							$tempTOTAL = mysql_fetch_row($result);
							$numero = rand(1,$tempTOTAL[0]);
						
							$m= date("m");
							$d= date("d");
						
							if($m == 1 && $d == 1) $numero = 2915; // si es año nuevo
							if($m == 12 && $d == 25) $numero = 2945; // si es navidad
							
							$consulta = "SELECT * FROM frases WHERE id=".$numero.";";
							$result = mysql_db_query($dbase, $consulta);
							$lineaFB = $lineaN = mysql_fetch_row($result);
							$consultaFF = "UPDATE aux SET fecha='".date("Y-m-d")."', frase='".$lineaN[0]."' WHERE id='0';";
							mysql_db_query($dbase, $consultaFF);
		
	print('<br><table align="center"><tr><td>');
							print('<div align="center"><a href="mostrarfrase.php?ide='.$lineaN[0].'"><font color="#555555"><strong>'.$lineaN[2].'</strong></font></a>');
							
if($lineaF[5] != "An&oacute;nimo"){
								print(' <br>('.$lineaN[5].')');
							}

							print('</strong></span></div></td>
                        </tr>
                        <tr>
                            <td></br><div align="center"><a href="votos.php?ide='.$lineaA[2].'&cat=indice&tp=2"><font color="#0000FF" size="1">Si te gusta, vota por ella!</a></font></div>
							
							</td>
                        </tr>
                      </table>');
						}
						
if(strlen($lineaF[2])>100){
	$tempstring = substr($lineaF[2], 0, 84);
	$tempstring = $tempstring."...";
}else{
	$tempstring = $lineaF[2];
}

$tempstring = "#frasedeldía ".$tempstring;

print('<br><table width="100%" border="0">
  <tr>
    <td align="center">');

	print('
<div id="fb-root"></div><script src="http://connect.facebook.net/es_ES/all.js#appId=133301816766445&amp;xfbml=1"></script><fb:like href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$lineaF[0].'" send="false" layout="button_count" width="100%" show_faces="false" font=""></fb:like><br><br><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.citasgraciosas.com/mostrarfrase.php?ide='.$lineaF[0].'" data-text="'.$tempstring.'" data-count="horizontal" data-via="citasgraciosas" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><br><br><!-- Añade esta etiqueta donde quieras colocar el botón +1 -->
<g:plusone href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$lineaF[0].'"></g:plusone>');

	print('</td>
  </tr>
</table>
');
			
					  

			   mysql_close($ident);					  
?>
