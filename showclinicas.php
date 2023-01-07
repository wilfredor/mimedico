<?
require_once("header.php");
require_once("conect.php");
require_once("publicidad.php");
echo "<td class=\"ver10\"><br>";
?>
<div align="left"><img src="/demo04/images/listadoClinicas.jpg" width="250" height="66">
<?
// tituloclinica();
echo "<br>";
echo "<form name=\"form1\" method=\"post\" action=\"showclinicas.php\">";
echo "Estado: <select name=\"estado\">";
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
while ($renglon=mysql_fetch_assoc($recurso)) 
echo "<option value=\"".$renglon['municipio']."\">".$renglon['municipio']."</option>";

echo "<option value=\"0\" selected>...</option>";
echo "</select><br>";
echo "<br><br><INPUT type=image name=\"search\" src=\"/demo04/images/botonbuscar.jpg\" border=\"0\">";
echo "</form>";

if ($_POST)
{
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT DISTINCT id_clinica FROM medicos WHERE municipio='".$_POST['municipio']."' AND estado='".$_POST['estado']."'");
while ($renglon=mysql_fetch_assoc($recurso))
{
$recurso2=mysql_query("SELECT DISTINCT nombre FROM clinicas WHERE id='".$renglon['id_clinica']."'");
while ($renglon2=mysql_fetch_assoc($recurso2)) 
 itemclinica($renglon2['nombre'],"showclinica.php?clinica=".$renglon2['nombre']);
}
}
echo "</td>";
require_once("footer.php");
?>
</div>
