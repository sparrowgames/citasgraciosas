<?php
	session_start();
	session_register('itemsVotados');
	session_register('itemsEncuesta');
	session_register('arraytags');
	session_register('t');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">

<!--
/* RGJ Added */

.td_menu {
	width: 180px;
	vertical-align: top;
	}

.td_main {
	vertical-align: top;
	}	
	
.td1_1 {
	width: 10px;
	height: 10px;
	background-image: url(../images/bg_1_1.gif);
	}

.td1_2 {
	background-image: url(../images/bg_1_2.gif);
	}	

.td1_3 {
	width: 10px;
	height: 10px;
	background-image: url(../images/bg_1_3.gif);
	}

.td2_1 {
	width: 10px;
	background-image: url(../images/bg_2_1.gif);
	}	

.td2_2_logo {
	background-image: url(../images/bg_2_2.gif);
	height: 50px;
	width: 150px;
	vertical-align: bottom;
	}

.td2_2_menu {
	background-image: url(../images/bg_2_2.gif);
	width: 150px;
	text-align: left;
	}	

.td2_2_main {
	background-image: url(../images/bg_2_2.gif);
	width: 400px;
	height: 300px;
	vertical-align: top;
	}
		
.td2_2_main_whatever {
	background-image: url(../images/bg_2_2.gif);
	width: 400px;
	vertical-align: top;
	}	
			
.td2_2_pathway {
	background-image: url(../images/bg_2_2.gif);
	width: 400px;
	height: 20px;
	}	
	
.td2_3 {
	width: 10px;
	height: 10px;
	background-image: url(../images/bg_2_3.gif);
	}	
	
.td3_1 {
	width: 10px;
	height: 10px;
	background-image: url(../images/bg_3_1.gif);
	}	

.td3_2 {
	background-image: url(../images/bg_3_2.gif);
	}	
	
.td3_3 {
	width: 10px;
	height: 10px;
	background-image: url(../images/bg_3_3.gif);
	}
		


/* Body */

BODY {
	margin: 40px 20px 10px 20px;
	color : #000000;
	background-color: #E0E0E0;
	}

td,tr,p,div {
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: normal;
	color: #555555;
	border: none;
	}

/* Styles for dhtml tabbed-pages */
.ontab {
	background-color: #ffae00;
	border-left: outset 2px #ff9900;
	border-right: outset 2px #808080;
	border-top: outset 2px #ff9900;
	border-bottom: solid 1px #d5d5d5;
	text-align: center;
	cursor: hand;
	font-weight: bold;
	color: #FFFFFF;
}
.offtab {
	background-color : #e5e5e5;
	border-left: outset 2px #E0E0E0;
	border-right: outset 2px #E0E0E0;
	border-top: outset 2px #E0E0E0;
	border-bottom: solid 1px #d5d5d5;
	text-align: center;
	cursor: hand;
	font-weight: normal;
}
.tabpadding {
}

.tabheading {
	background-color: #ffae00;
	text-align: left;
}

.pagetext {
	visibility: hidden;
	display: none;
	position: relative;
	top: 0;
}
h4 {
	color: #FF9900; font-family:  Verdana, Helvetica, sans-serif;
	font-size: 16px; font-weight: bold;
	}

h5 {
	color: #FF9900; font-family:  Verdana, Helvetica, sans-serif;
	font-size: 14px; font-weight: bold;
	}

h6 {
	color: #FF9900; font-family:  Verdana, Helvetica, sans-serif;
	font-size: 12px; font-weight: bold;
	}

/* Links */
a:link, a:visited {
	font-size: 10px; text-decoration: none;
	font-weight: bold;
	font-family: Verdana, Helvetica, sans-serif;
	}

a:hover {
	color: #a10000;	text-decoration: underline;
	}

/* For content item titles that are hyperlink instead of Read On */
a.contentpagetitle:link, a.contentpagetitle:visited {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
 	color: #a10000;
	text-align:left;
	}

a.contentpagetitle:hover {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	text-align:left;
	color: #a10000;
	text-decoration: underline;
	font-weight: bold;
	}

/* Horizontal Line */
hr {
	background: #C0C0C0; height:2px; border: 1px inset;
	}

hr.separator {
	background: #C0C0C0;
	height: 1px;
	width: 75px;
	border: 0px;
}

/* --Default Class Settings-- */

