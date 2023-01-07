<?
require_once("header.php");
include("fckeditor.php") ;
require_once("conect.php");
require_once("fileupload-class.php");
$path = $imagedir;
$default_extension = "";
$mode = 1; 
require_once("imageup.php");
$nombre = "";
$estado = "";
$municipio = "";
$telefonos = "";
$email = "";
$foto = "";
$inicio = "";
$ofertas = "";
$catalogos = "";
$turnos = "";
$direccion = "";

if($_GET['id'])
{
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$renglon = mysql_query("SELECT * FROM farmacias WHERE id=".$_GET['id']);
$renglon2 = mysql_fetch_assoc($renglon);
$nombre = $renglon2['nombre'];
$estado = $renglon2['estado'];
$municipio = $renglon2['municipio'];
$telefonos = $renglon2['telefonos'];
$email = $renglon2['email'];
$foto = $renglon2['foto'];
$inicio = $renglon2['inicio'];
$ofertas = $renglon2['ofertas'];
$catalogo = $renglon2['catalogo'];
$turnos = $renglon2['turnos'];
$direccion = $renglon2['direccion'];
}

if($_GET['borrar'])
{
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
mysql_query("DELETE FROM farmacias WHERE id='".$_GET['borrar']."'");
echo "Los datos de la clinica fueron borrados de la Base de Datos...<br><br>";
}
if($_POST)
{
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$telefonos = $_POST['telefonos'];
$email = $_POST['email'];
$inicio = $_POST['inicio'];
$ofertas = $_POST['ofertas'];
$catalogo = $_POST['catalogo'];
$turnos = $_POST['turnos'];
$direccion = $_POST['direccion'];
$foto = strtolower(ereg_replace(" ","_",basename($_FILES['foto']['name'])));

if (!$nombre)
echo "Error. Debe introducir el nombre de la farmacia...<br>";
else
{

//if (!(isimage($foto )))
 // echo "Error. La imagen debe ser JPG o GIF o PNG para poder ser cargada...<br>";
//else
  upload_image("foto");
if ($foto)
$xfoto = "foto='$foto',";
else $xfoto = "";

$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$result = mysql_query ("SELECT * FROM farmacias WHERE nombre='$nombre'");
if ($row = mysql_fetch_array($result)){ 
	 echo "<div align=\"center\">";
     echo "Los datos de la farmacia ".$nombre." fueron actualizados en la Base de Datos...<br><br>";
	 mysql_query ("UPDATE farmacias SET direccion = '$direccion', estado = '$estado', municipio ='$municipio',telefonos = '$telefonos',email='$email',".$xfoto." inicio='$inicio',ofertas = '$ofertas',catalogo = '$catalogo',turnos = '$turnos' WHERE nombre ='$nombre';");
	 echo "</div>";
	}
    else
		{
		 echo "<div align=\"center\">";
      	 mysql_query("INSERT INTO farmacias (nombre,estado,municipio,telefonos,email,foto,inicio,ofertas,catalogo,turnos,direccion) VALUES ('$nombre','$estado','$municipio', '$telefonos', '$email','$foto','$inicio','$ofertas','$catalogo','$turnos','$direccion');",$link);    
         echo "Los datos de la farmacia ".$nombre." fueron agregados a la Base de Datos...<br><br>";
		 echo "</div>";
        }
mysql_close ($link); 
}
}
?>
<style type="text/css">
<!--
.style7 {
	color: #0000FF;
	font-size: 16px;
	font-family: "Trebuchet MS";
	font-weight: bold;
}
-->
</style>
 <p align="center" class="style7">Agregar Farmacia </p>
 <p>   <?
