<?php
	session_start();
	session_register('itemsVotados');
	session_register('busqueda');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/general.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<TITLE>citasgraciosas.com ..::.. Recopilaci&oacute;n de Citas y Frases Graciosas</TITLE>
<?php
print('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>');
 include('keyw.php');
 include('conta_descripcion.php');
 ?>

<style type="text/css">

<!--
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
  /* Links para categor�as y otros */
  
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
  /* Links para categor�as y otros */
  
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
<!-- InstanceParam name="OptionalRegion1" type="boolean" value="true" -->


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
	background-image: url(images/fnd.png);
	background-color: #FFFF99;
}
.Estilo10 {font-size: smaller}
-->
</style>

<script language="JavaScript1.2">

//Pop-it menu- By Dynamic Drive
//For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
//This credit MUST stay intact for use

var linkset=new Array()
//SPECIFY MENU SETS AND THEIR LINKS. FOLLOW SYNTAX LAID OUT

linkset[0]='<div class="menuitems"><a href="http://www.citasgraciosas.com/main.php?ord=Fecha">Ordenado por FECHA</a></div>'
linkset[0]+='<div class="menuitems"><a href="http://www.citasgraciosas.com/main.php?ord=Votos">Ordenado por VOTOS</a></div>'

////No need to edit beyond here

var ie4=document.all&&navigator.userAgent.indexOf("Opera")==-1
var ns6=document.getElementById&&!document.all
var ns4=document.layers

function showmenu(e,which){

if (!document.all&&!document.getElementById&&!document.layers)
return

clearhidemenu()

menuobj=ie4? document.all.popmenu : ns6? document.getElementById("popmenu") : ns4? document.popmenu : ""
menuobj.thestyle=(ie4||ns6)? menuobj.style : menuobj

if (ie4||ns6)
menuobj.innerHTML=which
else{
menuobj.document.write('<layer name=gui bgColor=#E6E6E6 width=165 onmouseover="clearhidemenu()" onmouseout="hidemenu()">'+which+'</layer>')
menuobj.document.close()
}

menuobj.contentwidth=(ie4||ns6)? menuobj.offsetWidth : menuobj.document.gui.document.width
menuobj.contentheight=(ie4||ns6)? menuobj.offsetHeight : menuobj.document.gui.document.height
eventX=ie4? event.clientX : ns6? e.clientX : e.x
eventY=ie4? event.clientY : ns6? e.clientY : e.y

//Find out how close the mouse is to the corner of the window
var rightedge=ie4? document.body.clientWidth-eventX : window.innerWidth-eventX
var bottomedge=ie4? document.body.clientHeight-eventY : window.innerHeight-eventY

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<menuobj.contentwidth)
//move the horizontal position of the menu to the left by it's width
menuobj.thestyle.left=ie4? document.body.scrollLeft+eventX-menuobj.contentwidth : ns6? window.pageXOffset+eventX-menuobj.contentwidth : eventX-menuobj.contentwidth
else
//position the horizontal position of the menu where the mouse was clicked
menuobj.thestyle.left=ie4? document.body.scrollLeft+eventX : ns6? window.pageXOffset+eventX : eventX

//same concept with the vertical position
if (bottomedge<menuobj.contentheight)
menuobj.thestyle.top=ie4? document.body.scrollTop+eventY-menuobj.contentheight : ns6? window.pageYOffset+eventY-menuobj.contentheight : eventY-menuobj.contentheight
else
menuobj.thestyle.top=ie4? document.body.scrollTop+event.clientY : ns6? window.pageYOffset+eventY : eventY
menuobj.thestyle.visibility="visible"
return false
}

