<?php
  		function Redirect($ToURL){
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"> <html><head><meta http-equiv="Content-Type" content
="text/html; charset=iso-8859-1"> <meta http-equiv="refresh" content="1; url
=' . $ToURL . '">';
//<title>Redirigiendo...</title></head><body><div align
//="center"> <B>Redirigiendo,</B><br><B> espera un momento...</B> </div></body></html>';
      exit;
}	
				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				
				print('<table width="90%" border="1" align="center" bordercolor="#0099FF" bgcolor="#0099FF">
  <tr> 
    <td bordercolor="#000000" bgcolor="#0000FF"><div align="center"> 
        <table border="00" align="center">
          <tr>
            <td><form name="form2" action="inserta.php">
                <div align="center"> 
                  <input type="submit" name="Submit2" value="Insertar una frase">
                </div>
              </form></td>
	        <td> - </td>
            <td><form name="form3" action="add_t.php">
                <div align="center"> 
                  <input type="submit" name="Submit2" value="Insertar una Categoria">
                </div>
              </form></td><td> - </td>
            <td><form name="form3" action="modifica_tipo.php">
                <div align="center"> 
                  <input type="submit" name="Submit2" value="Renombrar una Categoria">
                </div>
              </form></td>
			  <td> - </td>
			   <td> <form name="form4" method="post" action="form.php">
                <div align="center"> 
                  <input type="submit" name="Submit2" value="Buscar">
                </div>
              </form> </td>
			   <td> - </td>
			   <td><form name="form4" method="post" action="menu.php">
                <div align="center"> 
                  <input type="submit" name="Submit2" value="Salir">
                </div>
              </form></td>
          </tr>
        </table>
        
      </div></td>
  </tr>
</table>
<div align="center"> ');
 
  				
				$filas=$_REQUEST[fil];
				if(!$filas){
					$filas=$HTTP_GET_VARS["filas"];}
				if(!$filas){$filas=20;}
				
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$consulta = "SELECT Count(*) AS TotalF FROM ".$frase.";";
				$result = mysql_db_query($dbase, $consulta);
				$linea = mysql_fetch_row($result);
				
				
print('<form name="form1" method="post" action="gestion.php?filas='.$filas.'">');

print(' <div align="center"><font color="#FFFFFF"><strong>Mostrar</strong></font> 
		    <select name="fil">');
	     switch($filas){
		 	case 10:
					print('
						<option selected>10</option>
					    <option>20</option>
		                <option>30</option>');
						break;
			case 20:
					print('
						<option>10</option>
					    <option selected>20</option>
		                <option>30</option>');
						break;
			case 30:
					print('
						<option>10</option>
					    <option>20</option>
		                <option selected>30</option>');
						break;
		}
		    print('</select>
    <font color="#FFFFFF"> <strong> resultados por p&aacute;gina.</strong></font>
	<input type="submit" name="Submit" value="Reordenar">
</div>
</form>');
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$PAGtotal=ceil($linea[0]/$filas);
				$pag=$HTTP_GET_VARS["pag"];			
				if(!$pag){$pag=1;}
				if($pag>1){$pagANT=$pag-1;}
				else{$pagANT=$pag;}
				if($pag<$PAGtotal){$pagSIG=$pag+1;}
				else{$pagSIG=$pag;}
				print('<a href="gestion.php?ide='.$linea[0].'&cat=home&pag='.$pagANT.'&filas='.$filas.'"><font color="#FFFFFF">Pag. Anterior</font></a>');
				print('<font color="#FFFF00"> P&aacute;gina '.$pag.' de '.$PAGtotal.' </font>');
				print('<a href="gestion.php?ide='.$linea[0].'&cat=home&pag='.$pagSIG.'&filas='.$filas.'"><font color="#FFFFFF">Pag. Siguiente</font></a><hr>');						
				print('<table width="80%" border="0" align="center"><tr><td><div align="center">');
				
				for($x=1;$x<=$PAGtotal;$x++){
					if($x!=$pag){
							print('<font size="2" color="#0099FF">-<a href="gestion.php?pag='.$x.'&filas='.$filas.'"><font size="2" color="#FFFFFF">'.$x.'</font></a>-</font>');
							
					}else{
							print('<font size="2" color="#0099FF">-<font size="2" color="#FF0000">'.$x.'</font>-</font>');
					}
					if($xx > 40){ 
						print('<br>');
						$xx=0;
					}
					$xx++;
					}
				print('</div></td></tr></table>');
				print('<p></p>');
				
				$consulta = "SELECT * FROM ".$frase." ORDER BY ID DESC LIMIT ".(($pag-1)*$filas).",".$filas.";";
				$result = mysql_db_query($dbase, $consulta);
				print('<table width="100%" border="0"><tr><td></td><td><font color="#FF0000"><strong>ID</strong></font></td><td><font color="#FF0000"><strong>VOTOS</strong></font></td><td><strong><font color="#FF0000">FRASE</font></strong></td><td><strong><font color="#FF0000">A&Ntilde;ADIDA</font></strong></td><td><strong><font color="#FF0000">CATEGOR&Iacute;A</strong></font></td><td><strong><font color="#FF0000">AUTOR</strong></font></td><td><strong><font color="#FF0000"></strong></font></td><td></td></tr>');
			
				$consultaOPT = "SELECT * FROM frases_tipos ORDER BY tipo DESC";
				$resultOPT = mysql_db_query($dbase, $consultaOPT);
				$conta=0;
				while($lineaOPT = mysql_fetch_row($resultOPT)){
					$tipos[$conta]=$lineaOPT[1];
					$conta++;
				}


while($linea = mysql_fetch_row($result)){
				print('<form name="form" method="post" action="modifica2.php" target="_blank">');

				print('<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr>
					  <td>');
				
				print('<a href="tags.php?ide='.$linea[0].'" target="_blank"><img src="etiquetas.png" width="20" height="20" /></a></td><td><p align="center"><input name="ides" type="text" value="'.$linea[0].'" size="4" maxlength="10"  readonly="true"></p></td><td><input type="text" name="vt" size="4" maxlength="10" value="'.$linea[1].'"></td><td> <textarea name="txt" cols="60" rows="2">'.$linea[2].'</textarea></td><td>'.$linea[3].'</td><td>');
//----------------------------------------------------------
				print("<select name='tp'><option selected>".$linea[4]."</option>");

				for($x=0;$x<count($tipos);$x++){				
 					if($tipos[$x] != $linea[4]){
						print('<option>'.$tipos[$x].'</option>');
					}
				}
				print('</select>');
//----------------------------------------------------------					
 //			print('</td><td><p align="center"><a href="modifica2.php?ide='.$linea[0].'">Modificar</a></form></p></td></tr>');
 			print('</td><td><input name="txtAUT" type="text" value="'.$linea[5].'" /></td><td><p align="center"><input type="submit" name="Submit" value="Modificar"></form></p></td></tr>');
}
					print('</table>');
				mysql_close($ident);
				
}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
Redirect('index.php');}
		?>