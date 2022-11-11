<?php
   include("conexion.php");
   $link=Conectarse();
   $clave=$_GET['clave'];
   $descripcion=$_GET['descripcion'];
   $unidad=$_GET['unidad'];
   $precio=$_GET['precio'];
   $preciop=$_GET['preciop'];
   $existencia=$_GET['existencia'];
   $nombrep=$_GET['nombrep'];
   $fechareg=$_GET['fechareg'];
   
   mysql_query("insert into productos(clave,descripcion,unidad,precio,preciop,existencia,nombrep,fechareg) values ('$clave','$descripcion','$unidad','$precio','$preciop','$existencia','$nombrep','$fechareg')",$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "productos.php";
</SCRIPT> 