function contains_ns6(a, b) {
//Determines if 1 element in contained in another- by Brainjar.com
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function hidemenu(){
if (window.menuobj)
menuobj.thestyle.visibility=(ie4||ns6)? "hidden" : "hide"
}

function dynamichide(e){
if (ie4&&!menuobj.contains(e.toElement))
hidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
hidemenu()
}

function delayhidemenu(){
if (ie4||ns6||ns4)
delayhide=setTimeout("hidemenu()",500)
}

function clearhidemenu(){
if (window.delayhide)
clearTimeout(delayhide)
}

function highlightmenu(e,state){
if (document.all)
source_el=event.srcElement
else if (document.getElementById)
source_el=e.target
if (source_el.className=="menuitems"){
source_el.id=(state=="on")? "mouseoverstyle" : ""
}
else{
while(source_el.id!="popmenu"){
source_el=document.getElementById? source_el.parentNode : source_el.parentElement
if (source_el.className=="menuitems"){
source_el.id=(state=="on")? "mouseoverstyle" : ""
}
}
}
}

if (ie4||ns6)
document.onclick=hidemenu

</script>
<!--<script language="JavaScript1.2">
	window.open('mensaje.php', 'noimporta', 'width=550, height=300, scrollbars=NO, dependent="YES"')
</script>
-->

<!-- A�ade esta etiqueta en la cabecera o delante de la etiqueta body. -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'es'}
</script>

</head>

<body onload="">

 <table align="center">
	<tr>
	  <td width="180" class="td_menu">

		  <table class="maintable" cellspacing="0" cellpadding="0" >
			  <tr>
				  <td class="td1_1"></td>
				  <td class="td1_2"></td>
				  <td class="td1_3"></td>
			  </tr>
			  <tr>
				  <td class="td2_1"></td>
				  <td class="td2_2_logo">
					   Bienvenido a<br> 
					   <b> citasgraciosas.com</b><br> 
					   <?php include('conta.php'); ?>					   <br></td>
				  <td class="td2_3"></td>
			  </tr>
			  <tr>
				  <td class="td3_1"></td>
				  <td class="td3_2"></td>
				  <td class="td3_3"></td>
			  </tr>
		  </table>		</td>
		<td width="425">
		<div align="left"><img src="images/titulo.png" width="410" height="62" /></div>
	  <div align="right"><a href="https://twitter.com/citasgraciosas" class="twitter-follow-button" data-lang="es">Segui @citasgraciosas</a>
<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script></div>
	  
	   </td>
        <td width="154" class="td_menu"><table class="maintable" cellspacing="0" cellpadding="0" >
          <tr>
            <td class="td1_1"></td>
            <td class="td1_2"></td>
            <td class="td1_3"></td>
          </tr>
          <tr>
            <td class="td2_1"></td>
            <td class="td2_2_logo"><div align="center">
			<?php
			
				include 'banerpropio.php';
			
			?></div></td>
            <td class="td2_3"></td>
          </tr>
          <tr>
            <td class="td3_1"></td>
            <td class="td3_2"></td>
            <td class="td3_3"></td>
          </tr>
        </table>
        <td width="170" class="td_menu"><table class="maintable" cellspacing="0" cellpadding="0" >
          <tr>
            <td class="td1_1"></td>
            <td class="td1_2"></td>
            <td class="td1_3"></td>
          </tr>
          <tr>
            <td class="td2_1"></td>
            <td class="td2_2_logo"><div align="center">
            <a href="http://www.champinet.com/" target="_blank"><img src="images/banner_champinet.gif" alt="champinet.com" width="130" height="50" border="0" /></a>
            </div></td>
            <td class="td2_3"></td>
          </tr>
          <tr>
            <td class="td3_1"></td>
            <td class="td3_2"></td>
            <td class="td3_3"></td>
          </tr>
        </table>        </tr>
	<tr>
	  <td class="td_main">

			<br>
            <table class="maintable" cellspacing="0" cellpadding="0" >
              <tr>
                <td class="td1_1"></td>
                <td class="td1_2"></td>
                <td class="td1_3"></td>
              </tr>
              <tr>
                <td class="td2_1"></td>
                <td class="td2_2_logo"><br /><table width="90%" border="1" align="center">
                    <tr>
                      <td width="100%" onmouseover="this.style.color='white'; this.style.background='#3399FF'; this.style.cursor='pointer'"
     onmouseout="this.style.color='#555555'; this.style.background='white';" onclick="document.location='http://www.citasgraciosas.com/'" align="center"><strong>Inicio</strong></td>
                    </tr>
                  </table>                  
                  <table width="90%" border="1" align="center">
                    <tr>
                      <td width="100%" onmouseover="this.style.color='white'; this.style.background='#3399FF'; this.style.cursor='pointer'"
     onmouseout="this.style.color='#555555'; this.style.background='white';" onclick="document.location='http://www.citasgraciosas.com/main.php?ord=Fecha'" align="center"><div id="popmenu" class="menuskin" onMouseover="clearhidemenu();highlightmenu(event,'on')" onMouseout="highlightmenu(event,'off');dynamichide(event)">
