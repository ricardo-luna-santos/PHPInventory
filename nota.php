<?php
   include 'conexion.php';
   //$link=Conectarse();
   $sql="SELECT MAX(norecibo) AS norecibo FROM ingresos";
   $result=mysql_query($sql, $link);
   while($row = mysql_fetch_array($result)){
   $norecibo = $row[norecibo];
   }
$norecibo=$norecibo+1;
include ('prueba.php');
?>