echo "</p>
<form name=\"form1\" enctype=\"multipart/form-data\" method=\"post\" action=\"addfarmacia.php\">
  <table width=\"464\" align=\"center\" border=\"0\">
    <tr>
      <td width=\"63\"><div align=\"right\"><span class=\"style5\">Nombre:</span></div></td>
      <td width=\"366\"><input type=\"text\" value=\"".$nombre."\" name=\"nombre\"></td>
    </tr>
    <tr>
      <td><div align=\"right\"><span class=\"style5\">Estado:</span></div></td>
      <td><select name=\"estado\">
          <option value=\"Amazonas\">Amazonas</option>
          <option value=\"Anzoategui\">Anzoategui</option>
          <option value=\"Apure\">Apure</option>
          <option value=\"Aragua\">Aragua</option>
          <option value=\"Barinas\">Barinas</option>
          <option value=\"Bolivar\">Bolivar</option>
          <option value=\"Carabobo\">Carabobo</option>
          <option value=\"Cojedes\">Cojedes</option>
          <option value=\"DeltaAmacuro\">DeltaAmacuro</option>
          <option value=\"Falcon\">Falcon</option>
          <option value=\"Guarico\">Guarico</option>
          <option value=\"Lara\">Lara</option>
          <option value=\"Merida\">Merida</option>
          <option value=\"Miranda\">Miranda</option>
          <option value=\"Monagas\">Monagas</option>
          <option value=\"NuevaEsparta\">NuevaEsparta</option>
          <option value=\"Portuguesa\">Portuguesa</option>
          <option value=\"Sucre\">Sucre</option>
          <option value=\"Tachira\">Tachira</option>
          <option value=\"Trujillo\">Trujillo</option>
          <option value=\"Vargas\">Vargas</option>
          <option value=\"Yaracuy\">Yaracuy</option>
          <option value=\"Zulia\">Zulia</option>
          <option value=\"DistritoCapital\">DistritoCapital</option>
		  <option selected value=\"".$estado."\">".$estado."</option>
        </select></td>
    </tr>
    <tr>
      <td><div align=\"right\"><span class=\"style5\">Municipio:</span></div></td>
      <td>
        <input type=\"text\" value=\"".$municipio."\" name=\"municipio\"></td>
    </tr>
    <tr>
      <td><div align=\"right\"><span class=\"style5\">Telefonos:</span></div></td>
      <td><input type=\"text\" value=\"".$telefonos."\" name=\"telefonos\"></td>
    </tr>
    <tr>
      <td><div align=\"right\"><span class=\"style5\">Email:</span> </div></td>
      <td><input type=\"text\" value=\"".$email."\" name=\"email\"></td>
    </tr>
    <tr>
      <td><div align=\"right\"><span class=\"style5\">Foto:</span></div></td>
      <td>
        <input name=\"foto\" type=\"file\" />
      <span class=\"style5\">Se recomienda 377x200 px</span></td>
    </tr>
  </table>
  <p>&nbsp;";


writelabel("Contenido de la Pagina Principal de la Farmacia");
$oFCKeditor = new FCKeditor('inicio') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $inicio;
$oFCKeditor->Create() ;
writelabel("Contenido de Ofertas de la Farmacia");
$oFCKeditor = new FCKeditor('ofertas') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $ofertas;
$oFCKeditor->Create() ;
writelabel("Contenido de Catalogo de la Farmacia");
$oFCKeditor = new FCKeditor('catalogo') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $catalogo;
$oFCKeditor->Create() ;
writelabel("Contenido de Turnos de la Farmacia");
$oFCKeditor = new FCKeditor('turnos') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $turnos;
$oFCKeditor->Create() ;
writelabel("Contenido de Direccion de la Farmacia");
$oFCKeditor = new FCKeditor('direccion') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $direccion;
$oFCKeditor->Create() ;
echo "
 </p>
 <div align=\"center\">
<input type=\"submit\" value=\"Cargar Farmacia\">
</div>
</form> ";
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$recurso=mysql_query("SELECT id,nombre FROM farmacias");
writelabel("Listado de Clinicas");
echo "<br>";
$i=1;
$color =true;
while ($renglon=mysql_fetch_assoc($recurso)) {
 writetable($i."&nbsp;&nbsp;".$renglon['nombre'],"showfarmacia.php?id=".$renglon['id'],"addfarmacia.php?id=".$renglon['id'],"addfarmacia.php?borrar=".$renglon['id'],$color);
 
 $i++;
$color = !$color;

}


require_once("footer.php");
?>
