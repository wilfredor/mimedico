<?
require_once("header.php");
require_once("conect.php");
require_once("publicidad.php");
echo "<td class=\"ver10\"><br>";
?>
<style type="text/css">
<!--
.style1 {
	font-family: "Trebuchet MS";
	font-size: 15px;
}
.style2 {font-family: "Trebuchet MS"; font-weight: bold; }
.style5 {font-size: 15px}
-->
</style>

<p align="center" class="style2"><span class="style5">SISTEMA DE BUSQUEDA DE MEDICOS<strong>&nbsp; </strong></span></p>
<p align="justify"><span class="style1"><a href="http://www.mimedico.org.ve/">www.mimedico.org.ve </a>, le da la bienvenida al portal medico mas grande del pa&iacute;s, el sistema de b&uacute;squeda automatizada, ha sido creada con la finalidad de facilitar a todos los usuarios de nuestro portal, la localizaci&oacute;n mas r&aacute;pida de un profesional de la salud, ya sea por estado, municipio, especialidad o por su nombre, de manera que sea mas f&aacute;cil su b&uacute;squeda, solo deber&aacute; llenar los espacios que conozca y nuestro sistema automatizado har&aacute; la b&uacute;squeda, arroj&aacute;ndole los resultados esperado por UD. </span></p>
<?
echo "<br>";
writelabel("Buscar Medicos ");
echo "<form name=\"form1\" method=\"post\" action=\"buscarmedico.php\">
<br>
Estado: <select name=\"estado\">";
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT DISTINCT estado FROM medicos ORDER BY nombre");
while ($renglon=mysql_fetch_assoc($recurso)) {
echo "<option value=\"".$renglon['estado']."\">".$renglon['estado']."</option>";
}echo "<option value=\"0\" selected>...</option>";
echo "</select>&nbsp;";
echo "Municipio:&nbsp; <select name=\"municipio\">";
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT DISTINCT municipio FROM medicos ORDER BY nombre");
while ($renglon=mysql_fetch_assoc($recurso)) {
echo "<option value=\"".$renglon['municipio']."\">".$renglon['municipio']."</option>";
}
echo "<option value=\"0\" selected>...</option>";
echo "</select><br>";
echo "Especialidad:&nbsp;<select name=especialidad>";
     $recurso=mysql_query("SELECT DISTINCT nombre FROM especialidad ORDER BY nombre"); //WHERE id_clinica=".$id_clinica);
     while ($renglon=mysql_fetch_assoc($recurso)) {
       echo "<option value='".$renglon['nombre']."'";
       echo ($numpais==$renglon['id'])?'selected':'';
       echo ">".$renglon['nombre']."</option>";
       $entro =true;
      }
     echo "<option value=\"0\" selected>...</option>";
     echo "</select>";

echo "&nbsp;Nombre:<input name=\"namemedico\" type=\"text\">";
echo "<br><br><input name=\"submit\" type=\"submit\" value=\"Buscar Medicos\"></form>";

if ($_POST)
{ 
$namemedico =$_POST['namemedico'];
$especialidad =$_POST['especialidad'];
echo "<br>";
writelabel("Lista de medicos encontrados: ");
OpenTable();
$i=0;
//echo "<br>".$especialidad." ".$namemedico."<br>";
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);

$recurso2=mysql_query("SELECT id FROM especialidad WHERE nombre='".$especialidad."'");
$renglon2=mysql_fetch_assoc($recurso2);

