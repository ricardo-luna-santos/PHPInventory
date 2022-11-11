<?php
   include("conexion.php");
   $link=Conectarse();
   $ccliente=$_GET['ccliente'];
   $rfc=$_GET['rfc'];
   $nombre=$_GET['nombre'];  
   $direccion=$_GET['direccion'];
   $telefono=$_GET['telefono'];
   $correo=$_GET['correo']; 
   $contacto=$_GET['contacto'];
   $telefonof=$_GET['telefonof'];
   $celular=$_GET['celular']; 
   $fax=$_GET['fax'];
   $fechareg=$_GET['fechareg']; 
 
   mysql_query("insert into clientes (ccliente,rfc,nombre,direccion,telefono,correo,contacto,telefonof,celular,fax,fechareg) values ('$ccliente','$rfc','$nombre','$direccion','$telefono','$correo','$contacto','$telefonof','$celular','$fax','$fechareg')",$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "cliente.php";
</SCRIPT> 
