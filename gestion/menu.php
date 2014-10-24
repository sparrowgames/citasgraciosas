<?php
	session_start();
	
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
	if($usuario=="Anonimo"){
		echo "<script>document.location.href='index.php';</script>\n";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>citasgraciosas - Gesti&oacute;n</title>
<style type="text/css">
<!--
body {
	background-color: #0000FF;
}
-->
</style></head>

<frameset rows="73,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="top.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset rows="*" cols="179,*" framespacing="0" border="0">
    <frame src="lado.php" name="leftFrame" scrolling="auto" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="centro.php" name="mainFrame" id="mainFrame" title="mainFrame" />
  </frameset>
</frameset>
<noframes><body>
</body>
</noframes></html>
