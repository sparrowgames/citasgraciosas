<html>
<head>
<META HTTP-EQUIV="REFRESH" CONTENT="15;http://www.citasgraciosas.com/Gvista.php"> 
</head>
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #000000;
	text-decoration: underline;
}
a:active {
	color: #000000;
	text-decoration: none;
}
body {
	background-image: url(images/bg.gif);
}
-->
</style>
<body><span class="td2_2_logo">

<?php
		include 'dbdata.php';
						$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
						$consulta = "SELECT * FROM aux;";
						$result = mysql_db_query($dbase, $consulta);
						$lineaA = mysql_fetch_row($result);
						
						
							$consulta = "SELECT * FROM frases WHERE id=".$lineaA[2].";";
							$result = mysql_db_query($dbase, $consulta);
							$lineaF = mysql_fetch_row($result);
							print('<div align="center"><font size="2">'.$lineaF[2].'</font></div>');
							/*print('<div align="center"><a href="http://www.citasgraciosas.com" target="_blank"><font size="2">'.$lineaF[2].'</font></a></div>');*/			
						
					mysql_close($ident);					  
  ?>
</span></body>
</html>