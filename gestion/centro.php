<?php
	session_start();
		session_register('usuario');
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title></head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">
  <?php
  $usuario=$_SESSION['usuario'];
			
		
		if($usuario=="Anonimo"){
			print('
			<p align="center"><font color="#FF0000" size="+7">&iexcl;&iexcl;Accceso denegado!!</font></p>');

		}else{

print('  <table width="80%" border="1" align="center" bordercolor="#0099FF">
    <tr bordercolor="#FFFFFF">
      <td width="50%"><div align="center">
        <table border="0" align="center">
          <tr>
            <td><img src="img/atencion.jpg" width="44" height="68" /></td>
            <td><font color="#FF0000" size="4">Cambiar frase del dia de EMERGENCIA </font></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><form name="form1" method="post" action="emergencia.php">
                <div align="right">
                  <input type="submit" name="Submit" value="Cambiar">
                </div>
            </form></td>
          </tr>
        </table>');
        include('../frasedeldia.php'); 
         print('
      </div></td>
             </tr>
      </table></td>
    </tr>
  </table>');
}
  ?>
</p>
</body>
</html>
