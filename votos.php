<?php
	session_start();
	session_register('itemsVotados');
	session_register('itemsEncuesta');
		session_register('busqueda');
	
print('<html>
<head>
');
	$categoria=$HTTP_GET_VARS["cat"];
	
if($categoria=="movil" or $categoria=="movil2"){
	
}else{
print('<style type="text/css">
<!--
body {
	background-image: url(images/bgb0.gif);
}
-->
</style>');
}
print('
</head>
<body>
<div align="center">');


	
					
						
		$sesi=$HTTP_GET_VARS["id"];
  		$ide=$HTTP_GET_VARS["ide"];
		$pagM = $pag = $HTTP_GET_VARS["pag"];
		$categoria=$HTTP_GET_VARS["cat"];
		$catmovil=$HTTP_GET_VARS["cc"];
		$orden=$HTTP_GET_VARS["ord"];
		$filas=$HTTP_GET_VARS["filas"];
		$busqueda=$_SESSION["busqueda"];
		$idt=$HTTP_GET_VARS["t"];
					
		$item=$HTTP_GET_VARS['ide'];
		$itemsVotados=$_SESSION['itemsVotados'];

		if ($itemsVotados[$item]!=2){
			$itemsVotados[$item]=2;
			$_SESSION['itemsVotados']=$itemsVotados;
			include 'dbdata.php';
			$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
			$consulta =  "SELECT * FROM frases WHERE id='".$ide."'";
			$result = mysql_db_query($dbase, $consulta);
			$linea = mysql_fetch_row($result);
			$tpv=$HTTP_GET_VARS["tp"];
			$vota = $linea[1];
			
			switch($tpv){
			
				case 1:
					$vota --;
					/*if($vota > 0){
						$vota --;
					}else{
						print('<font color="#FF0000"><strong>Esta frase no puede degradarse mas...</strong></font>');
		            }*/
					break;
				
				case 2:
						$vota ++;
					break;

			}// fin switch
			
			$consulta = "UPDATE frases SET votos=".$vota." WHERE id='".$ide."'";
			$result = mysql_db_query($dbase, $consulta);
			
			$votostot = $linea[6];
			$votostot++;
			$consulta = "UPDATE frases SET votostot=".$votostot." WHERE id='".$ide."'";
			$result = mysql_db_query($dbase, $consulta);

		}else{print('<font color="#FF0000"><strong>&iexcl;&iexcl;YA HAS VOTADO ESTA FRASE!!!</strong></font>');
		
		}//fin if itemsvotados


if(!$sesi){
	if($categoria=="tags"){
		echo "<script>document.location.href='motortag.php?t=".$idt."&pag=".$pag."';</script>\n";
	}else{
	if($categoria=="Gcontent"){
		echo "<script>document.location.href='Gcontent.php?ide=".$ide."';</script>\n";
	}else{
	if($categoria=="movil"){
		echo "<script>document.location.href='movil.php?ide=".$ide."';</script>\n";
	}else{
	if($categoria=="movil2"){
		echo "<script>document.location.href='movilcat.php?pag=".$pagM."&cat=".$catmovil."';</script>\n";
	}else{
		if($categoria=="mostrarfrase"){
			echo "<script>document.location.href='mostrarfrase.php?ide=".$ide."';</script>\n";

		}else{
			if($categoria=="indice"){
			echo "<script>document.location.href='index.php';</script>\n";

			}else{
				if(!$busqueda){
						if($categoria=="home"){
							echo "<script>document.location.href='main.php?pag=".$pag."&ord=".$orden."&filas=".$filas."';</script>\n";

						}else{
							echo "<script>document.location.href='mostrar.php?pag=".$pag."&cat=".$categoria."&filas=".$filas."';</script>\n";

						}//fin if home
		
				}else{
				echo "<script>document.location.href='busca.php?pag=".$pag."';</script>\n";
				}//fin if busqueda
			}//fin if indice
		}//fin if mostrarfrase
	}///fin if movil categorias
	}//fin if movil
}//fin if gadchet
}//fin if buscatags
}//fin sesi

/*else{
	print('<p align="center"><font size="2">Para volver, <a href="login.php?pag='.$pag.'&cat='.$categoria.'&id='.$sesi.'"><font size="4">pulsa aqui</font></a></p>');
	}*/
				mysql_close($ident);
print('
</div>
</body>
</html>');
?>