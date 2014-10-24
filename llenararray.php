<?php
	session_register('t');
	session_register('arraytags');
	session_start();

	$idt = $_SESSION['t'];

	include 'dbdata.php';
	
	$identnube = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consultanube = "SELECT idfrase FROM ".$relacion." WHERE idetiqueta=".$idt."
	$resultnube = mysql_db_query($dbase, $consultanube);
	
	while($lineanube = mysql_fetch_row($resultnube)){
				$arraytemp[$lineanube[1]] = $lineanube[2];
				$_SESSION['arraytags'] = $arraytemp
	}

?>