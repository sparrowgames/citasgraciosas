<html>
<body>

<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>Comprobando incoherencias entre los votos y el total de votos... </p>
  <p>&nbsp;</p>
  <p>
    <?php 

	$correctos = 0;
	$corregidos = 0;
	
    include 'dbdata.php';
	
	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consulta = "SELECT * FROM ".$frase.";";
	$result = mysql_db_query($dbase, $consulta);

	while($linea = mysql_fetch_row($result)){
		$ide = $linea[0];
		$votos = $linea[1];
		$votosTOT = $linea[6];
		$resultado = $votosTOT - $votos;
		
		if($resultado>0){
			$resto = $resultado%2; 
		}else{
			$resto = 0;
		}

		if ($resto==0) { 
   			  $correctos++;
		  }else{ 
			  $corregidos++;
			  $vota = $votosTOT + 1;
			  $consulta2 = "UPDATE frases SET votostot=".$vota." WHERE id='".$ide."'";
			  $result2 = mysql_db_query($dbase, $consulta2);
	    }  
}
	
	echo "<strong>Finalizado.</strong><br>".$correctos." registros correctos.";
	if($corregidos == 0){
		echo '<br><br><img src="img/si.jpg" width="113" height="113" /><br>¡Felicidades no hay incoherencias en los votos!';
	}else{
		echo '<br><br><img src="img/atencion.jpg"><br> '.$corregidos.' registros erroneos corregidos.';
	
	}
   mysql_close($ident);
   
   echo '<br><br><a href="'.$PHP_SELF.'">Comprobar otra vez</a>';
?>
  </p>
</div>
</body></html>
