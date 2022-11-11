<?php
   include ("conexion.php");
  $link=Conectarse();
   $result=mysql_query("SELECT * FROM productos WHERE clave='".$clave."'", $link);
   while($row = mysql_fetch_array($result)){
   $clave = $row[clave];
   $descripcion = $row[descripcion];
   $precio = $row[preciop];
   $existencia=$row[existencia];
   $unidad =$row[unidad];
   $existencia1=$existencia-$cantidad;
   }
   mysql_free_result($result);
      $sql="UPDATE productos SET existencia='".$existencia1."' where clave='".$clave."'";
   mysql_query($sql,$link);
      $desc=($precio*$descuento/100);
	  $preciop=$precio-$desc;
mysql_query("insert into ingresos(norecibo,ccliente,clave,descripcion,cantidad,unidad,preciop,fecha,descuento,fpago,tpago,entrega) values ('$norecibo','$ccliente','$clave','$descripcion','$cantidad','$unidad','$preciop','$fecha','$descuento','$fpago','$tpago','$entrega')",$link);
header ("Location: prueba.php?norecibo=$norecibo");
?>