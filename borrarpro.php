<?php
    include("conexion.php");
    $link=Conectarse();
    $clave=$_GET['clave'];
    mysql_query("delete from productos where clave = '".$clave."'" ,$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "productos.php";
</SCRIPT> 

