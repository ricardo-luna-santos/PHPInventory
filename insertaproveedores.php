<?php
   include("conexion.php");
   $link=Conectarse();
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
   mysql_query("insert into proveedores (nombre,direccion,telefono,correo,rfc,bancos,ncuenta,cinterbancaria,bancos2,ncuenta2,cinterbancaria2) values ('$nombre','$direccion','$telefono','$correo','$rfc','$bancos','$ncuenta','$cinterbancaria','$bancos2','$ncuenta2','$cinterbancaria2')",$link);

?>
<SCRIPT LANGUAGE="javascript">
location.href = "proveedores.php";
</SCRIPT> 
