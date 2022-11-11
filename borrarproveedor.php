<?php
    include("conexion.php");
    $link=Conectarse();
    mysql_query("delete from proveedores where id = $id" ,$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "proveedores.php";
</SCRIPT> 

