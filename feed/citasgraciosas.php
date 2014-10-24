<?php

header ("Content-type: application/rss+xml");

echo '<?xml version="1.0" encoding="ISO-8859-1"?>';
echo '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
echo '<channel>';
echo '<title>citasgraciosas.com</title>';
echo '<link>http://www.citasgraciosas.com</link>';
echo '<description>Recopilacion de Citas y Frases Graciosas</description>'; 
echo '<atom:link href="http://www.citasgraciosas.com/feed/citasgraciosas.php" rel="self" type="application/rss+xml" />';

echo '<image>';
echo '<url>http://www.citasgraciosas.com/images/edi.jpg</url>';
echo '<title>citasgraciosas.com</title>';
echo '<link>http://www.citasgraciosas.com</link>';
echo '</image>';

// 1 item --------------------------------------------------------------------------------------------------------
echo '<item>';
echo '<title>Frase del dia</title>';
echo '<link>http://www.citasgraciosas.com/frasedehoy.php</link>';
echo '<description><![CDATA[';
		
		include '../dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = "SELECT * FROM aux;";
		$result = mysql_db_query($dbase, $consulta);
		$lineaA = mysql_fetch_row($result);
		$iden = $lineaA[2];
		
		if(!$iden){
			print('<font color="#FF0000"><strong>SE HA PRODUCIDO UN ERROR...</strong></font>');
		}else{
			$consulta = "SELECT * FROM ".$frase." WHERE id=".$iden.";";
			$result = mysql_db_query($dbase, $consulta);
			$linea = mysql_fetch_row($result);
			$frasex = $linea[2];
		}

echo $frasex;
echo ']]></description>';
echo '<guid>http://www.citasgraciosas.com/frasedehoy.php</guid>';
echo '</item>';
// 2 item --------------------------------------------------------------------------------------------------------
echo '<item>';
echo '<title>Top 3</title>';
echo '<link>http://www.citasgraciosas.com/main.php</link>';
echo '<description><![CDATA[';
		
		$consulta = "SELECT * FROM ".$frase." ORDER BY votos DESC;";
		$result = mysql_db_query($dbase, $consulta);
		
		for($i=1;$i<=3;$i++){
			$linea = mysql_fetch_row($result);
echo '0'.$i.' '.$linea[2].'<br /><br />';
	
		}

echo ']]></description>';
echo '<guid>http://www.citasgraciosas.com/main.php</guid>';
echo '</item>';
// 3 item --------------------------------------------------------------------------------------------------------
echo '<item>';

		include('../dbfechas.php');
		$consulta = "SELECT * FROM ".$frase." ORDER BY fecha DESC;";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);
	//	$lineaANT = $linea[3];
//echo '<title>Ultimas frases. Añadidas el '.cambiaf_a_normal($linea[3]).'</title>';
echo '<title>Ultimas frases añadidas</title>';

echo '<link>http://www.citasgraciosas.com</link>';
echo '<description><![CDATA[';

		for($x=0;$x<=9;$x++){
			$linea = mysql_fetch_row($result);
//		while($linea[3]==$lineaANT){
echo $linea[2];				
			//$lineaANT = $linea[3];
			
echo '<br /><br />';
		}
		//}

echo ']]></description>';
echo '<guid>http://www.citasgraciosas.com</guid>';
echo '</item>';
// FIN -----------------------------------------------------------------------------------------------------------
echo '</channel>';
echo '</rss>';

mysql_close($ident);
?>