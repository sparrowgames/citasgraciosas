<?php

$opcion= $_REQUEST["select"];
if($opcion==0){
	$opcion=3;
}

print('<form id="form1" name="form1" method="post" action="'.$PHP_SELF.'">
  <label>
  <div align="center"><strong>Columnas: 
    
    </strong>
    <select name="select">');
	
	
	switch($opcion){
	
		case 3: print('<option value="3">3</option>
      <option value="2">2</option>
      <option value="1">1</option>');
	  			break;
	  
	  case 2: print('<option value="2">2</option>
      <option value="3">3</option>
      <option value="1">1</option>');
	  			break;
	  case 1: print('<option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>');
	  			break;
	}
    print('  
    </select>
    <input type="submit" name="Submit" value="Cambiar!" />
  </div>
  </label>
</form><br><br>');
//////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////// CATEGORIAS /////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

				include 'dbdata.php';
				
$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = "SELECT * FROM ".$tipo." ORDER BY tipo ASC;";
				$result = mysql_db_query($dbase, $consulta);
				print('<table width="100%" align="center" border="0"><tr>');
				$tempo=0;
				while($linea = mysql_fetch_row($result)){
				
					$consultaCONT = "SELECT Count(*) AS TotalF FROM frases WHERE tipo='".$linea[1]."';";
				$resultCONT = mysql_db_query($dbase, $consultaCONT);
				$tempTOTAL = mysql_fetch_row($resultCONT);
				if($linea[1] != 'prohibidas'){
					$tempo++;		
					if($tempo<$opcion){	
						 print('<td><a href="movil.php?cat='.$linea[1].'" target="_self">'.$linea[1].' ('.$tempTOTAL[0].')</a></td>');
					}else{
						print('<td><a href="movil.php?cat='.$linea[1].'" target="_self">'.$linea[1].' ('.$tempTOTAL[0].')</a></td></tr><tr>');
						$tempo=0;
					}}
				}
				print('</tr></table>');
				mysql_close($ident);
?>