a.mainmenu:link, a.mainmenu:visited, a.mainlevel:link, a.mainlevel:visited {
	color: #a10000; font-family: Verdana,  Helvetica, serif;
	font-size: 10px;
	font-weight: bold;
	}

a.mainmenu:hover, a.mainlevel:hover {
	color: #a10000; text-decoration: underline;
	}

a.sublevel:hover {
	color: #a10000; text-decoration: none;
	}

a.sublevel:link, a.sublevel:visited {
	color: #a10000; font-family:  verdana, Helvetica, serif;
	font-weight: normal;
}

/* Content - Sections & Categories */
.contentpane {
	}

.contentpaneopen {
	background-color: #ffffff;
	border : 0px ridge #DCDCDC;
	}

.contentheading {
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
 	color: #333333;
	text-align:left;
	}

.contentpagetitle {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
 	color: #333333;
	text-align:left;
	}

table.contenttoc {
        color: #333300;
		background-color: #e0e0e0;
        }

table.contenttoc td {
        font-family:  Verdana, Helvetica, sans-serif;
        font-size: 8pt;
        font-weight: normal;
        text-align:left;
}

a.toclink:hover, a.toclink:visited, a.toclink:link {
	font-size: 9px;
	}

.contentdescription {
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	text-align: left;
	}

/* Links */
a.blogsection:link, a.blogsection:visited {
	font-size: 10px; color: #a10000; text-decoration: none;
	font-weight: bold;
	font-family:  Verdana, Helvetica, sans-serif;
	}

a.blogsection:hover {
	color: #a10000;	text-decoration: underline;
	}

a.weblinks:link, a.weblinks:visited {
	color: #a10000; text-decoration: none; font-weight: bold;
	font-size: 10px; 
	font-family:   Verdana, Helvetica, sans-serif;
	}

a.weblinks:hover {
	color: #a10000;	text-decoration: underline;
	}

a.readon:link, a.readon:visited {
	font-size: 10px; color: #a10000; text-decoration: none;
	font-weight: bold;
	}

a.readon:hover {
	color: #a10000;	text-decoration: none;
	}

table.moduletable {
	margin: 0px 0px 0px 0px;
	width: 95%;
	text-align: left;
	border-left: solid 0px #000000;
	border-right: solid 0px #000000;
	border-top: solid 0px #000000;
	border-bottom: solid 0px #000000;
	}

table.moduletable th {
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #333333;
	text-align: left;
	height: 18px;
	line-height: 18px;
	white-space: nowrap;
	width: 100%;
	background-color: #ffffff;
	}
	
table.moduletable td {
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: normal;
	}
	
.componentheading {
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
 	color: #333333;
	text-align:left;
	}

.button {
	font-family: Verdana, Helvetica, sans-serif;
	font-style: normal;
	font-weight: bold;
	font-size: 10px;
	color: #000000;
	border-style: solid;
	border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;
	}

.inputbox {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666666;
	background: #FFFFFF;
	border: 1px solid;
	}

/** category text format and links **/
.category {
	text-decoration: none; font-weight: bold;
	font-size: 10px; 
	font-family:  Verdana, Helvetica, sans-serif;
	}

a.category:link, a.category:visited {
	color: #a10000; font-weight: bold;
	}

a.category:hover {
	color: #a10000;
	}

.poll {
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
	line-height: 14px
	}

.sectiontableentry1, .contentpane {

	}

.sectiontableentry2 {

	}

.sectiontableheader {
	/*background-color : #999999;
	color : #FFFFFF; */
	font-weight : bold;
	}

.frontpageheader {
	font-size: 13px;
    color : #0077aa;
    font-weight : bold;
    }

.small {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 10px;
	color: #444444;
	text-decoration: none;
	font-weight: normal;
	}

.smalldark {
        font-family:  Verdana, Helvetica, sans-serif;
        font-size: 10px;
        color: #333333;
        text-decoration: none;
        font-weight: normal;
        }


.newsfeedheading {
        font-family:  Verdana, Helvetica, sans-serif;
        font-size: 12px;
        font-weight: bold;
        color: #333333;
        text-align:left;
        }

.newsfeeddate {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 10px;
	color: #808080;
	font-weight: normal;
}

.createdate {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 10px;
	color: #808080;
	text-decoration: none;
	font-weight: normal;
	}

.modifydate {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 10px;
	color: #808080;
	text-decoration: none;
	font-weight: normal;
	}

