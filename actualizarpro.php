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
   mysql_query("UPDATE productos SET descripcion='$descripcion',unidad='$unidad', precio='$precio', preciop='$preciop', existencia='$existencia', nombrep='$nombrep', fechareg='$fechareg' where clave='$clave'",$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "productos.php";
</SCRIPT> 
