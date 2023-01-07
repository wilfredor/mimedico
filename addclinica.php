<?
require_once("header.php");
include("fckeditor.php") ;
require_once("conect.php");
$nombre="";$descripcion="";

if($_GET['clinica'])
{
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$recurso=mysql_query("Select nombre,descripcion FROM clinicas WHERE nombre='".$_GET['clinica']."'");
while ($renglon=mysql_fetch_assoc($recurso)) {
$nombre =$renglon['nombre'];
$descripcion = $renglon['descripcion'];
}}
if($_GET['borrar'])
{
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
mysql_query("DELETE FROM clinicas WHERE nombre='".$_GET['borrar']."'");
echo "Los datos de la clinica ".$nombre." fueron borrados de la Base de Datos...<br><br>";
}
?>
<style type="text/css">
<!--
.style1 {
	font-family: "Trebuchet MS";
	font-weight: bold;
	font-size: 16px;
	color: #0000FF;
}
-->
</style>

<form name="form1" enctype="multipart/form-data" method="post" action="addclinica.php">
<div align="center">
			    <p class="style1">Agregar Clinica</p>
			    <p><br>
		          <span class="estado">Nombre de la Clinica:</span>                  <input class="selector" type="text" name="nameclinica" value="<? echo $nombre ?>">
<br><br>
<?
writelabel("Direccion / Telfs.");
$oFCKeditor = new FCKeditor('descripcion') ;
$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->Value		= $descripcion ;
$oFCKeditor->Create() ;
?>
			    <p><span class="estado">Logo:</span>
			      <input class="selector" name="logo" type="file" /> Se recomienda 237x44 px
			    </p>
			    <p><span class="estado">Foto1:</span>
			      <input class="selector"  name="foto1" type="file" /> Se recomienda 280x128 px
			    </p>
			    <p><span class="estado">Foto2:</span>
			      <input class="selector"  name="foto2" type="file" /> Se recomienda 160x114 px
			    </p>
			    <p><span class="estado">Foto3:</span>
			      <input class="selector"  name="foto3" type="file" /> Se recomienda 168x119 px
			    </p>
			    <p><span class="estado">Foto4:</span>
			      <input class="selector"  name="foto4" type="file" /> Se recomienda 160x114 px
</p>
<?
echo "<br><br><span class=\"estado\"><a href=\"addespecialidad.php\">Agregar Especialidad </a><br>
<a href=\"addmedico.php\">Agregar Medico </a><br><br></span>";
?>
			    <p>
			      <input class="selector" name="submit" type="submit" value="Cargar Datos" />              
	            </p><input class="selector" type="hidden" name="submitted" value="true">
</form>			  <p> <br>
                            </p>
</div>
<?
 require_once("fileupload-class.php");
 $path = $imagedir;
 $default_extension = "";
 $mode = 1; 
 require_once("imageup.php");

if ($_POST)
{
$logo=strtolower(ereg_replace(" ","_",basename($_FILES['logo']['name'])));
$foto1=strtolower(ereg_replace(" ","_",basename($_FILES['foto1']['name'])));
$foto2=strtolower(ereg_replace(" ","_",basename($_FILES['foto2']['name'])));
$foto3=strtolower(ereg_replace(" ","_",basename($_FILES['foto3']['name'])));
$foto4=strtolower(ereg_replace(" ","_",basename($_FILES['foto4']['name'])));

$descripcion = $_POST["descripcion"];
if (!(isimage($logo)&& isimage($foto1)&& isimage($foto2)&& isimage($foto3)&& isimage($foto4)))
echo "Error. Todas las imagenes deben ser JPG o GIF o PNG para poder ser cargadas...<br>";
else
{
if($logo)
{upload_image("logo");}
if($foto1)
{upload_image("foto1");}
if($foto2)
{upload_image("foto2");}
if($foto3)
{upload_image("foto3");}
if($foto4)
{upload_image("foto4");}
$nameclinica=$_POST["nameclinica"];
//$logofile=ereg_replace("\\","\\\\",$_POST['logo']);
$link = mysql_connect($server, $login, $passwd, $database);   
   mysql_select_db ($database,$link);
   $result = mysql_query ("SELECT * FROM clinicas WHERE nombre='$nameclinica'");
    if ($row = mysql_fetch_array($result)){ 
	 echo "<div align=\"center\">";
     echo "Los datos de la clinica ".$nameclinica." fueron actualizados en la Base de Datos...<br><br>";
	 mysql_query ("UPDATE clinicas SET descripcion = '$descripcion', nombre ='$nameclinica',logo = '$logo',foto1='$foto1',foto2='$foto2',foto3='$foto3',foto4='$foto4' WHERE nombre ='$nameclinica';");
	 echo "</div>";
	}
	else
		{
		 echo "<div align=\"center\">";
      	 mysql_query("INSERT INTO clinicas (nombre,logo,foto1,foto2,foto3,foto4,descripcion) VALUES ('$nameclinica','$logo','$foto1', '$foto2', '$foto3','$foto4','$descripcion');",$link);    
         echo "Los datos de la clinica ".$nameclinica." fueron agregados a la Base de Datos...<br><br>";
		 echo "</div>";
        }
	 
   mysql_close ($link); 

}}
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$recurso=mysql_query("SELECT nombre FROM clinicas");
?>
<table width="100%" height="14"  border="0" cellpadding="1" cellspacing="1">
<?
writelabel2("Listado de Clinicas");
//echo "<br>";
$i=1;
$color =true;
while ($renglon=mysql_fetch_assoc($recurso)) {
 writetable3($i,$renglon['nombre'],"showclinica.php?clinica=".$renglon['nombre'],"addclinica.php?clinica=".$renglon['nombre'],"addclinica.php?borrar=".$renglon['nombre'],"#",1,$color);
 
 $i++;
$color = !$color;
} 
echo "</table><br><br>";
echo "<br>";
adelanteatras();
echo "</td>";       

require_once("footer.php");
?>