if (!($namemedico))
{
/*
if ($_POST['municipio']=="null")
$municipio ="";
else
$municipio ="municipio='".$_POST['municipio']."'";

if ($_POST['estado']=="null")
$estado ="";
else
$estado ="estado='".$_POST['estado']."'";

if (!($renglon2))
$id_especialidad=""; else $id_especialidad = "id_especialidad='".$especialidad."'";

if (($municipio !="") && ($estado!="") && ($id_especialidad!=""))
  $querry="WHERE ".$municipio." AND ".$estado." AND ".$id_especialidad." ORDER BY nombre";

if (($municipio =="") && ($estado!="") && ($id_especialidad!=""))
  $querry="WHERE ".$estado." AND ".$id_especialidad." ORDER BY nombre";

if (($municipio =="") && ($estado=="") && ($id_especialidad!=""))
  $querry="WHERE ".$id_especialidad." ORDER BY nombre";

if (($municipio =="") && ($estado=="") && ($id_especialidad==""))
  $querry="";
if (($municipio !="") && ($estado!="") && ($id_especialidad!=""))
  $querry="WHERE ".$municipio." AND ".$id_especialidad." ORDER BY nombre";

if (($municipio !="") && ($estado != "") && ($id_especialidad ==""))
  $querry="WHERE ".$municipio." AND ".$estado." ORDER BY nombre";

if (($municipio =="") && ($estado!="") && ($id_especialidad==""))
  $querry="WHERE ".$estado." ORDER BY nombre";

if (($municipio !="") && ($estado=="") && ($id_especialidad==""))
  $querry="WHERE ".$municipio." ORDER BY nombre";
*/

    
//$recurso=mysql_query("SELECT nombre,id_clinica FROM medicos ".$querry);
$recurso=mysql_query("SELECT nombre,id_clinica FROM medicos WHERE municipio='".$_POST['municipio']."' AND estado='".$_POST['estado']."' AND id_especialidad='".$renglon2['id']."' ORDER BY nombre");
}
else
{
/*
if ($_POST['municipio']=="null")
$municipio ="";
else
$municipio ="municipio='".$_POST['municipio']."'";

if ($_POST['estado']=="null")
$estado ="";
else
$estado ="estado='".$_POST['estado']."'";

if (($municipio !="") && ($estado==""))
  $querry="WHERE ".$municipio." AND ".$estado." ORDER BY nombre";
if (($municipio =="") && ($estado!=""))
  $querry="WHERE ".$estado." ORDER BY nombre";
if (($municipio =="") && ($estado==""))
  $querry="";
if (($municipio !="") && ($estado==""))
  $querry="WHERE ".$municipio." ORDER BY nombre";

$recurso=mysql_query("SELECT nombre,id_clinica FROM medicos ".$querry);*/
$recurso=mysql_query("SELECT nombre,id_clinica FROM medicos WHERE municipio='".$_POST['municipio']."' AND estado='".$_POST['estado']."' ORDER BY nombre");
}
while ($renglon=mysql_fetch_assoc($recurso)) {
if ($namemedico)
{
if (strstr(trim(strtolower($renglon['nombre'])),trim(strtolower($namemedico)))) {
   $recurso3=mysql_query("SELECT nombre FROM clinicas WHERE id='".$renglon['id_clinica']."'");
   $renglon3=mysql_fetch_assoc($recurso3);
    echo "&nbsp;&nbsp;&nbsp;<a href=\"showmedico.php?nombre=".$renglon['nombre']."&id_clinica=".$renglon['id_clinica']."\">".$renglon['nombre']."</a><br>&nbsp;&nbsp;&nbsp;<font color=\"#006600\">".$renglon3['nombre']."&nbsp;<a href=\"showclinica.php?clinica=".$renglon3['nombre']."\">ver clinica</a></form><br><br>";
    $i++;
  }
}
else
{
 $recurso3=mysql_query("SELECT nombre FROM clinicas WHERE id='".$renglon['id_clinica']."'");
 $renglon3=mysql_fetch_assoc($recurso3);
 echo "&nbsp;&nbsp;&nbsp;<a href=\"showmedico.php?nombre=".$renglon['nombre']."&id_clinica=".$renglon['id_clinica']."\">".$renglon['nombre']."</a><br>&nbsp;&nbsp;&nbsp;<font color=\"#006600\">".$renglon3['nombre']."&nbsp;<a href=\"showclinica.php?clinica=".$renglon3['nombre']."\">ver clinica</a></form><br><br>";
 $i++;
}
}
echo "<br><font color=\"#000000\">".$i." medico(s) encontrado(s)...</font>";
CloseTable();}
echo "</form><br>";
adelanteatras();
echo "</td>";
require_once("footer.php");
?>