</div>
          <div align="center" onMouseover="showmenu(event,linkset[0]);this.style.color='white'; " onMouseout="delayhidemenu();this.style.color='#555555'"><strong>Ver Todo</strong>                        </div></td>
                    </tr>
                  </table>
                  <table width="90%" height="0%" border="1" align="center">
                    <tr>
                      <td width="100%" onmouseover="this.style.color='white'; this.style.background='#3399FF'; this.style.cursor='pointer'"
     onmouseout="this.style.color='#555555'; this.style.background='white';" onclick="document.location='http://www.citasgraciosas.com/envia.php'" align="center"><strong>Enviar Frase</strong></td>
                    </tr>
                  </table>
                  <br />
				 
				 <div align="center"><a href="http://fusion.google.com/add?moduleurl=http%3A//www.citasgraciosas.com/Gcitasgraciosas.xml" target="_blank"><img src="http://buttons.googlesyndication.com/fusion/add.gif" width="104" height="17" border="0" alt="�A�ade un gadget de citasgraciosas en tu iGoogle!"></a>				  </div>
<br /> 
</td>
                <td class="td2_3"></td>
              </tr>
              <tr>
                <td class="td3_1"></td>
                <td class="td3_2"></td>
                <td class="td3_3"></td>
              </tr>
            </table><br>
            <table class="maintable" cellspacing="0" cellpadding="0" >
              <tr>
                <td height="14" class="td1_1"></td>
                <td class="td1_2"></td>
                <td class="td1_3"></td>
              </tr>
              <tr>
                <td class="td2_1"></td>
                <td class="td2_2_menu"><span class="td2_2_logo">
                  <?php include('aleatoria.php'); 
					//print('<iframe scrolling="no" width="100%" height="100%" src="aleatoria.php" frameborder="1"></iframe>');                
                  ?>
                </span><br /></td>
                <td class="td2_3"></td>
              </tr>
              <tr>
                <td class="td3_1"></td>
                <td class="td3_2"></td>
                <td class="td3_3"></td>
              </tr>
            </table><br />
            <table class="maintable" cellspacing="0" cellpadding="0" >
              <tr>
                <td height="14" class="td1_1"></td>
                <td class="td1_2"></td>
                <td class="td1_3"></td>
              </tr>
              <tr>
                <td class="td2_1"></td>
                <td class="td2_2_menu"><span class="td2_2_logo"><span class="Estilo1"><img src="imgmanos/cal.png" width="22" height="20" /> Frase del d&iacute;a:</span> <br />
                    <?php include('frasedeldia.php'); ?>
                </span><br /></td>
                <td class="td2_3"></td>
              </tr>
              <tr>
                <td class="td3_1"></td>
                <td class="td3_2"></td>
                <td class="td3_3"></td>
              </tr>
            </table>
            <br>
            <table class="maintable" cellspacing="0" cellpadding="0" >
              <tr>
                <td height="14" class="td1_1"></td>
                <td class="td1_2"></td>
                <td class="td1_3"></td>
              </tr>
              <tr>
                <td class="td2_1"></td>
                <td class="td2_2_menu" align="center"><div align="left"><span class="Estilo1"><img src="images/etiquetas.png" alt="Etiquetas" width="20" height="20" /><strong>Nube de etiquetas</strong></span></div>
                <br /><?php include 'nube.php'; ?></td>
                <td class="td2_3"></td>
              </tr>
              <tr>
                <td class="td3_1"></td>
                <td class="td3_2"></td>
                <td class="td3_3"></td>
              </tr>
            </table>      </td>
	  <td class="td_main"><br>
