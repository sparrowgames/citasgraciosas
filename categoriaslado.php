<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////// CATEGORIAS /////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

				include 'dbdata.php';
				$pag=0;
				print('<p align="center"><font color="#A10000"><strong>CATEGORIAS</strong></font></p>');
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = "SELECT * FROM ".$tipo." ORDER BY tipo ASC;";
				$result = mysql_db_query($dbase, $consulta);
				print('<table width="100%" align="center" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><tr>');
				$tempo=0;
				while($linea = mysql_fetch_row($result)){
				
					$consultaCONT = "SELECT Count(*) AS TotalF FROM frases WHERE tipo='".$linea[1]."';";
				$resultCONT = mysql_db_query($dbase, $consultaCONT);
				$tempTOTAL = mysql_fetch_row($resultCONT);
					if($linea[1] != 'prohibidas'){
				if($pag==0){
					print('<td align="left" bordercolor="#FFFFFF" bgcolor="#F0F0F0">');
				}else{
					print('<td align="left" bordercolor="#FFFFFF" bgcolor="#F9F9F9">');
				}
				$pag=1 - $pag;
				print('<a href="mostrar.php?cat='.$linea[1].'" target="_self"><font size="2px" color="#A10000">'.$linea[1].'</font></a> '.$tempTOTAL[0].'</td></tr><tr>');
					
					}			
				}
				print('</tr></table>');
				mysql_close($ident);
?>
