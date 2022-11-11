<?php
   include("conexion.php");
   $link=Conectarse();
    $id=$_GET['id'];
   $nombre=$_GET['nombre'];
   $direccion=$_GET['direccion'];
   $telefono=$_GET['telefono'];   
   $correo=$_GET['correo'];
   $rfc=$_GET['rfc'];
   $bancos=$_GET['bancos'];
   $ncuenta=$_GET['ncuenta'];  
   $cinterbancaria=$_GET['cinterbancaria'];
      $bancos2=$_GET['bancos2'];
   $ncuenta2=$_GET['ncuenta2'];  
   $cinterbancaria2=$_GET['cinterbancaria2'];

   mysql_query("UPDATE proveedores SET nombre='$nombre', direccion='$direccion', telefono='$telefono' , correo='$correo', rfc='$rfc', bancos='$bancos', ncuenta='$ncuenta', cinterbancaria='$cinterbancaria' , bancos2='$bancos2', ncuenta2='$ncuenta2', cinterbancaria2='$cinterbancaria2'where id='$id'",$link);

?>
<SCRIPT LANGUAGE="javascript">
location.href = "proveedores.php";
</SCRIPT> 