<table class="maintable" cellspacing="0" cellpadding="0" >
				<tr>
					<td class="td1_1"></td>
					<td class="td1_2"></td>
					<td class="td1_3"></td>
				</tr>
				<tr>
					<td class="td2_1"></td>
				  <td class="td2_2_main"><!-- InstanceBeginEditable name="ventana" -->
      <div align="center">
       
        <?php

			print('<p>&nbsp;</p>');
			
			$cadena=$_REQUEST[txt];
			//echo $tipo;
			if(!$cadena){$cadena= $_SESSION['busqueda'];
			}else{$_SESSION['busqueda'] = $cadena;}
			
			print('	 <table width="90%" border="1" align="center">
				  <tr>
					<td width="100%"><form method="post" action="busca.php" target="_self">
						<div align="center"><strong>Buscar en citasgraciosas.com</strong><br />
							<input name="txt" type="text" value="'.$cadena.'" size="25" />
							<input type="submit" name="Submit2" value="Busca!" /><br />
															 </div>
					  <br />
					</form></td>
				  </tr>
				</table>');
			
			if($cadena!="" && (strlen($cadena)>=3)){
				include 'dbdata.php';
				include('dbfechas.php');
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);				
		
				$consultaTOT = "SELECT Count(id) AS TotalF FROM ".$frase." WHERE autor LIKE '%".$cadena."%' or frase LIKE '%".$cadena."%' AND tipo<>'prohibidas' ORDER BY votos DESC;";
				
				$consulta = "SELECT * FROM ".$frase." WHERE autor LIKE '%".$cadena."%' or frase LIKE '%".$cadena."%' AND tipo<>'prohibidas' ORDER BY votos DESC, fecha DESC;";
				

				$resultTOT = mysql_db_query($dbase, $consultaTOT);
				$lineaTOT = mysql_fetch_row($resultTOT);
				print('<font color="#000000">Buscar el texto: <strong>*'.$cadena.'*</strong> <br>Se han encontrado <strong>'.$lineaTOT[0].'</strong> coincidencias.</font><br><br>');

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
				print('<strong> P�gina '.$pag.' de '.$PAGtotal.'</strong><br>');
			
				print('<table width="90%" border="0" align="center">
  <tr>
    <td width="50%" align="left">');
				
				if($pag!=1){
					print('<a href="busca.php?pag=1"><< Primera</a> - ');
					print('<a href="busca.php?pag='.$pagANT.'">Pag. Anterior</a>');		
				}else{
					print('<< Primera - ');
					print('Pag. Anterior ');
				}
				
				print('</td>
    <td width="50%" align="right">');
				if($pag!=$PAGtotal){
					print('<a href="busca.php?pag='.$pagSIG.'"> Pag. Siguiente</a>');
					print(' - <a href="busca.php?pag='.$PAGtotal.'"> �ltima >></a>');	
				}else{
					print(' Pag. Siguiente');
					print(' - �ltima >>');	
				}
				print('</td>
  </tr>
</table>');
				
//----------------------------------------------------------------------------------------------------------------------------------
// AQUI EMPIEZA TODO EL MATUTE -----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------

				$consulta = "SELECT * FROM ".$frase." WHERE autor LIKE '%".$cadena."%' or frase LIKE '%".$cadena."%' AND tipo<>'prohibidas' ORDER BY votos DESC, fecha DESC LIMIT ".(($pag-1)*$filas).",".$filas.";";
				$result = mysql_db_query($dbase, $consulta);
				print('<table border="1"><tr><td><strong>Frase</strong></td><td align="center"><strong>Compartir</strong></td><td align="center"><strong>Votar </strong></font></td></tr>');
						
		
				while($linea = mysql_fetch_row($result)){
		print('<tr><td></td></tr><tr><td><p align="left"><a href="mostrarfrase.php?ide='.$linea[0].'"><font color="#000000"><strong>'.$linea[2].'</strong></font></a></p></td>');
	
	if(strlen($linea[2])>100){
	$tempstring = substr($linea[2], 0, 97);
	$tempstring = $tempstring."...";
}else{
	$tempstring = $linea[2];
}
		
						//	print('</td><td>');
					print('</td><td bordercolor="#FFFFFF">');
	print('  <div id="fb-root"></div><script src="http://connect.facebook.net/es_ES/all.js#appId=133301816766445&amp;xfbml=1"></script><fb:like href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$linea[0].'" send="false" layout="button_count" width="55" show_faces="false" font=""></fb:like><br>  <a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.citasgraciosas.com/mostrarfrase.php?ide='.$linea[0].'" data-text="'.$tempstring.'" data-count="horizontal" data-via="citasgraciosas" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><br><!-- A�ade esta etiqueta donde quieras colocar el bot�n +1 -->
<g:plusone href="http://www.citasgraciosas.com/mostrarfb.php?ide='.$linea[0].'"></g:plusone><br><br>');				

/*print('<input type="image" src="images/info.gif" alt="Fecha de inserci�n: '.cambiaf_a_normal($linea[3]).'
Categor�a: '.$linea[4].'
Autor: '.$linea[5].'"width="18" height="20" onClick="');

print("javascript:window.open('info.php?ide=".$linea[0]."', 'noimporta', 'width=550, height=300, scrollbars=NO')");
print('">');*/
					
					print('</td><td bordercolor="#FFFFFF"><p align="center">');
					
					
					$item=$HTTP_GET_VARS['ide'];
					$itemsVotados=$_SESSION['itemsVotados'];
					$cita=$linea[0];
					if($itemsVotados[$cita]!=2){
					
					print('<table border="0" >
  <tr>
    <td align="center"><font color="#0000FF"><strong>(');
	
	if($linea[1]>0){
		print('+'.$linea[1]);
	}else{
		print($linea[1]);	
	}
	
	
	print(')</strong></font></td>
  </tr>
  <tr>
    <td align="center"><table border="0">
  <tr>
    <td>
	<a href="votos.php?ide='.$linea[0].'&pag='.$pag.'&tp=2"><img src="/images/up.gif" width="20" height="20" border="0" /></a></td><td>');
											
					print('<a href="votos.php?ide='.$linea[0].'&pag='.$pag.'&tp=1"><img src="/images/dw.gif" width="20" height="20" border="0" /></a></td>
  </tr></table>
</td>
  </tr>
    <tr>
    <td align="center"><font color="#555555"><strong><em>('.$linea[6].')</em></strong></font></td>
  </tr>
</table>

');
					
					}else{
								print('<table border="0" align="center">
  <tr>
    <td align="center"><font color="#0000FF"><strong>(');
	
	if($linea[1]>0){
		print('+'.$linea[1]);
	}else{
		print($linea[1]);	
	}
	
	
	print(')</strong></font></td>
  </tr>
  <tr>
     <td align="center"><img src="/images/no.gif" width="20" height="20" border="0" />
</td>
  </tr>
    <tr>
    <td align="center"><font color="#555555"><strong><em>('.$linea[6].')</em></strong></font></td>
  </tr>
</table>

');
					
					}
					print('</p></td></tr>');
				}
					print('</table>');

				if($pag!=1){			
					print('<a href="busca.php?pag='.$pagANT.'"> Pag. Anterior </a>');
				}else{
					print(' Pag. Anterior ');
				}
				print('<strong> - Pagina '.$pag.' de '.$PAGtotal.' - </strong>');
				if($pag!=$PAGtotal){
					 print('<a href="busca.php?pag='.$pagSIG.'"> Pag. Siguiente </a><hr>');
				 }else{
					 print(' Pag. Siguiente <hr>');
				 }
				 	
				for($x=1;$x<=$PAGtotal;$x++){
					if($x!=$pag){
						print('<font color="#0000FF"> -<a href="busca.php?pag='.$x.'">['.$x.']</a>-</font>');
					}else{
						print('<font  color="#0000FF">-<font  color="#FF0000">'.$x.'</font>-</font>');
					}
				}
			
				/*if(!$linea[0]){print('<table width="100%" border="1"><tr><td><strong><font color="#FF0000"><p align="center">No hay resultados a mostrar...</p></font></strong></td></tr></table>');}
				else{				print('<table width="100%" border="1"><tr><td bordercolor="#FFFFFF"><font color="#FF0000"><strong>VOTOS</strong></font></td><td bordercolor="#FFFFFF"><strong>FRASE</strong></td><td align="center"><strong>Info.</strong></td><td align="center"><strong>Votar </strong></font></td></tr>');
				
				print('<tr><td><p align="center"><font color="#0000FF"><strong>'.$linea[1].'</strong></font></p></td><td><p align="left"><strong>'.$linea[2].'</strong></p></td>');
								print('</td><td bordercolor="#FFFFFF">');
					
print('<input type="image" src="images/info.gif" alt="Fecha de inserci�n: '.cambiaf_a_normal($linea[3]).'
Categor�a: '.$linea[4].'
Autor: '.$linea[5].'"width="18" height="20" onClick="');

print("javascript:window.open('info.php?ide=".$linea[0]."', 'noimporta', 'width=550, height=300, scrollbars=NO')");
print('">');    print('</td><td bordercolor="#FFFFFF">');
					$cita=$linea[0];
					$itemsVotados=$_SESSION['itemsVotados'];
					if($itemsVotados[$cita]!=2){
					
					print('<table border="0">
  <tr>
    <td>
	<a href="votos.php?ide='.$linea[0].'&string='.$cadena.'&tp=2"><img src="/images/up.gif" width="20" height="20" border="0" /></a></td><td>');
											
					print('<a href="votos.php?ide='.$linea[0].'&string='.$cadena.'&tp=1"><img src="/images/dw.gif" width="20" height="20" border="0" /></a></td>
  </tr>
</table>');
					
					}else{
						print('<img src="/images/no.gif" width="20" height="20" border="0" />');
					
					}
					print('</td></tr>');
				
				
				while($linea = mysql_fetch_row($result)){
 					print('<tr><td><p align="center"><font color="#0000FF"><strong>'.$linea[1].'</strong></font></p></td><td><p align="left"><strong>'.$linea[2].'</strong></p></td>');
					
					print('<td bordercolor="#FFFFFF">');
					
			print('<input type="image" src="images/info.gif" alt="Fecha de inserci�n: '.cambiaf_a_normal($linea[3]).'
Categor�a: '.$linea[4].'
Autor: '.$linea[5].'"width="18" height="20" onClick="');

print("javascript:window.open('info.php?ide=".$linea[0]."', 'noimporta', 'width=525, height=300, scrollbars=NO')");
print('">');
					
					print('</td><td bordercolor="#FFFFFF">');
					$cita=$linea[0];
					$itemsVotados=$_SESSION['itemsVotados'];
					if($itemsVotados[$cita]!=2){
					
					print('<table border="0">
  <tr>
    <td>
	<a href="votos.php?ide='.$linea[0].'&string='.$cadena.'&tp=2"><img src="/images/up.gif" width="20" height="20" border="0" /></a></td><td>');
											
					print('<a href="votos.php?ide='.$linea[0].'&string='.$cadena.'&tp=1"><img src="/images/dw.gif" width="20" height="20" border="0" /></a></td>
  </tr>
</table>');
					
					}else{
						print('<img src="/images/no.gif" width="20" height="20" border="0" />');
					
					}}
					
					
				print('</td></tr></table>');}
*/
			}else{
				print('<br><br><font color="#FF0000"><strong>No se ha introducido ningun texto para buscar<br>o es demasiado corto...<br><br></strong><em>(minimo 3 caracteres)</em></font>');
			}
			
	mysql_close($ident);
?>
      </div>
      <!-- InstanceEndEditable --></td>
					<td class="td2_3"></td>
				</tr>
				<tr>
					<td height="2" class="td3_1"></td>
					<td class="td3_2"></td>
					<td class="td3_3"></td>
				</tr>
		</table>
		<br />	
		<div align="center">
			    <strong>citasgraciosas.com 2005-<?php echo date('Y') ?><span class="Estilo5"> Juanuxx y Alex</span>. <br />
		          <span class="icons Estilo10">Powered by: </span><span class="icons "><span class="Estilo11 Estilo11"><a href="http://www.champinet.com/" target="_blank"><font color="#9900FF">CHAMPINET</font></a><br /><br />
				  <table border="0" align="center">
				    <tr>
				      <td><table width="99" border="0" align="center">
				        <tr>
				          <td width="20"><div align="center"><a href="http://feed.citasgraciosas.com"><img src="images/rss.png" alt="Versi&oacute;n m&oacute;vil" width="20" height="20" border="0" /></a></div></td>
				          <td width="45"><div align="center"><a href="http://m.citasgraciosas.com"><img src="images/movil.png" alt="Versi&oacute;n m&oacute;vil" width="20" height="20" border="0" /></a></div></td>
				          <td width="20"><a href="http://gestion.citasgraciosas.com" target="_blank"><img src="images/gest.gif" alt="" width="20" height="20" border="0" /></a></td>
			            </tr>
			          </table></td>
			        </tr>
				    <tr>
				      <td align="center"><a href="http://feeds.feedburner.com/citasgraciosas" target="_blank"><img src="images/feedburner_logo.png" width="100" height="20" border="0"/></a></td>
			        </tr>
	    </table>
	  <td class="td_main"><br />
	    <table class="maintable" cellspacing="0" cellpadding="0" >
          <tr>
            <td class="td1_1"></td>
            <td class="td1_2"></td>
            <td class="td1_3"></td>
          </tr>
          <tr>
            <td class="td2_1"></td>
            <td class="td2_2_logo"><span class="td2_2_main"> <br />
                  <?php include('categoriaslado.php'); ?>
            </span><br /></td>
            <td class="td2_3"></td>
          </tr>
          <tr>
            <td class="td3_1"></td>
            <td class="td3_2"></td>
            <td class="td3_3"></td>
          </tr>
        </table>
        <br />
      </td>
	  <td class="td_main"><br />
	

			<table class="maintable" cellspacing="0" cellpadding="0" >
        <tr>
          <td class="td1_1"></td>
          <td class="td1_2"></td>
          <td class="td1_3"></td>
        </tr>
        <tr>
          <td class="td2_1"></td>
          <td class="td2_2_logo" align="center">
	<div id="fb-root"></div><script src="http://connect.facebook.net/es_ES/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/citasgraciosascom/147416158668105" width="155" show_faces="true" border_color="" stream="false" header="true"></fb:like-box><br /><br />
		 <script type="text/javascript"><!--
google_ad_client = "pub-1408828158666630";
//vertical
google_ad_slot = "9104475000";
google_ad_width = 120;
google_ad_height = 600;
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>	<br /><br /></td>
          <td class="td2_3"></td>
        </tr>
        <tr>
          <td class="td3_1"></td>
          <td class="td3_2"></td>
          <td class="td3_3"></td>
        </tr>
      </table>
	  <br />
	  <p>&nbsp;</p></td>
	</tr>
</table>
<br />
<div align="center">
  <table class="maintable" cellspacing="0" cellpadding="0" >
    <tr>
      <td class="td1_1"></td>
      <td class="td1_2"></td>
      <td class="td1_3"></td>
    </tr>
    <tr>
      <td class="td2_1"></td>
      <td class="td2_2_logo" align="center"><script type="text/javascript"><!--
google_ad_client = "pub-1408828158666630";
//728x15, creado 15/01/08
google_ad_slot = "7768876208";
google_ad_width = 728;
google_ad_height = 15;
//--></script>
          <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
          <br />
          <br />
          <script type="text/javascript"><!--
google_ad_client = "pub-1408828158666630";
/* 728x90, creado 31/07/08 */
google_ad_slot = "5870630611";
google_ad_width = 728;
google_ad_height = 90;
//-->
                </script>
          <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
      </td>
      <td class="td2_3"></td>
    </tr>
    <tr>
      <td height="3" class="td3_1"></td>
      <td class="td3_2"></td>
      <td class="td3_3"></td>
    </tr>
  </table>
</div>
</p>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3597745-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
<!-- InstanceEnd --></html>