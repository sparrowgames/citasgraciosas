<?php

$item=0;
$itemsVotados[0]=69;

function comprobarV($cita){

session_register('itemsVotados');

echo "itemsVotados:".$itemsVotados[0]." porkeeeee";

	if ($cita){
	   if (!isset($itemsVotados)){
		 	$itemsVotados[$cita]=true;
	   }else{
		  foreach($itemsVotados as $k => $v){
			 if ($cita==$k){
			 	$itemsVotados[$k]=2;
				$encontrado=1;
			 }
		  }
	
		  if (!$encontrado){
		  	return 1;
		  }else{
		  	return 2;
		  }
	   }
	}
	$_SESSION['itemsVotados']=$itemsVotados;
}
?>
