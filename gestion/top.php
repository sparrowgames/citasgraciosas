<?php
	session_start();
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {color: #0000FF}
body {
	background-color: #CCCCCC;
}
.Estilo2 {font-size: xx-small}
-->
</style></head>

<body>
<table width="90%" border="0" align="center">
  <tr>
    <td width="25%"><table border="0" align="left">
      <tr bordercolor="#FFFFFF">
        <td><img src="imgmanos/cal.png" width="22" height="20" /><strong> <?php 
		
		$dias[1]= "Lunes";
		$dias[2]= "Martes";
		$dias[3]= "Miercoles";
		$dias[4]= "Jueves";
		$dias[5]= "Viernes";
		$dias[6]= "Sabado";
		$dias[0]= "Domingo";
		
		$mes[1]= "Enero";
		$mes[2]= "Febrero";
		$mes[3]= "Marzo";
		$mes[4]= "Abril";
		$mes[5]= "Mayo";
		$mes[6]= "Junio";
		$mes[7]= "Julio";
		$mes[8]= "Agosto";
		$mes[9]= "Septiembre";
		$mes[10]= "Octubre";
		$mes[11]= "Noviembre";
		$mes[12]= "Diciembre";
			
		echo $dias[date("w")].", ".date("d")." de ".$mes[date("n")]." de ".date("Y"); 
		
		
		
		?></strong></td>
      </tr>
    </table></td>
    <td width="52%" align="center"><a href="http://www.citasgraciosas.com/" target="_blank"><img src="http://citasgraciosas.com/images/titulo.png" width="363" height="40" border="0" /></a> </td>
    <td width="15%"><div align="right">Sesi&oacute;n iniciada: <span class="Estilo1"> <?php echo $usuario; ?></span></div>
    <td width="8%"><form action="logout.php" method="post" name="form1" target="_parent" id="form1">
      <div align="left">
        <input type="submit" name="Submit" value="Cerrar" />
      </div>
    </form>
    </td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="93%"><hr /></td>
    <td width="7%"><div align="right"><span class="Estilo2">Juanuxx 2011 v2.05 </span></div></td>
  </tr>
</table>
</body>
</html>
