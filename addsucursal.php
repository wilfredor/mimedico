<?
require_once("header.php");
require_once("conect.php");
require_once("fileupload-class.php");
$path = $imagedir;
$default_extension = "";
$mode = 1; 
require_once("imageup.php");
$nombre = "";
$telefonos = "";
$id_farmacia = "";
$farmacia = "";
$horario = "";
$gerente = "";
$regente = "";
$foto = "";

if($_GET['id'])
{
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$renglon = mysql_query("SELECT * FROM sucursales WHERE id=".$_GET['id']);
$renglon2 = mysql_fetch_assoc($renglon);
$nombre =  $renglon2['nombre'];
$telefonos =  $renglon2['telefonos'];
$id_farmacia =  $renglon2['id_farmacia'];
$horario =  $renglon2['horario'];
$gerente =  $renglon2['gerente '];
$regente =  $renglon2['regente'];
$direccion =  $renglon2['direccion'];
$email =  $renglon2['email'];
mysql_select_db ($database,$link);
$renglon4 = mysql_query("SELECT nombre FROM farmacias WHERE id=".$id_farmacia);
$renglon5 = mysql_fetch_assoc($renglon4);
$farmacia =  $renglon5['nombre'];
}
if($_GET['borrar'])
{
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
mysql_query("DELETE FROM sucursales WHERE id='".$_GET['borrar']."'");
echo "Los datos de la sucursal fueron borrados de la Base de Datos...<br><br>";
}
?>
<style type="text/css">
<!--
.style1 {font-family: "Trebuchet MS"}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style3 {font-size: 16px}
-->
</style>

<?
if ($_POST)
{
$nombre = $_POST['nombre'];
$telefonos = $_POST['telefonos'];
$id_farmacia = $_POST['farmacia'];
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$result = mysql_query ("SELECT nombre FROM farmacias WHERE id=$id_farmacia");
$renglon=mysql_fetch_assoc($result);
$farmacia = $renglon['nombre'];
$horario = $_POST['horario'];
$gerente = $_POST['gerente'];
$regente = $_POST['regente'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$foto = strtolower(ereg_replace(" ","_",basename($_FILES['foto']['name'])));
if (!$nombre)
echo "Error. Debe introducir el nombre de la farmacia...<br>";
else
{
upload_image("foto");
if ($foto)
$xfoto = ",foto='$foto'";
else $xfoto = "";
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$result = mysql_query ("SELECT * FROM sucursales WHERE nombre='$nombre'");
if ($row = mysql_fetch_array($result)){ 
	 echo "<div align=\"center\">";
     echo "Los datos de la sucursal ".$nombre." fueron actualizados en la Base de Datos...<br><br>";
	 mysql_query ("UPDATE sucursales SET nombre = '$nombre',direccion = '$direccion',email = '$email', telefonos ='$telefonos',id_farmacia = $id_farmacia,horario='$horario',gerente='$gerente',regente='$regente'".$xfoto." WHERE nombre ='$nombre';");
	 echo "</div>";
	}
    else
		{
		 echo "<div align=\"center\">";
      	 mysql_query("INSERT INTO sucursales (email,nombre,foto,direccion,telefonos,horario,gerente,regente,id_farmacia) VALUES ('$email','$nombre','$foto','$direccion', '$telefonos', '$horario','$gerente','$regente','$id_farmacia');",$link);    
         echo "Los datos de la farmacia ".$nombre." fueron agregados a la Base de Datos...<br><br>";
		 echo "</div>";
        }
mysql_close ($link); 
}

}


?>
<form enctype="multipart/form-data" action="" method="post" name="form1" class="style1">
  <p align="center" class="style2 style3">Agregar Sucursal: </p>
  <table width="556" align="center" border="0">
    <tr>
      <td><div align="right">Nombre:</div></td>
      <td><input type="text" name="nombre" value="<? echo $nombre;?>"></td>
    </tr>
    <tr>
      <td><div align="right">Telefonos:</div></td>
      <td><input type="text" name="telefonos"  value="<? echo $telefonos;?>"></td>
    </tr>
    <tr>
      <td><div align="right">Horario:</div></td>
      <td><input type="text" name="horario"  value="<? echo $horario;?>"></td>
    </tr>
    <tr>
      <td><div align="right">Gerente:</div></td>
      <td><input type="text" name="gerente"  value="<? echo $gerente;?>"></td>
    </tr>
    <tr>
      <td><div align="right">Direccion:</div></td>
      <td><input type="text" name="direccion"  value="<? echo $direccion;?>"></td>
    </tr>
    <tr>
      <td><div align="right">E-mail:</div></td>
      <td><input type="text" name="email"  value="<? echo $email;?>"></td>
    </tr>
    <tr>
      <td><div align="right">Regente:</div></td>
      <td><input type="text" name="regente"  value="<? echo $regente;?>"></td>
    </tr>
    <tr>
      <td width="87"><div align="right">Farmacia:</div></td>
      <td width="414">

<?
$enlace=mysql_connect($server,$login,$passwd);
mysql_select_db($database);
$recurso=mysql_query("SELECT id,nombre FROM farmacias ORDER BY nombre");
echo "<select name=\"farmacia\">";

while ($renglon=mysql_fetch_assoc($recurso)) {
 echo "<option value=".$renglon['id'];
 echo ($numpais==$renglon['id'])?'selected':'';
 echo ">".$renglon['nombre']."</option>";
    }

echo "<option value=$id_farmacia selected>$farmacia</option></select>";

?></td>
    </tr>
    <tr>
      <td><div align="right">Foto:</div></td>
      <td><p>
          <input type="file" name="foto">
      Se recomienda 100 x 80 px </p></td>
    </tr>
  </table>
  <p>
 <div align="center">
    <input type="submit" name="Submit" value="Cargar Sucursal"></div>
  </p>
  <p>&nbsp;</p>
</form>
<?
$link = mysql_connect($server, $login, $passwd, $database);   
mysql_select_db ($database,$link);
$recurso=mysql_query("SELECT id,nombre,id_farmacia FROM sucursales");
writelabel("Listado de Sucursales");
echo "<br>";
$i=1;
$color =true;
while ($renglon=mysql_fetch_assoc($recurso)) {
 writetable($i."&nbsp;&nbsp;".$renglon['nombre'],"showfarmacia.php?id=".$renglon['id_farmacia'],"addsucursal.php?id=".$renglon['id'],"addsucursal.php?borrar=".$renglon['id'],$color);
 
 $i++;
$color = !$color;

}


require_once("footer.php");
?>
