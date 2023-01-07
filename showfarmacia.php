<? 

require_once("conect.php");
require_once("fileupload-class.php");
require_once("imageup.php");
if ($_GET)
{
$id = $_GET['id'];
$contactanos = $_GET['contactanos'];
$catalogo = $_GET['catalogo'];
$ofertas = $_GET['ofertas'];
$turnos = $_GET['turnos'];
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso2=mysql_query("SELECT * FROM farmacias WHERE id=".$id);
if($renglon2=mysql_fetch_assoc($recurso2))
{



?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="imagetoolbar" content="no">
	<SCRIPT LANGUAGE="JavaScript">
<!--
var ORDER= "";
var SERVER= "";
var CONTENTGROUP= "";
//-->
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript">
<!--
var W="tagver=3&SiteId=99654&Sid=005-01-8-27-233637-99654&Tz=-600&firstwkday=monday&Edition=enterprise&Button=";
W+="&server="+escape(SERVER);
W+="&order="+escape(ORDER);
W+="&Group="+escape(CONTENTGROUP);
W+="&browserDate="+escape(new Date());
W+="&title="+escape(document.title);
W+="&url="+escape(window.document.URL);
W+="&referrer="+escape(window.document.referrer);
W+="&appname="+escape(navigator.appName);
W+="&appversion="+escape(navigator.appVersion);
W+="&cookieOK="+(navigator.cookieEnabled?"Yes":"No");
W+="&userLanguage="+(navigator.appName=="Netscape"?navigator.language:navigator.userLanguage);
W+="&platform="+navigator.platform;
W+="&bgColor="+escape(document.bgColor);
W+="&javaOK=Yes";
if(typeof(screen)=="object")
{
W+="&screenResolution="+screen.width+"x"+screen.height;
W+="&colorDepth="+screen.colorDepth;
W+="&NSpluginList=";
for( var i=0; i< navigator.plugins.length; i++)
W+=escape(navigator.plugins[i].name)+";";
}
document.write('<A TARGET="_blank" HREF="http://www.webtrendslive.com/redirect.asp?siteID=99654">');
document.write('<IMG BORDER="0" WIDTH="1" HEIGHT="1" SRC="http://statse.webtrendslive.com/S005-01-8-27-233637-99654/button3.asp?'+W+'">');
document.write('</A>');
//-->
</SCRIPT>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Imagetoolbar" content="no">
<meta name="Robots" content="all">
	<title>..:: Farmacias ::..</title>
    <meta name="Title" content="..:: Farmacias ::..">
	<link rel="stylesheet" href="images/Menu.css" type="text/css">




<style type="text/css">
  <!--
  .mouseCursor {cursor: hand;}
.style444 {
	color: #0000FF;
	font-family: "Trebuchet MS";
	font-size: 34px;
}
.contenido {
  background: url(/demo04/images/bgfarmacia.jpg) repeat; 
}
  -->
  </style>

<script language="JavaScript" fptype="dynamicanimation">
<!--
function dynAnimation() {}
function clickSwapImg() {}
//-->
</script>
<script language="JavaScript1.2" fptype="dynamicanimation" src="animate.js">
</script>

</head>

<BODY  bgColor=#666666 leftMargin=0 link=#333333 topMargin=0 vLink=#333333 marginwidth="0" marginheight="0" alink="#333333" onload="dynAnimation()" language="Javascript1.2">

<BASEFONT FACE="Verdana, Arial, Helvetica, sans-serif">

<div class="clsDocBody">


<table align=center border=0 cellpadding=0 cellspacing=0 width=750>

  <TR>
    <TD align=top vAlign=left color="444444" width="324"></TD>
  </TR>
  <TR>
    <TD colSpan=3 bgcolor="#ffffff">
	  <div align="center"><b><font color="#FF0000" size="6">
	    <img border="0" src="<? 
$auxfoto = $renglon2['foto'];
if ($auxfoto)
$auxfoto = "/temp_images/".$auxfoto;
else
$auxfoto = "/demo04/nodisponible.jpg";

echo $auxfoto; ?>" width="377" height="200" align="left"><p></p><br><div align="center"><font class="style444"><? echo $renglon2['nombre']; ?></font></div></font></b></div>
	  <div align="right"><font size="4" color="#FF0000"><b>		</b></font></div>  </TD>
  <!-- End Legox: lgx_Flash_Movie_Top.htm -->

  </TR>

  <!-- Menu Link -->
        <tr valign="middle" bgcolor="#FFffff">
    <td colspan="3" background="images/mb_fon.gif">

      <a onmouseover="var img=document['fpAnimswapImgFP13'];img.imgRolln=img.src;img.src=img.lowsrc?img.lowsrc:img.getAttribute?img.getAttribute('lowsrc'):img.src;" onmouseout="document['fpAnimswapImgFP13'].src=document['fpAnimswapImgFP13'].imgRolln" href="showfarmacia.php?id=<? echo $_GET['id']; ?>">
		<img name="fpAnimswapImgFP13" border="0" src="images/mb_menu.gif" id="fpAnimswapImgFP13" dynamicanimation="fpAnimswapImgFP13" lowsrc="images/mb_menu_on.gif" width="148" height="29"></a><a onmouseover="var img=document['fpAnimswapImgFP12'];img.imgRolln=img.src;img.src=img.lowsrc?img.lowsrc:img.getAttribute?img.getAttribute('lowsrc'):img.src;" onmouseout="document['fpAnimswapImgFP12'].src=document['fpAnimswapImgFP12'].imgRolln" href="showfarmacia.php?id=<? echo $_GET['id']; ?>&catalogo=1"> <img name="fpAnimswapImgFP12" border="0" src="images/mb_mapa.gif" id="fpAnimswapImgFP12" dynamicanimation="fpAnimswapImgFP12" lowsrc="images/mb_mapa_on.gif" width="148" height="29"></a><a onmouseover="var img=document['fpAnimswapImgFP11'];img.imgRolln=img.src;img.src=img.lowsrc?img.lowsrc:img.getAttribute?img.getAttribute('lowsrc'):img.src;" onmouseout="document['fpAnimswapImgFP11'].src=document['fpAnimswapImgFP11'].imgRolln" href="showfarmacia.php?id=<? echo $_GET['id']; ?>&ofertas=1"><img name="fpAnimswapImgFP11" border="0" src="images/mb_contactanos.gif" id="fpAnimswapImgFP11" dynamicanimation="fpAnimswapImgFP11" lowsrc="images/mb_contactanos_on.gif" width="148" height="29"></a><a onmouseover="var img=document['fpAnimswapImgFP15'];img.imgRolln=img.src;img.src=img.lowsrc?img.lowsrc:img.getAttribute?img.getAttribute('lowsrc'):img.src;" onmouseout="document['fpAnimswapImgFP15'].src=document['fpAnimswapImgFP15'].imgRolln" href="showfarmacia.php?id=<? echo $_GET['id']; ?>&turnos=1"><img name="fpAnimswapImgFP15" border="0" src="images/mb_servicio.gif" id="fpAnimswapImgFP15" dynamicanimation="fpAnimswapImgFP15" lowsrc="images/mb_servicio_on.gif" width="148" height="29"></a><a onmouseover="var img=document['fpAnimswapImgFP16'];img.imgRolln=img.src;img.src=img.lowsrc?img.lowsrc:img.getAttribute?img.getAttribute('lowsrc'):img.src;" onmouseout="document['fpAnimswapImgFP16'].src=document['fpAnimswapImgFP16'].imgRolln" href="showfarmacia.php?id=<? echo $_GET['id']."&contactanos=1";?>"> <img name="fpAnimswapImgFP16" border="0" src="images/mb_foto.gif" id="fpAnimswapImgFP16" dynamicanimation="fpAnimswapImgFP16" lowsrc="images/mb_foto_on.gif" width="148" height="29"></a>



    </td>
  </tr>
  <tr>
    <td bgColor=#ffffff colSpan=3 height=3></td>
  </tr>
</table>

<!-- Content -->
<table width="755" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="153" valign="top" background="images/fodo_nav.gif">
	<!-- menu de navegacion izquierdo -->
      <!--
<link rel="stylesheet" href="../Menu.css" type="text/css">
-->

<table width="153" border="0" cellspacing="0" cellpadding="0" height="229" background="images/fodo_nav.gif">
	<tr bgcolor=#ffffff>
    <td height=25 width=153 background="images/fodo_nav.gif" valign="bottom">
      <div align="center"><a href="http://www.mimedico.org.ve"><span class="parrLetChica">
		&nbsp;&nbsp;Mimedico.org.ve</span></a>
      </div>
    </td>
  </tr>
    <tr bgcolor=#ffffff>
    <td height=116 valign=top width=153 background="images/fodo_nav.gif" bgcolor="#F6F6F6">
      <div align=center>
	  	<table class="leftLinks" border=0 cellpadding=0 cellspacing=1 width=140 height="36"  bgcolor="#F6F6F6">
          <tbody>
            <tr> 
              <td height=18 valign="middle" bgcolor="#F6F6F6"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="#003366"><b>
				&nbsp;&nbsp;Sucursales</b></font> 
              </td>
            </tr>
            <tr> 
              <td height=31 valign="top">
			  
			  <table width="114%" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td width="157"  valign="middle"><div align="left">
						<a class="highlight" href="showfarmacia.php?id=<? echo $_GET['id']; ?>&sucursales=1">Localizacion de Farmacias
						</a></div></td>
                  </tr>
                </table></td>
            </tr>
            <tr> 
              <td height=19 valign="top">
			  
			  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
              <td width="138" height=18 valign="middle" bgcolor="#F6F6F6"><font face="Verdana, Arial, Helvetica, sans-serif" size="-2" color="003366"><b>
				&nbsp;&nbsp;Promociones</b></font></td>
                  </tr>
                  <tr>
              <td height=18 valign="top">
			  
			  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td valign="middle">
					<a class="highlight" href="showfarmacia.php?id=<? echo $_GET['id']; ?>&catalogo=1">Catálogo de Ofertas
					</a></td>
                  </tr>
                </table>
				
				</td>
                  </tr>
                  <tr>
              <td height=18 valign="top">
			  
			  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                    <td valign="middle"><a class="highlight" href="showfarmacia.php?id=<? echo $_GET['id']; ?>&ofertas=1">
					Ofertas del Mes
					</a></td>
                  </tr>
                </table>
				
				</td>
                  </tr>
                </table>
				
				
				</td>
            </tr>
          </tbody>
        </table>
	  </div>
    </td>
  </tr>
   
  <tr bgcolor=#ffffff>
    <td  height=86 width="153" valign="top">

    </td>
  </tr>
  

</table>
    </td>
    <td valign="top">
      <div align="left">
        <table class="contenido" width="600" height="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="600">
              <div align="center">&nbsp;</div>
<!-- <div align="center" class="style122"> -->

<?
if (($id)&&($sucursales))
{
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT * FROM sucursales WHERE id_farmacia=".$_GET['id']);
while ($renglon=mysql_fetch_assoc($recurso))
{
?>
 <TABLE >
              <TBODY>
              <TR>
                <TD vAlign=top width=100><IMG height=90 
                  src="<? 
$auxfoto = $renglon['foto'];
if ($auxfoto)
$auxfoto = "/temp_images/".$auxfoto;
else
$auxfoto = "/demo04/nodisponible.jpg";

echo $auxfoto; ?>" width=100 border=1></TD>
                <TD vAlign=top>
                  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD><FONT class=title><FONT face=Wingdings 
                        color=#cc0000>¨</FONT> <? echo $renglon['nombre'];?></FONT></TD></TR>
                    <TR >
                      <TD><FONT class=summary>
                        <P><STRONG>Dirección:</STRONG> <? echo $renglon['direccion'];?><BR><STRONG>E-mail: </STRONG><? echo $renglon['email'];?><BR><STRONG>Teléfonos:</STRONG> 
                        <? echo $renglon['telefonos'];?><BR><STRONG>Horario:</STRONG> <? echo $renglon['horario'];?><BR><STRONG>Gerente:</STRONG><? echo $renglon['gerente'];?> &nbsp;&nbsp; <STRONG>Regente:</STRONG> 
                        <? echo $renglon['regente'];?></P></FONT></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><br>
<?

}}else {
if (($id)&&($contactanos))
{
echo "<table width=\"500\" border=\"0\">
  <tr>
    <td><table width=\"500\" border=\"0\">
  <tr>
    <td>
<div aling=\"left\">
<img height=\"20\" src=\"images/serv_cliente_esp.gif\" width=\"550\">
    <br><br>".$renglon2['direccion']."<br><br>
      Cualquier sugerencia y/o comentario sobre nuestras sucursales que pueda ayudar a mejorar nuestro servicio y atenci&oacute;n, escribanos a nuestro e-mail.&nbsp; </p>
      <p>Telefonos: ".$renglon2['telefonos']."</p>
      <div aling=\"right\"><a href=mailto:\"".$renglon2['email']."\">".$renglon2['email']."</a>&nbsp;<img height=\"12\" src=\"images/MAIL.gif\" width=\"20\"></div>
</div>
</td>
  </tr>
</table></td>
  </tr>
</table>";
} else
{
if (($id)&&($catalogo))
{
$auxcatalogo = $renglon2['catalogo'];
if (($auxcatalogo)&&($auxcatalogo!=""))
echo "<table width=\"500\" border=\"0\"><tr><td><table width=\"500\" border=\"0\"><tr><td>".$auxcatalogo."</td></tr></table></td></tr></table>";
else
echo "<span class=\"style444\"> &nbsp;&nbsp;&nbsp;&nbsp;Catalogo No Disponible</span>";
}
else
{
if(($id)&&($ofertas))
{
$auxofertas = $renglon2['ofertas'];
if (($auxofertas)&&($auxofertas!=""))
echo "<table width=\"500\" border=\"0\"><tr><td><table width=\"500\" border=\"0\"><tr><td>".$auxofertas."</td></tr></table></td></tr></table>";
else
echo "<span class=\"style444\"> &nbsp;&nbsp;&nbsp;&nbsp;Ofertas No Disponible</span>";
}
else
{
if(($id)&&($turnos))
{
$auxturnos = $renglon2['turnos'];
if (($auxturnos)&&($auxturnos!=""))
echo "<table width=\"500\" border=\"0\"><tr><td><table width=\"500\" border=\"0\"><tr><td>".$auxturnos."</td></tr></table></td></tr></table>";
else
echo "<span class=\"style444\"> &nbsp;&nbsp;&nbsp;&nbsp;Turnos No Disponible</span>";
}
else
echo "<table width=\"500\" border=\"0\"><tr><td><table width=\"500\" border=\"0\"><tr><td>".$renglon2['inicio']."</td></tr></table></td></tr></table>";
}
}
}
}}}
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
require_once("footerfarmacia.php");
?>
