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
   $comentarios=$_GET['fechareg']; 

   mysql_query("UPDATE clientes SET rfc='$rfc',nombre='$nombre',direccion='$direccion',telefono='$telefono',correo='$correo',contacto='$contacto', telefonof='$telefonof',celular='$celular',fax='$fax',fechareg='$fechareg' where ccliente='".$ccliente."'",$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "cliente.php";
</SCRIPT> 