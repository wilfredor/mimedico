<? require_once("header.php");
require_once("publicidad.php");
require_once("conect.php");
echo "<td width=\"70%\" class=\"ver10\" ><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"90%\"><tr>";
 ?>
<style type="text/css">
<!--
.style2 {font-family: "Trebuchet MS"}
.style3 {font-size: 14px}
.style4 {font-family: "Trebuchet MS"; font-size: 16; }
.style5 {font-size: 16px}
.style6 {font-size: 16}
.style7 {	font-size: 12px;
	font-family: "Trebuchet MS";
	color: #000000;
}
-->
</style>

<br>
<div class=Section1>

  <p align="justify"><span class="style2"><span class="style3"><span class="style5"><span class="style6"><strong>MiMedico.org.ve </strong>, le da la mas cordial bienvenida al portal medico mas grande del pa&iacute;s, este espacio ha sido dise&ntilde;ado con la finalidad de facilitar la b&uacute;squeda de las principales farmacias del estado, donde usted podr&aacute; ver desde la comodidad de su casa, oficina o centro de comunicaciones, la ubicaci&oacute;n geogr&aacute;fica de las mismas, como tambi&eacute;n todos los beneficios que ellas ofrecen (catalogo de descuentos y ofertas especiales del mes), su horarios y tipos de servicios, en fin todo lo relacionado con el ramo farmac&eacute;utico. </span></span></span></span>
  <p align="justify" class="style4"><a href="LeyDeEjercicioDeLaFarmacia.php">Ley de Ejercicio de la Farmacia </a>
  <p align="justify" class="style4"><a href="LeyDeMedicamentos.php">Ley de Medicamentos </a>
  <p align="justify" class="style4"><a href="LeyOrganicaEstuPhico.php">Ley Org&aacute;nica de Estupefacientes y Psicotr&oacute;picos </a>
  <p align="justify"><span class="style4"><a href="LeyOrganicaSalud.php">Ley Org&aacute;nica de la Salud </a></span></p>
  <p align=center style='margin-left:.25in; text-align:center; font-family: "Trebuchet MS"; font-size: 16px; font-weight: bold; color: #0000FF;'>&nbsp;</p>
</div>
<form name="form1" method="post" action="">
 
      <div align="center">
	  <p style='margin-left:.0in; text-align:left; font-family: "Trebuchet MS"; font-size: 16px; font-weight: bold; color: #0000FF;'>Buscar Farmacias:</p>
        <p><span class="style7">Estado:</span>
          
          <?
echo "<select name=\"estado\">";
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT DISTINCT estado FROM farmacias ORDER BY estado");
while ($renglon=mysql_fetch_assoc($recurso)) {
echo "<option value=\"".$renglon['estado']."\">".$renglon['estado']."</option>";
}echo "<option value=\"0\" selected>...</option>";
echo "</select>&nbsp;";
?>
          
          <span class="style7">Municipio:</span>
          
            
          <?
echo "<select name=\"municipio\">";
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT DISTINCT municipio FROM farmacias ORDER BY municipio");
while ($renglon=mysql_fetch_assoc($recurso)) {
echo "<option value=\"".$renglon['municipio']."\">".$renglon['municipio']."</option>";
}echo "<option value=\"0\" selected>...</option>";
echo "</select>&nbsp;<p><INPUT type=image name=\"search\" src=\"/demo04/images/botonbuscar.jpg\" border=\"0\"></form>";

if ($_POST['estado'])
{
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
//echo "<br>";




$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);

if ($municipio)
  $querry =  " AND municipio='".$municipio."'";
else
  $querry = "";
$i = 0;
$recurso2=mysql_query("SELECT id,nombre FROM farmacias WHERE estado='".$estado."'".$querry);
while($renglon2=mysql_fetch_assoc($recurso2))
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;<img border=\"0\" src=\"http://mimedico.org.ve/arr2.jpg\">&nbsp;&nbsp;<a href=\"javascript:abrir('showfarmacia.php?id=".$renglon2['id']."')\"><font class=\"style3\">".$renglon2['nombre']."</font></a><p>";
$i++;
}
 echo "<br><font color=\"#006600\">".$i." farmacia(s) encontrada(s)...</font>";
}

adelanteatras();
echo "</table><tr></td>";
require_once("footer.php"); ?>

