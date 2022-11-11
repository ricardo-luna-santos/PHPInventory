<?php
    require("conexion.php");
	$link=Conectarse();
    $id=$_GET['id'];
    $norecibo=$_GET['norecibo'];
    
   $sql="SELECT * FROM ingresos WHERE id='".$id."'";
   $result=mysql_query($sql, $link);
   while($row = mysql_fetch_array($result)){
   $cantidad = $row[cantidad];
   $clave=$row[clave];
   $norecibo=$row[norecibo];
   }
   $sqll="SELECT * FROM productos WHERE clave='".$clave."'";
   $result0=mysql_query($sqll, $link);
   while($row = mysql_fetch_array($result0)){
	$clave=$row[clave];
    $existencia = $row[existencia];
   }
   
   $existencia1=$existencia+$cantidad;
   
   $sqlll="UPDATE productos SET existencia='".$existencia1."' where clave='".$clave."'";
   mysql_query($sqlll,$link);
   
    mysql_query("delete from ingresos where id = '".$id."'" ,$link);
    include ('datosventa.php');
?>
