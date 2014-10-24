<?php
	session_start();
	session_register('usuario');
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
	if($usuario!="Anonimo"){
		echo "<script>document.location.href='menu.php';</script>\n";
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>citasgraciosas.com - Login</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="Content-Type" content="text/html; charset="></head>

<body>
<p align="center">&nbsp;</p>
<p align="center"><img src="img/login-image.png" width="150" height="150"></p>
<p align="center"><strong><em><font color="#FF0000" size="6" face="Geneva, Arial, Helvetica, sans-serif">citasgraciosas.com</font></em></strong></p><br>
<table border="1" align="center">
    <tr>
      <td width="280" bordercolor="#FFFFFF">
	  
	  <form name="form1" method="post" action="comprueva.php">
<br>
              <table width="100%" border="0" align="center">
                <tr>
                  <td width="34%"><div align="right"><strong><em>Usuario</em>:</strong></div></td>
                  <td width="66%"><label>
                    <input type="text" name="textfield">
                  </label></td>
                </tr>
                <tr>
                  <td><div align="right"><strong><em>Password</em>:</strong></div></td>
                  <td><label>
                    <input type="password" name="textfield2">
                  </label></td>
                </tr>
        </table>
                        <label>

      <div align="center"><br>
                <input type="submit" name="Submit3" value="Identificarse">
        </div>
        </form>  

	    <div align="center"> <p align="center"><a href="javascript:close()">
	      <input type="submit" name="Submit" value="Salir">
	    </a>
	    </div>	  </td>
    </tr>
</table>
 
</body>
</html>