ul {
	margin: 0px 0px 0px 0px;
	}


.fase4rdf {
	font-family:  Verdana, Helvetica, sans-serif;
	font-size: 12px; color: #000000; font-weight: normal;
	}

a.fase4rdf:link {
	font-size: 12px; font-weight: normal; color: #FF9900;
	}

a.fase4rdf:hover {
	font-weight: bold; color: #808080;
	}

table.searchintro {
  	background-color: #FFFFFF;
	border: solid 1px #777777;
	}

table.contact {

	}

table.contact td.icons {
	background-color: #ffffff;
	}

table.contact td.details {
	background-color: #ffffff;
	font-size: 10px;
	font-weight: normal;
	font-family:  Verdana, Helvetica, sans-serif;
	}

.pagenav {
	font-weight: normal;
	color: #444444;
}

a.pagenav, a.pagenav:visited {
	color: #444444;
}

a.pagenav:hover {
	color: #444444;
}

.pagenavbar {
	
}

/* Content voting */
.content_rating {
	font-weight: normal;
	font-size: 8pt;
}

.content_vote {
	font-weight: normal;
	font-size: 8pt;
}

/* for modifying {moscode} output.  Don't set the colour! */
.moscode {
	background-color: #f0f0f0;
}

/* Text passed with mosmsg url parameter */
.message {
	font-family :  Verdana, Helvetica, sans-serif;
	font-weight: bold;
	font-size : 10pt;
	color : #444444;
	text-align: center;
}
.Estilo1 {
	color: #A10000;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.Estilo2 {
	color: #FFFFFF;
	font-weight: bold;
}
.link2c2 {
  /* Links para categorías y otros */
  
  font-family: Geneva, Arial, Helvetica, sans-serif;
  font-size: 12px;
  color: #555555;
  background-color:#CCCCCC;
  text-decoration: none;
  border-radius: 10px;  
    -moz-border-radius: 10px;  
    -webkit-border-radius: 10px; 
}

a:hover.link2c2 {
  font-family: Geneva, Arial, Helvetica, sans-serif;
  color: #555555;
  font-size:12px;
  background-color:#FFFF66;
  text-decoration: none;
}

.link2c3 {
  /* Links para categorías y otros */
  
  font-family: Geneva, Arial, Helvetica, sans-serif;
  font-size: 12px;
  color: #555555;
  background-color:#CCCCFF;
  text-decoration: underline;
  border-radius: 10px;  
    -moz-border-radius: 10px;  
    -webkit-border-radius: 10px;
	  
}

a:hover.link2c3 {
  font-family: Geneva, Arial, Helvetica, sans-serif;
  color: #555555;
  font-size:12px;
  background-color:#FFFF66;
}

-->
</style>
<!-- TemplateParam name="OptionalRegion1" type="boolean" value="true" -->


<style>


.menuskin{
position:absolute;
width:165px;
background-color:menu;
border:2px solid black;
font:normal 12px Verdana;
line-height:18px;
z-index:100;
visibility:hidden;
}

.menuskin a{
text-decoration:none;
color:black;
padding-left:10px;
padding-right:10px;
}

#mouseoverstyle{
background-color:highlight;
}

