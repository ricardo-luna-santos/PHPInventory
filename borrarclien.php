<?php
    include("conexion.php");
    $link=Conectarse();
    $ccliente=$_GET['ccliente'];
    mysql_query("delete from clientes where ccliente = '".$ccliente."'",$link);
?>
<SCRIPT LANGUAGE="javascript">
location.href = "cliente.php";
</SCRIPT> 

