<?php
	session_start();
	session_register('usuario');
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: small;
	font-style: italic;
}
-->
</style>
</head>

<body>

<p>
  <?php
  	$t = $HTTP_GET_VARS['t'];
  	print('<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="75%" border="0" align="center">
  <tr>
    <td width="14%" height="128"><img src="img/flecha.png" alt="&lt;" width="100" height="67" /></td>
    <td width="86%"><table border="0" align="center">
      <tr>
        <td ><div align="center">
            <p>Pulsa en el </p>
          <p><img src="img/icono_borrar.gif" alt="a" width="15" height="17" /></p>
          <p> de la ');
		  
		  	if($t==1){
				echo "etiqueta";
			}else{
				echo "categoria";
			}
			
		  print(' que quieras borrar. </p>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>');
	if($t==1){
				echo '<p>&nbsp;</p>
<p align="center" class="Estilo1"><font color="#FF0000">El icono para borrar la etiqueta solo aparece<br /> si ninguna frase contiene esa etiqueta.</font></p>';
}
			

?>
</p>

</body>
</html>
