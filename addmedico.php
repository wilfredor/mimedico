<?
require_once("header.php");
include("fckeditor.php") ;
require_once("conect.php");
require_once("fileupload-class.php");
$path = $imagedir;
$default_extension = "";
$mode = 1; 
require_once("imageup.php");
$nombre="";
$estado="Zulia";
$foto="";
$resumen="";
$tarifas="";
$id_especialidad="";
$id_clinica="";
$municipio="";
$horarios="";
$contactos="";
$clinica="";
$especialidad="";
if (($_GET['activo']==0) ||($_GET['activo']==1))
{
$activo=$_GET['activo'];
$nombre=$_GET['nombre'];

if ($activo>0)
$activo=0;
else
$activo=1;

$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
 mysql_query ("UPDATE medicos SET activo = $activo WHERE nombre ='$nombre';");

}
if ($_GET['borrar'])
{
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$linknombre = $_GET['borrar'];

$recurso=mysql_query("SELECT * FROM medicos WHERE nombre='".$linknombre."'");
while ($renglon=mysql_fetch_assoc($recurso)) {
mysql_query("DELETE FROM medicos WHERE nombre='".$linknombre."'");
echo "Los datos del medico ".$nombre." fueron borrados de la Base de Datos...<br><br>";
}
}
if (($_GET)&&(!($_GET['borrar']))&&(!($_GET['listado'])))
{
$nombre=$_GET['nombre'];

$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$recurso=mysql_query("SELECT * FROM medicos WHERE nombre='$nombre'");
while ($renglon=mysql_fetch_assoc($recurso)) {
   $estado=$renglon['estado'];
   $municipio=$renglon['municipio'];
   $foto=$renglon['foto'];
   $resumen=$renglon['resumen'];
   $tarifas=$renglon['tarifas'];
   $id_especialidad=$renglon['id_especialidad'];
   $id_clinica=$renglon['id_clinica'];
   $horarios=$renglon['horarios'];
   $contactos=$renglon['contactos'];
}  
$recurso=mysql_query("SELECT nombre FROM especialidad WHERE id=$id_especialidad");
while ($renglon=mysql_fetch_assoc($recurso))
$especialidad=$renglon['nombre'];
}
if ($_POST)
 {
  $foto=strtolower(ereg_replace(" ","_",basename($_FILES['foto']['name'])));
  if ($foto)  {$qfoto ="foto ='$foto',"; $qfoto2="'$foto',";$qfoto3="foto,";}else { $qfoto ="";$qfoto2 ="";$qfoto3 ="";}
  $nombre=$_POST["nombre"];
  $estado=$_POST["estado"];
  $horarios=$_POST["horarios"];
  $contactos=$_POST["contactos"];
  $municipio=$_POST["municipio"];
  $id_clinica=$_POST["clinica"];
  $nombre_especialidad=$_POST["especialidad"];
  $resumen = stripslashes( $_POST["resumen"]);
  $link = mysql_connect($server, $login, $passwd, $database);   
  mysql_select_db ($database,$link);
 $qe="SELECT id FROM especialidad WHERE nombre='$nombre_especialidad'";
  if ($row = mysql_fetch_assoc(mysql_query($qe)))
    $id_especialidad = $row['id'];
  $qe="SELECT especialidad.id, especialidad.nombre FROM especialidad INNER JOIN clinicas WHERE especialidad.id_clinica = clinicas.id AND clinicas.id = $id_clinica AND especialidad.nombre = '$nombre_especialidad'";
  if (!($row = mysql_fetch_assoc(mysql_query($qe)))) {
		 $result = mysql_query ("SELECT nombre,id FROM especialidad WHERE nombre='".$nombre_especialidad."' AND id_clinica=$id_clinica");
         if (!($row = mysql_fetch_array($result))){
           mysql_query("INSERT INTO especialidad (nombre,id_clinica,id) VALUES ('$nombre_especialidad',$id_clinica,".$id_especialidad.");",$link);    

			}
  } else 
  $tarifas = stripslashes( $_POST["tarifas"]);
  if (!(isimage($foto)))
     echo "Error. La foto del medico debe ser JPG o GIF o PNG para poder ser cargadas...<br>";
  
      $link = mysql_connect($server, $login, $passwd, $database);   
      mysql_select_db ($database,$link);
      $result = mysql_query ("SELECT foto FROM medicos WHERE nombre ='$nombre';");
      if ($row = mysql_fetch_array($result)){ 
	    echo "<div align=\"center\">";
        echo "Los datos del medico ".$nombre." fueron actualizados en la Base de Datos...<br><br>";
	    mysql_query ("UPDATE medicos SET horarios = '$horarios',contactos = '$contactos', municipio = '$municipio',nombre ='$nombre', estado ='$estado',$qfoto resumen ='$resumen', tarifas ='$tarifas', id_especialidad =$id_especialidad, id_clinica =$id_clinica WHERE nombre ='$nombre';");
	    echo "</div>";
	   }
	   else
		{
		  echo "<div align=\"center\">";
      	  mysql_query("INSERT INTO medicos (nombre,estado, $qfoto3 resumen,tarifas,id_especialidad,id_clinica,municipio,horarios,contactos) VALUES ('$nombre','$estado', $qfoto2 '$resumen','$tarifas',$id_especialidad,$id_clinica,'$municipio','$horarios','$contactos');",$link);    
          echo "Los datos del medico ".$nombre." fueron agregados a la Base de Datos...<br><br>";
		  echo "</div>";
        }
	 
   mysql_close ($link); 

upload_image("foto");
}
echo "<div align=\"center\">"; ?>
<style type="text/css">
<!--
.style1 {
	font-family: "Trebuchet MS";
	font-weight: bold;
	color: #0000FF;
	font-size: 16px;
}
-->
</style>

