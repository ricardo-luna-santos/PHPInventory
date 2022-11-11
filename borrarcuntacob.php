<?php
    include("conexion.php");
    $link=Conectarse();
    $id=$_GET['id'];
    mysql_query("delete from cuntacob where id = '".$id."'" ,$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "consul.php";
</SCRIPT> 

