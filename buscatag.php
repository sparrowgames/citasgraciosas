<?php
	session_start();
	session_register('itemsVotados');
	session_register('arraytags');
	session_register('t');

	
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

<?php

	$_SESSION['t']=$HTTP_GET_VARS['t'];
	unset($_SESSION['arraytags']);
	print('<div align="center"><iframe width="400" frameborder="0" height="1000" src="motortag.php" allowtransparency="no" scrolling="auto"></iframe>');
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