<?php
	session_start();
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>FRASES - Modificar Categoria</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<p align="center"><strong><em><font size="6">Modificar Categoria </font></em></strong></p>
<p align="center">&nbsp;</p>
<?php

function Redirect($ToURL){
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"> <html><head><meta http-equiv="Content-Type" content
="text/html; charset=iso-8859-1"> <meta http-equiv="refresh" content="2; url
=' . $ToURL . '"> <title>ERROR...</title></head><body><div align
="center"> <B>ERROR...NO HAS RELLENADO CORRECTAMENTE LOS CAMPOS... <br><br> Redirigiendo, espera dos segundos...</B> </div></body></html>';
      exit;
}

$usuario = $_SESSION['usuario'];
if($usuario!="Anonimo"){
print('<table width="90%" border="" align="center">
  <tr> 
    <td bordercolor="#000000" bgcolor="#0000FF"><div align="center"> 
        <table border="00" align="center">
          <tr>
               <td><form name="form4" method="post" action="gestion.php">
                <div align="center"> 
                  <input type="submit" name="Submit2" value="Volver">
                </div>
              </form></td>
          </tr>
        </table>	</td>
          </tr>
        </table><form action="">
				');
				$cat = $_REQUEST["tp"];
				$nuevo = $_REQUEST["textfield"];
				
				if($cat != "Elije categoria..." && $nuevo !=""){
					include 'dbdata.php';
				 	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
					$consulta ="UPDATE ".$frase." SET  tipo = '".$nuevo."' WHERE tipo = '".$cat."';";
					$result = mysql_db_query($dbase, $consulta);
					$consulta ="UPDATE ".$tipo." SET  tipo = '".$nuevo."' WHERE tipo = '".$cat."';";
					$result = mysql_db_query($dbase, $consulta);
			
					$consulta = "SELECT * FROM ".$frase." WHERE tipo = '".$nuevo."' ORDER BY id ASC";
					$result = mysql_db_query($dbase, $consulta);
  			$i=1;
					while($linea = mysql_fetch_row($result)){
 						print($i."-".$linea[4]." - ".$linea[2].'<br>');
						$i++;
						
					}
			
				}else{
				  Redirect("modifica_tipo.php");
				}
										
				mysql_close($ident);

}
 ?>
  </p>
</div>
</body>
</html>
