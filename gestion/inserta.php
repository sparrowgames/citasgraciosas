<?php
	session_start();
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>FRASES - Inserci&oacute;n</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<p align="center">&nbsp;</p>
<p align="center"><strong><em><font size="6">INSERCI&Oacute;N DE FRASES </font></em></strong></p>
<p>&nbsp;</p>
<?php
				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){

print('				
<form name="form1" method="post" action="add.php">
  <table border="1" align="center" >
    <tr>
      <td ><table border="0" align="center">
          <tr> 
            <td><strong>Frase: </strong></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <textarea name="txt1" cols="65" rows="5"></textarea>
              </div></td>
          </tr>
          <tr> 
            <td><table width="100%">
                <tr> 
                  <td width="50%"><strong>Categor&iacute;a:</strong></td>
                  <td width="50%"><strong>Autor:</strong></td>
                </tr>
                <tr> 
                  <td> <div align="center">');
		
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = "SELECT * FROM ".$tipo." ORDER BY tipo ASC";
				$result = mysql_db_query($dbase, $consulta);
			print("<select name='tp'>");
				
				while($linea = mysql_fetch_row($result))
 					
					if($linea[1]=="Variadas"){
						print("<option selected>".$linea[1]."</option>");
					}else{
					
						print('<option>'.$linea[1].'</option>');
					}
			
				print('</select>');
				mysql_close($ident);

					print('
							  </div></td>
							  <td><div align="center">
							   <input name="txtAut" type="text" value="An&oacute;nimo" size="35" maxlength="255" >
								
							  </div></td>
							</tr>
						  </table>
						  <div align="center"><hr><strong>Fecha de inserci&oacute;n:');
			
							print(date("Y-m-d"));
				
								print('
				
							  </strong></div></td>
						  </tr>
						</table></td>
					</tr>
				  </table>
				 
				  <hr>
				  
					
						<form name="form1" method="post" action="add.php">
						<table width="100%" border="0">
							<tr> 
						  <td width="50%"><div align="center"> 
							  <input type="submit" name="Submit" value="Insertar">
						</div></td>
					  <td width="50%"><div align="center"> 
						  <input name="reset" type="reset">
						</div></td>
					</tr>
				  </table>
				 </form>
				');
}else{
print('<br><br><div align="center"><font ><strong>...ACCESO RESTRINGIDO...</strong></font>');}
 ?>
</body>
</html>
