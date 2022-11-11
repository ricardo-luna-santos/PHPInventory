<?php
    include("conexion.php");
    $link=Conectarse();
    mysql_query("delete from usuarios where id = $id" ,$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "usuarios.php";
</SCRIPT> 

