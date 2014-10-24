<?php
		$i = rand(1,7);
	$imagen= "imgrandom/".$i.".jpg";
	//print('<img src="'.$imagen.'" border="0" />');

switch($i){
	
		case 1: print('<a href="http://feed2.w3.org/check.cgi?url=http%3A//feed.citasgraciosas.com" target="_blank"><img src="'.$imagen.'" alt="[Valid RSS]" border="0" /></a>');
				break;	

		case 2: print('<a href="http://www.facebook.com/pages/citasgraciosascom/147416158668105" target="_blank"><img src="'.$imagen.'" border="0" /></a>');
				break;
				
		case 3: print('<a href="http://feed2.w3.org/check.cgi?url=http%3A//feed.citasgraciosas.com" target="_blank"><img src="'.$imagen.'" alt="[Valid RSS]" border="0" /></a>');
				break;	
				
		case 4: print('<a href="http://www.citasgraciosas.com/mostrar.php?cat=Sexo"><img src="'.$imagen.'" border="0" /></a>');
				break;	
				
				
		case 5: print('<a href="http://www.citasgraciosas.com/main.php"><img src="'.$imagen.'" border="0" /></a>');
				break;	
		
				
		case 8: print('<a href="http://nyanit.com/citasgraciosas.com"><img src="'.$imagen.'" border="0" /></a>');
				break;	
				
		default: print('<a href="http://www.citasgraciosas.com"><img src="'.$imagen.'" border="0" /></a>');
				break;	
				
	}

?>