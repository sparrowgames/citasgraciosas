<?php
	session_start();
	session_register('usuario');
	unset($_SESSION['usuario']);
	echo "<script>document.location.href='index.php';</script>\n";
	
?>