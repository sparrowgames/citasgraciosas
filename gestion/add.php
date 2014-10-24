<?php
	session_start();
		session_register('usuario');
		$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<div align="center"> 
  <?php
 				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
 
if($_REQUEST[txt1] && $_REQUEST[tp]){
		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = 
		"INSERT INTO ".$frase."
		 (`id`,`votos`,`frase`,`fecha`,`tipo`,`autor`)
		 VALUES
		 ('','','".$_REQUEST[txt1]."','".date("Y-m-d")."','".$_REQUEST[tp]."','".$_REQUEST[txtAut]."');";
		$result= mysql_db_query($dbase,$consulta);
	if(!$result){
	print('<p><font color="#FF0000" size="7">&iexcl;&iexcl;HA OCURRIDO UN ERROR!!</font></p>');
		}else{
		print('<p><font color="#006600" size="7">&iexcl;&iexcl;SE HA INSERTADO UNA NUEVA FRASE!!</font></p>');
				// Cojo el id de la ultima (recien añadida)
				 $consulta = "SELECT id FROM ".$frase." ORDER BY id DESC;";
				 $result= mysql_db_query($dbase,$consulta);
				 $linea = mysql_fetch_row($result);
				 $idfrase = $ultima = $linea[0];
				 
				// Cojo el id de la etiqueta que es la categoria
				 $consulta = "SELECT * FROM ".$etiquetas." WHERE etiqueta='".$_REQUEST[tp]."';";
				 
				 $result= mysql_db_query($dbase,$consulta);
				 $linea = mysql_fetch_row($result);
				$idetiqueta = $linea[0];
				// Anade el ide de la frase y el ide etiqueta en relacion si no existe
					$consulta = "SELECT * FROM ".$relacion." WHERE idfrase=".$idfrase." AND idetiqueta=".$idetiqueta.";";
					$result= mysql_db_query($dbase,$consulta);
					if(!$linea = mysql_fetch_row($result)){
						$consulta = 
						"INSERT INTO ".$relacion."
						 (`id`,`idfrase`,`idetiqueta`)
						 VALUES
						 ('','".$idfrase."','".$idetiqueta."');";
						$result= mysql_db_query($dbase,$consulta);
					}
				 
				echo "<script>parent.mainFrame.document.location.href='tags.php?ide=".$ultima."';</script>\n"; 
		}
		mysql_close($ident);
}else{print('<p><font color="#FF0000" size="7">&iexcl;&iexcl;TE HAS DEJADO ALGÚN CAMPO POR RELLENAR!!</font></p>');
		}


}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>'); 
echo "<script>document.location.href='index.php';</script>\n";}
 ?>
</div>
</body>
</html>
