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
print('<table width="100%" border="0" align="center">
  <tr>
    <td width="100%" align="center"><div align="right"><a href="http://www.citasgraciosas.com/" target="_blank"><img src="images/titulo.gif" alt="citasgraciosas.com"  width="249" height="42" border="0" /></a><a href="versiones.php" target="_blank">4.0</a></div></td>
    <td width="100%" align="center"><table border="0" align="right">
      <tr>
        <td><a href="http://www.citasgraciosas.com/feed/citasgraciosas.php" target="_blank"><img src="images/rss.png" alt="Feed RSS" width="20" height="20" border="0" /></a></td>
      </tr>
      <tr>
        <td><a href="http://www.facebook.com/pages/citasgraciosascom/147416158668105" target="_blank"><img src="images/f.png" alt="Feed RSS" width="20" height="20" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
</table>

  ');
}

?>
<table width="100%" border="1" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
<tr bordercolor="#FFFFFF">
      <td width="100%">
	  <?php

	  	print('<iframe scrolling="auto" width="100%" height="125" src="http://www.citasgraciosas.com/Gcontent.php"></iframe>');
	  ?>	  </td>
  </tr>
</table>
</body>
</body>
</html>
