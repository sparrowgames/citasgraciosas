<?php
	session_register('t');
	session_register('arraytags');
	session_start();
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
	background-image: url();
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
.Estilo1 {
	color: #FF0000;
	font-size: 14px;
}
.Estilo2 {color: #FF0000; font-size: 12px; }
-->
</style>

</head>
<body>
<p align="center" class="Estilo1"><?php

/*function Redirect($ToURL){
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"> <html><head><meta http-equiv="Content-Type" content
="text/html; charset=iso-8859-1"> <meta http-equiv="refresh" content="0; url
=' . $ToURL . '">';
//<title>Redirigiendo...</title></head><body><div align
//="center"> <B>Redirigiendo,</B><br><B> espera un momento...</B> </div></body></html>';
      exit;
}*/

	$idt = $_SESSION['t'];
	$pag = $HTTP_GET_VARS['pag'];
	$filas = 10;
	$PAGtotal=ceil($lineaTOT[0]/$filas);
	$pag=$HTTP_GET_VARS["pag"];			
	if(!$pag){$pag=1;}
	
	if($pag>1){$pagANT=$pag-1;}
	else{$pagANT=$pag;}
	if($pag<$PAGtotal){$pagSIG=$pag+1;}
	else{$pagSIG=$pag;}
	
	include 'dbdata.php';
	
	$identnube = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consultanube = "SELECT * FROM ".$relacion." WHERE idetiqueta=".$idt." LIMIT ".(($pag-1)*$filas).",".$filas.";";
	$resultnube = mysql_db_query($dbase, $consultanube);
	
	while($lineanube = mysql_fetch_row($resultnube)){
				$arraytemp[$lineanube[0]] = $lineanube[1];
				$_SESSION['arraytags'] = $arraytemp;
				
			
	}

			
		echo "<script>document.location.href='motort.php?pag=".$pag."';</script>\n";

//				Redirect('motort.php?t='.$idt.'&pag='.$pag);
			
?>
</p>
</body>

</html>