<p align="center" class="style1">Agregar Medico
</p>
<?
echo "<form name=\"form1\"enctype=\"multipart/form-data\"method=\"post\" action=\"addmedico.php\"><p><br>
<table width=\"76%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td width=\"19%\"><div align=\"right\"><font face=\"Verdana\" size=\"2\" color=\"#006699\"><b><span class=\"estado\">Nombre:&nbsp;</span> </b></font></div></td>
    <td width=\"90%\"><font face=\"Verdana\" size=\"2\">
      <input class=\"selector\" type=\"text\"name=\"nombre\" value=\"$nombre\">
    </font></td>
  </tr>
  <tr>
    <td width=\"19%\"><div align=\"right\"><font face=\"Verdana\" size=\"2\" color=\"#006699\"><b><span class=\"estado\">Clinica:&nbsp;</span></b></font></div></td>
    <td width=\"90%\"><font face=\"Verdana\" size=\"2\">";
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT id,nombre FROM clinicas ORDER BY nombre");
$entro =false;
while ($renglon=mysql_fetch_assoc($recurso)) {
 if (!($entro))
   {
    echo "<select  class=\"selector\"   name=\"clinica\" onchange=\"JavaScript:submit();\">";
    }
 echo "<option value='".$renglon['id']."' ";
 echo ($numpais==$renglon['id'])?'selected':'';
 echo ">".$renglon['nombre']."</option>";
 if ($renglon['id']==$id_clinica) $clinica=$renglon['nombre'];
 $entro =true;
}
if (!($entro))
{
  echo "<br>Aun no existen clinicas, por favor, haga click <a href=\"addclinica.php\">aqui </a> para crearlas...<br><br>";
}
else
{
echo "<option value='$id_clinica' selected>$clinica</option></select>
</font></td>
  </tr>
  <tr>
    <td width=\"19%\"><div align=\"right\"><font face=\"Verdana\" size=\"2\" color=\"#006699\"><b> <span class=\"estado\">Especialidad:&nbsp;</span></b></font></div></td>
    <td width=\"90%\"><font face=\"Verdana\" size=\"2\">";
echo "<select  class=\"selector\" name=especialidad>";
     $recurso=mysql_query("SELECT DISTINCT nombre FROM especialidad ORDER BY nombre"); //WHERE id_clinica=".$id_clinica);
     while ($renglon=mysql_fetch_assoc($recurso)) {
       echo "<option onchange=\"this.form.submit();\" value='".$renglon['nombre']."'";
       echo ($numpais==$renglon['id'])?'selected':'';
       echo ">".$renglon['nombre']."</option>";
       $entro =true;
      }
     echo "<option value='$id_especialidad' selected>$especialidad</option>";
     echo "</select>
    </font></td>
  </tr>
  <tr>
    <td width=\"19%\"><div align=\"right\"><font face=\"Verdana\" size=\"2\" color=\"#006699\"><b> <span class=\"estado\">Estado:&nbsp;</span></b></font></div></td>
    <td width=\"90%\"><font face=\"Verdana\" size=\"2\">
      <select  class=\"selector\" name=\"estado\">
        <option value=\"Amazonas\">Amazonas</option>
        <option value=\"Anzo&aacute;tegui\">Anzo&aacute;tegui</option>
        <option value=\"Apure\">Apure</option>
        <option value=\"Aragua\">Aragua</option>
        <option value=\"Barinas\">Barinas</option>
        <option value=\"Bol&iacute;var\">Bol&iacute;var</option>
        <option value=\"Carabobo\">Carabobo</option>
        <option value=\"Cojedes\">Cojedes</option>
        <option value=\"DeltaAmacuro\">DeltaAmacuro</option>
        <option value=\"Falc&oacute;n\">Falc&oacute;n</option>
        <option value=\"Gu&aacute;rico\">Gu&aacute;rico</option>
        <option value=\"Lara\">Lara</option>
        <option value=\"M&eacute;rida\">M&eacute;rida</option>
        <option value=\"Miranda\">Miranda</option>
        <option value=\"Monagas\">Monagas</option>
        <option value=\"NuevaEsparta\">NuevaEsparta</option>
        <option value=\"Portuguesa\">Portuguesa</option>
        <option value=\"Sucre\">Sucre</option>
        <option value=\"T&aacute;chira\">T&aacute;chira</option>
        <option value=\"Trujillo\">Trujillo</option>
        <option value=\"Vargas\">Vargas</option>
        <option value=\"Yaracuy\">Yaracuy</option>
        <option value=\"Zulia\">Zulia</option>
        <option value=\"DistritoCapital\">DistritoCapital</option>
        <option value='$estado' selected>$estado</option>
      </select>
    </font></td>
  </tr>
  <tr>
    <td width=\"19%\"><div align=\"right\"><font face=\"Verdana\" size=\"2\" color=\"#006699\"><b><span class=\"estado\">Municipio:&nbsp;</span></b></font></div></td>
    <td width=\"90%\"><font face=\"Verdana\" size=\"2\">
      <input class=\"selector\" name=\"municipio\" type=\"text\" value=\"$municipio\" />
    </font></td>
  </tr>
  <tr>
    <td width=\"19%\"><div align=\"right\"><font face=\"Verdana\" size=\"2\" color=\"#006699\"><b><span class=\"estado\">Foto:&nbsp;</span></b></font></div></td>
    <td width=\"90%\"><font face=\"Verdana\" size=\"2\">
      <input class=\"selector\" name=\"foto\" type=\"file\" value=\"$foto\" />
      <span class=\"estado\"> Se recomienda 157x123 px</span></font></td>
  </tr>
</table><br><br><a href=\"addespecialidad.php\"><span class=\"estado\"> Agregar Especialidad </span></a><br>
<a href=\"addclinica.php\"><span class=\"estado\">Agregar Clinica </span></a><br><br> <div align=\"center\">";
echo "</div>";
writelabel("Resumen Curricular");
$oFCKeditor = new FCKeditor('resumen') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $resumen ;
$oFCKeditor->Create() ;
writelabel("Tarifas");
$oFCKeditor = new FCKeditor('tarifas') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $tarifas ;
$oFCKeditor->Create() ;
writelabel("Horarios");
$oFCKeditor = new FCKeditor('horarios') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $horarios ;
$oFCKeditor->Create() ;
writelabel("Contactos");
$oFCKeditor = new FCKeditor('contactos') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $contactos ;
$oFCKeditor->Create() ;

echo "<br><input class=\"selector\" name=\"submit\" type=\"submit\" value=\"Cargar Datos\"></form> <br>";  
echo "</div>";
if (!($_GET['listado']==1))
{
?>
<div align="center"><a href="addmedico.php?listado=1">Ver Listado</a></div>
<?
} else {
$recurso=mysql_query("SELECT nombre,activo,id_clinica FROM medicos");
//echo "<br>";
$i=1;
$color =true;
?>
<table width="100%" height="14"  border="0" cellpadding="1" cellspacing="1">
<?
writelabel2("Listado de Medicos");
while ($renglon=mysql_fetch_assoc($recurso)) {
 writetable3($i,$renglon['nombre'],"showmedico.php?nombre=".$renglon['nombre']."&id_clinica=".$renglon['id_clinica'],"addmedico.php?nombre=".$renglon['nombre'],"addmedico.php?borrar=".$renglon['nombre'],"addmedico.php?activo=".$renglon['activo']."&nombre=".$renglon['nombre'],$renglon['activo'],$color);
 //echo $i."&nbsp;&nbsp;".$renglon['nombre']." <a href=\"showmedico.php?nombre=".$renglon['nombre']."&id_clinica=".$renglon['id_clinica']."\">Mostrar</a>&nbsp;."\">Editar</a><br>";
 $i++;
$color = !$color;
}
} 
echo "</table><br><br>";
echo "<br>";
adelanteatras();
echo "</td>";         
}
require_once("footer.php");
?>