#mouseoverstyle a{
color:white;
}
#Layer1 {
	position:absolute;
	left:332px;
	top:165px;
	width:33px;
	height:27px;
	z-index:101;
}
#Layer2 {
	position:absolute;
	left:282px;
	top:42px;
	width:22px;
	height:26px;
	z-index:101;
	visibility: inherit;
}
#Layer3 {
	position:absolute;
	left:283px;
	top:131px;
	width:16px;
	height:24px;
	z-index:102;
	visibility: inherit;
}
#Layer4 {
	position:absolute;
	left:124px;
	top:41px;
	width:21px;
	height:20px;
	z-index:103;
	visibility: inherit;
}
#Layer5 {
	position:absolute;
	left:126px;
	top:130px;
	width:19px;
	height:19px;
	z-index:104;
	visibility: inherit;
}
#Layer6 {
	position:absolute;
	left:700px;
	top:130px;
	width:29px;
	height:31px;
	z-index:105;
	visibility: inherit;
}
#Layer7 {
	position:absolute;
	left:280px;
	top:304px;
	width:16px;
	height:17px;
	z-index:106;
	visibility: inherit;
}
#Layer8 {
	position:absolute;
	left:126px;
	top:304px;
	width:17px;
	height:20px;
	z-index:107;
	visibility: inherit;
}
#Layer9 {
	position:absolute;
	left:276px;
	top:358px;
	width:21px;
	height:19px;
	z-index:108;
	visibility: inherit;
}
.Estilo5 {color: #A10000}
body {
	background-color: #FFFFFF;
}
.Estilo10 {font-size: smaller}
-->
</style>

</head>
<body bgcolor="#FFFFFF">
<table width="100%" border="0" align="center">
  <tr>
    <td width="100%"><div align="center">
      <?php
			
			$idt = $_SESSION['t'];			
			
			if(!$idt){
				print('<br><br><font color="#FF0000"><strong>SE HA PRODUCIDO UN EROR</strong></font>');
				mysql_close($ident);
				echo "<script>document.location.href='index.php';</script>\n";			
			
			}else{

				include 'dbdata.php';
				include('dbfechas.php');
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);				
				$consultaTAG = "SELECT * FROM ".$etiquetas." WHERE idetiqueta=".$idt.";";
				$resultTAG = mysql_db_query($dbase, $consultaTAG);
				$lineaTAG = mysql_fetch_row($resultTAG);
				
				$consultaTOT = "SELECT Count(id) AS TotalF FROM ".$relacion." WHERE idetiqueta=".$idt.";";
				
/*				$consulta = "SELECT * FROM ".$frase." WHERE autor LIKE '%".$cadena."%' or frase LIKE '%".$cadena."%' AND tipo<>'prohibidas' ORDER BY votos DESC, fecha DESC;";
				
				$consultaTOT = "SELECT Count(id) AS TotalF FROM ".$frase." WHERE autor LIKE '%".$cadena."%' or frase LIKE '%".$cadena."%' AND tipo<>'prohibidas' ORDER BY votos DESC;";*/

				

				$resultTOT = mysql_db_query($dbase, $consultaTOT);
				$lineaTOT = mysql_fetch_row($resultTOT);
											
				print('<table width="100%" border="1" align="center">
				  <tr>
					<td width="100%" align="center">
					
					<img src="images/etiquetas.png" /><font color="#000000" size="3"><strong> '.$lineaTAG[1].'</strong> </font><br><br>Se han encontrado <strong>'.$lineaTOT[0].'</strong> coincidencias.</font>
					
					</td>
				  </tr>
				</table><br><br>');

/*				$result = mysql_db_query($dbase, $consulta);
				$linea = mysql_fetch_row($result);*/
				
				$filas = 10;
				$PAGtotal=ceil($lineaTOT[0]/$filas);
				$pag=$HTTP_GET_VARS["pag"];			
				if(!$pag){$pag=1;}
				
				if($pag>1){$pagANT=$pag-1;}
				else{$pagANT=$pag;}
				if($pag<$PAGtotal){$pagSIG=$pag+1;}
				else{$pagSIG=$pag;}
				print('<strong> Página '.$pag.' de '.$PAGtotal.'</strong><br>');
			
				print('<table width="100%" border="0" align="center">
  <tr>
    <td width="50%" align="left">');
				
				if($pag!=1){
					print('<a href="motortag.php?t='.$idt.'&pag=1"><< Primera</a> - ');
					print('<a href="motortag.php?t='.$idt.'&pag='.$pagANT.'">Pag. Anterior</a>');		
				}else{
					print('<< Primera - ');
					print('Pag. Anterior ');
				}
				
				print('</td>
    <td width="50%" align="center">');
				if($pag!=$PAGtotal){
					print('<a href="motortag.php?t='.$idt.'&pag='.$pagSIG.'"> Pag. Siguiente</a>');
					print(' - <a href="motortag.php?t='.$idt.'&pag='.$PAGtotal.'"> Última >></a>');	
				}else{
					print(' Pag. Siguiente');
					print(' - Última >>');	
				}
				print('</td>
  </tr>
</table>');
				
//----------------------------------------------------------------------------------------------------------------------------------
// AQUI EMPIEZA TODO EL MATUTE -----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------

print('<table width="100%" border="1"><tr><td><strong>Frase</strong></td><td align="center"><strong>Votar </strong></font></td></tr>');

	$tags = $_SESSION['arraytags'];
	
	foreach ($tags as $value) {
		$consulta = "SELECT id, frase,votos, votostot FROM ".$frase." WHERE id=".$value.";";	
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);
		
		print('<tr><td></td></tr><tr><td align="left"><a href="mostrarfrase.php?ide='.$linea[0].'" target="_parent"><font color="#000000"><strong>'.$linea[1].'</strong></font></a><br>');
		//-----------------------------------------------------------------------------------------------------------------------------
print('<img src="images/etiquetas.png" width="20" height="20" />');

	$consulta2 = "SELECT * FROM ".$relacion." WHERE idfrase=".$linea[0].";";
	$result2 = mysql_db_query($dbase, $consulta2);

	while($linea2 = mysql_fetch_row($result2)){
		$consulta3 = "select * from ".$etiquetas." where idetiqueta=".$linea2[2].";";
		$result3 = mysql_db_query($dbase, $consulta3);
		$linea3 = mysql_fetch_row($result3);

		$salida[$linea3[1]] = ' <a href="buscatag.php?t='.$linea2[2].'" class="link2c2" target="_parent">'.$linea3[1].'</a> ';
	}
	
	ksort($salida);
	foreach ($salida as $value) {
		echo $value;
	}

	unset($salida);
//---------------------------------------------------------------------------------------------------	
	
		
					print('</td><td bordercolor="#FFFFFF"><p align="center">');
					
					
					$item=$HTTP_GET_VARS['ide'];
					$itemsVotados=$_SESSION['itemsVotados'];
					$cita=$linea[0];
					if($itemsVotados[$cita]!=2){
					
					
					print('<table border="0" >
  <tr>
    <td align="center"><font color="#0000FF"><strong>(');
	
	if($linea[1]>0){
		print('+'.$linea[2]);
	}else{
		print($linea[2]);	
	}
	
	
	print(')</strong></font></td>
  </tr>
  <tr>
    <td align="center"><table border="0">
  <tr>
    <td>
	<a href="votos.php?cat=tags&ide='.$linea[0].'&t='.$idt.'&pag='.$pag.'&tp=2"><img src="/images/up.gif" width="20" height="20" border="0" /></a></td><td>');
											
					print('<a href="votos.php?cat=tags&ide='.$linea[0].'&t='.$idt.'&pag='.$pag.'&tp=1"><img src="/images/dw.gif" width="20" height="20" border="0" /></a></td>
  </tr></table>
</td>
  </tr>
    <tr>
    <td align="center"><font color="#555555"><strong><em>('.$linea[3].')</em></strong></font></td>
  </tr>
</table>

');
					
					}else{
								print('<table border="0" align="center">
  <tr>
    <td align="center"><font color="#0000FF"><strong>(');
	
	if($linea[1]>0){
		print('+'.$linea[2]);
	}else{
		print($linea[2]);	
	}
	
	
	print(')</strong></font></td>
  </tr>
  <tr>
     <td align="center"><img src="/images/no.gif" width="20" height="20" border="0" />
</td>
  </tr>
    <tr>
    <td align="center"><font color="#555555"><strong><em>('.$linea[3].')</em></strong></font></td>
  </tr>
</table>

');
					
					}
					print('</p></td></tr>');
		
		
	}
			

			//$consulta = "SELECT id, frase,votos, votostot FROM ".$frase." WHERE id IN (SELECT idfrase FROM ".$relacion." WHERE idetiqueta=".$idt.") LIMIT ".(($pag-1)*$filas).",".$filas.";";
				
						
		
					print('</table>');

				if($pag!=1){			
					print('<a href="motortag.php?t='.$idt.'&pag='.$pagANT.'"> Pag. Anterior </a>');
				}else{
					print(' Pag. Anterior ');
				}
				print('<strong> - Pagina '.$pag.' de '.$PAGtotal.' - </strong>');
				if($pag!=$PAGtotal){
					 print('<a href="motortag.php?t='.$idt.'&pag='.$pagSIG.'"> Pag. Siguiente </a><hr>');
				 }else{
					 print(' Pag. Siguiente <hr>');
				 }
				 	
				for($x=1;$x<=$PAGtotal;$x++){
					if($x!=$pag){
						print('<font color="#0000FF"> -<a href="motortag.php?t='.$idt.'&pag='.$x.'">['.$x.']</a>-</font>');
					}else{
						print('<font  color="#0000FF">-<font  color="#FF0000">'.$x.'</font>-</font>');
					}
				}
			}
			
	mysql_close($ident);
?>
    </div></td>
  </tr>
</table>
</body>
</html>