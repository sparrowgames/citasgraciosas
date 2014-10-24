<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title></head>

<body>
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
				
				print('<div align="center"> ');
 
  				
				$filas=$_REQUEST[fil];
				if(!$filas){
					$filas=$HTTP_GET_VARS["filas"];}
				if(!$filas){$filas=30;}
				
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$consulta = "SELECT Count(*) AS TotalF FROM ".$frase.";";
				$result = mysql_db_query($dbase, $consulta);
				$linea = mysql_fetch_row($result);
				
				
//print('<form name="form1" method="post" target="mainFrame2" action="gestion_contenido.php?filas='.$filas.'">');

print(' <div align="center"><font ><strong>Mostrar</strong></font> 
		    <select onchange="parent.mainFrame2.window.location.href=this.value">');
	     switch($filas){
		 	case 10:
					print('
						<option selected value="gestion_contenido.php?filas=10">10</option>
					    <option value="gestion_contenido.php?filas=20">20</option>
		                <option value="gestion_contenido.php?filas=30">30</option>');
						break;
			case 20:
					print('
						<option value="gestion_contenido.php?filas=10">10</option>
					    <option selected value="gestion_contenido.php?filas=20">20</option>
		                <option value="gestion_contenido.php?filas=30">30</option>');
						break;
			case 30:
					print('
						<option value="gestion_contenido.php?filas=10">10</option>
					    <option value="gestion_contenido.php?filas=20">20</option>
		                <option selected value="gestion_contenido.php?filas=30">30</option>');
						break;
		}
		    print('</select><font > <strong> resultados por p&aacute;gina.</strong>
   
</div>');
//</form> </font><input type="submit" name="Submit" value="Reordenar">
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$PAGtotal=ceil($linea[0]/$filas);
				$pag=$HTTP_GET_VARS["pag"];			
				if(!$pag){$pag=1;}
				if($pag>1){$pagANT=$pag-1;}
				else{$pagANT=$pag;}
				if($pag<$PAGtotal){$pagSIG=$pag+1;}
				else{$pagSIG=$pag;}
				print('<a href="gestion_contenido.php?ide='.$linea[0].'&cat=home&pag='.$pagANT.'&filas='.$filas.'" target="mainFrame2"><font >Pag. Anterior</font></a>');
				print('<font color="#555555"> - <a href="gestion_contenido.php?ide='.$linea[0].'&cat=home&pag='.$pag.'&filas='.$filas.'" target="mainFrame2"> P&aacute;gina '.$pag.' de '.$PAGtotal.'</a> - </font>');
				print('<a href="gestion_contenido.php?ide='.$linea[0].'&cat=home&pag='.$pagSIG.'&filas='.$filas.'" target="mainFrame2"><font >Pag. Siguiente</font></a><hr>');						
				
				mysql_close($ident);
				
}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
Redirect('index.php');}
		?> 
</body>
</html>
