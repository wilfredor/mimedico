<?
require_once("header.php");
require_once("conect.php");
require_once("publicidad.php");
require_once("imageup.php");
echo "<td class=\"ver10\"><br>";
if ($_GET)
{

$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT id,nombre,logo,foto1,foto2,foto3,foto4,descripcion FROM clinicas WHERE nombre='".$_GET['clinica']."'");
while ($renglon=mysql_fetch_assoc($recurso)) {
 imageclinica($renglon['nombre'],$renglon['logo'],$renglon['foto1'],$renglon['foto2'],$renglon['foto3'],$renglon['foto4'],$imagedir);
 echo "<br>";
 $enlace2=mysql_connect($server,$login,$passwd);
 mysql_select_db($database);
 $recurso2=mysql_query("SELECT DISTINCT nombre,id FROM especialidad WHERE id_clinica=".$renglon['id']);
if ($renglon2=mysql_fetch_assoc($recurso2))
{
echo "<table border=\"0\" width=\"100%\" id=\"table25\">
						<tr>
							<td>
							<b>
							<font face=\"Verdana\" size=\"2\" color=\"#000080\">
							Especialidades M&eacute;dicas</font></b></td>
						</tr>
						<tr>
							<td width=\"98%\">
							<font face=\"Verdana\" color=\"#333333\" style=\"font-size: 10pt\">
							<p style=\"margin-top: 0; margin-bottom: 0\"> <font face=\"Verdana\" size=\"2\" color=\"#666666\">";
 //echo "<li><a href=\"showmedicos.php?id_especialidad=".$renglon2['id']."&id_clinica=".$renglon['id']."\">".$renglon2['nombre']."</a></li>";
itemclinica($renglon2['nombre'],"showmedicos.php?id_especialidad=".$renglon2['id']."&id_clinica=".$renglon['id']);
}
 
 while ($renglon2=mysql_fetch_assoc($recurso2)) {
  $entro = true;
  itemclinica($renglon2['nombre'],"showmedicos.php?id_especialidad=".$renglon2['id']."&id_clinica=".$renglon['id']);
 // echo "<li><a href=\."\">".$renglon2['nombre']."</a></li>";
 }
if($entro)
 echo "</font></p> </font></td>
						</tr>
					</table><br>";
 if ($renglon['descripcion']) {
 //writelabel("Ubicacion y contacto");
 //OpenTable();
echo "<p style=\"margin-top: 0; margin-bottom: 0\"> <font face=\"Verdana\" size=\"2\" color=\"#666666\"><b>";
 echo $renglon['descripcion']."</font>";
// CloseTable();
}

}
}
adelanteatras();
echo "</td>";
require_once("footer.php");
?>