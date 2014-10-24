<?php

header ("Content-type: application/rss+xml");

		include '../dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = "SELECT * FROM aux;";
		$result = mysql_db_query($dbase, $consulta);
		$lineaA = mysql_fetch_row($result);
		$iden = $lineaA[2];

echo '<?xml version="1.0" encoding="ISO-8859-1"?>';
echo '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
echo '<channel>';
echo '<title>citasgraciosas.com</title>';
echo '<link>http://www.citasgraciosas.com</link>';
echo '<description>Recopilacion de Citas y Frases Graciosas</description>'; 
echo '<atom:link href="http://www.citasgraciosas.com/feed/frasedeldiarss.php" rel="self" type="application/rss+xml" />';
echo '<image>';
echo '<url>http://citasgraciosas.com/imgmanos/cal.png</url>';
echo '<title>citasgraciosas.com</title>';
echo '<link>http://www.citasgraciosas.com</link>';
echo '</image>';
// 1 item --------------------------------------------------------------------------------------------------------
//if(date('Y-m-d')!=$lineaA[1]){
$mysqlDateStr = strtotime($lineaA[1]);
$pubdate = date('D, d M Y H:i:s O',$mysqlDateStr);
//}

echo '<item>';
echo '<pubDate>'.$pubdate.'</pubDate>';
echo '<title>#frasedeldía '.date('d/m/Y').'</title>';
echo '<link>http://www.citasgraciosas.com/mostrarfrase.php?ide='.$iden.'</link>';
echo '<description><![CDATA[';
		

				
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
echo '<guid>http://www.citasgraciosas.com/mostrarfrase.php?ide='.$iden.'</guid>';
echo '</item>';
// FIN -----------------------------------------------------------------------------------------------------------
echo '</channel>';
echo '</rss>';

mysql_close($ident);
?>