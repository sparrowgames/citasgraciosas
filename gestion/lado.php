<?php
	session_start();
	session_register('exacta');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: large;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	background-color: #CCCCCC;
}

-->
</style>
</head>

<body>
<table width="137" border="0" align="center">
  <tr>
    <td width="24"><div align="center"><img src="img/home.gif" width="20" height="20" /></div></td>
    <td width="105" bordercolor="#000000"><div align="left"><span class="Estilo1"><a href="menu.php" target="_parent">Inicio</a></span></div></td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td>&nbsp;</td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><img src="img/frases.png" width="20" height="20" /></div></td>
    <td bordercolor="#000000"><span class="Estilo1">Frases</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bordercolor="#000000"><table width="100%" border="0" align="center">
        <tr>
          <td width="33%"><div align="center"><a href="inserta.php" target="mainFrame"><img src="img/add.png"  alt="A&ntilde;adir" width="20" height="20" border="0" /></a></div></td>
          <td width="33%"><div align="center"><a href="gestion.php" target="mainFrame"><img src="img/modif.png" alt="Modificar" width="20" height="20" border="0" /></a></div></td>
          <td width="34%"><div align="center"><a href="tags.php" target="mainFrame"><img src="img/etiquetas.png" alt="Etiquetas" width="20" height="20" border="0" /></a></div></td>
        </tr>
    </table></td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td>&nbsp;</td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  
  <tr>
    <td><div align="center"><img src="img/cats.png" width="20" height="20" /></div></td>
    <td bordercolor="#000000"><div align="left"><span class="Estilo1">Categorias</span></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bordercolor="#000000"><table width="100%" border="0" align="center">
      <tr>
        <td width="33%"><div align="center"><a href="add_t.php" target="mainFrame"><img src="img/add.png"  alt="A&ntilde;adir" width="20" height="20" border="0" /></a></div></td>
        <td width="33%"><div align="center"><a href="modifica_tipo.php" target="mainFrame"><img src="img/modif.png" alt="Modificar" width="20" height="20" border="0" /></a></div></td>
        <td width="34%"><div align="center"><a href="borrar.php?t=0" target="mainFrame"><img src="img/del.png" alt="Modificar" width="20" height="20" border="0" /></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr bordercolor="#FFFFFF">
    <td>&nbsp;</td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><img src="img/etiquetas.png" width="20" height="20" /></div></td>
    <td bordercolor="#000000"><div align="left"><span class="Estilo1">Etiquetas</span></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bordercolor="#000000"><table width="100%" border="0" align="center">
        <tr>
          <td width="33%"><div align="center"><a href="add_etiq.php" target="mainFrame"><img src="img/add.png"  alt="A&ntilde;adir" width="20" height="20" border="0" /></a></div></td>
          <td width="33%"><div align="center"><a href="tag_modifica.php" target="mainFrame"><img src="img/modif.png" alt="Modificar" width="20" height="20" border="0" /></a></div></td>
          <td width="34%"><div align="center"><a href="borrar.php?t=1" target="mainFrame"><img src="img/del.png" alt="Modificar" width="20" height="20" border="0" /></a></div></td>
        </tr>
    </table></td>
  </tr>
  
  <tr bordercolor="#FFFFFF">
    <td>&nbsp;</td>
    <td bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><img src="img/bak.png" width="20" height="20" border="0" /></div></td>
    <td bordercolor="#000000"><div align="left"><span class="Estilo1">BBDD</span></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bordercolor="#000000"><div align="center"><a href="backup.php" target="mainFrame"><img src="img/ver.png" alt="Modificar" width="20" height="20" border="0" /></a></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bordercolor="#000000"><div align="center"><a href="comprobar_votos.php" target="mainFrame"><img src="img/votos.png" alt="Modificar" width="20" height="20" border="0" /></a><a href="comprobar_votos.php" target="mainFrame"></a></div></td>
  </tr>
</table>
<br />
<table border="0" align="center">
  <tr>
    <td><?php
$usuario = $_SESSION['usuario'];

		print('	
		
  <form name="form1" method="post" target="mainFrame" action="buscar.php">
    
	
    <table width="100%" border="0">
      <tr> 
        <td><div align="center"><font color="#555555"> 
            <input name="txt" type="text" size="18" maxlength="255">
            </font></div></td>
      </tr>
    </table>
      <table border="0" align="center">
      <tr> 
        <td> <div align="center"> 
            <input type="radio" name="radiobutton" value="id">
          </div></td>
        <td><font color="#555555">ID</font> </td>
      </tr>
      <tr> 
        <td> <div align="center"> 
            <input name="radiobutton" type="radio" value="frase" checked>
          </div></td>
        <td><font color="#555555">Frase</font></td>
      </tr>
      <tr> 
        <td> <div align="center"> 
            <input type="radio" name="radiobutton" value="tipo">
          </div></td>
        <td><font color="#555555">Categoria</font></td>
      </tr>
      <tr> 
        <td> <div align="center"> 
            <input type="radio" name="radiobutton" value="votos">
          </div></td>
        <td><font color="#555555">Votos</font></td>
      </tr>
      <tr>
        <td><input type="radio" name="radiobutton" value="autor"></td>
        <td><font color="#555555">Autor</font></td>
      </tr>
	   
    </table>');
 
  print('
  <p> 
      <div align="center"><input type="submit" name="Submit" value="&iexcl;Busca!"></div>
    </p>
  </form>
');
?></td>
  </tr>
</table>

<table width="140" border="1" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <td width="130"><a href="https://phpmyadmin.ovh.net/" target="_blank"><img border="0" src="img/phpmyadmin.png" alt="phpmyadmin" width="130" height="76" /></a></td>
  </tr>
</table>
<br />
<table width="140" border="1" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <td width="130"><div align="center"><a href="http://www.ovh.es" target="_blank">WWW.OVH.ES</a></div></td>
  </tr>
</table>
</body>
</html>
