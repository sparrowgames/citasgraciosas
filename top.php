<HTML>
<HEAD>
<!-- TemplateBeginEditable name="doctitle" -->
<TITLE>citasgraciosas.com ..::.. Recopilaci&oacute;n de Citas y Frases Graciosas</TITLE>
<!-- TemplateEndEditable -->


<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #0000FF;
}
a:visited {
	text-decoration: none;
	color: #0000FF;
}
a:hover {
	text-decoration: underline;
	color: #0000FF;
}
a:active {
	text-decoration: none;
	color: #0000FF;
}
.Estilo2 {
	color: #FFFFFF;
	font-size: 10px;
	font-weight: bold;
}
.Estilo3 {
	font-size: 12px;
	color: #FF0000;
	font-weight: bold;
}
.Estilo5 {
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
.Estilo7 {
	font-size: 12px;
	color: #009900;
	font-weight: bold;
}
#Layer1 {
	position:absolute;
	left:27px;
	top:192px;
	width:561px;
	height:26px;
	z-index:1;
}
body {
	background-image: url(images/bgb0.gif);
}

-->
</style>

<TITLE>citasgraciosas.com ..::.. Recopilación de Citas y Frases Graciosas</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</HEAD>
<BODY bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%" height="23" valign="top" ><?php
	include 'dbdata.php';
	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consulta = "SELECT * FROM frases ORDER BY RANDOM();";
	$result = mysql_db_query($dbase, $consulta);
	print('<marquee direction="left"  scrolldelay="250" onmouseover="this.setAttribute(');
	
	print("'scrollamount', 0, 0);");
	print('" onmouseout="this.setAttribute(');
	print("'scrollamount', 4, 0);");
	print('">');
	
	while($linea = mysql_fetch_row($result)){
		print('<a href="votos.php?ide='.$linea[0].'&cat=indice" target="mainFrame">');
				print("<font color='#000000'><strong>".$linea[2]."</strong></font></a>");
		print('..........::..........');
	}
	
	print('</marquee>');
	
	mysql_close($ident);
?></td>
  </tr>
</table>
</BODY>
</HTML>