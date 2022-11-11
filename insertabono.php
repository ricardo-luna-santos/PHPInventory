<?php
   include("conexion.php");
   $link=Conectarse();
   $ccliente=$_GET['ccliente'];
   $descripcion=$_GET['descripcion'];
   $preciop=$_GET['preciop'];
   $fecha=$_GET['fecha'];
   
    mysql_query("insert into cuntacob (ccliente,descripcion,preciop,fecha) values ('$ccliente','$descripcion','$preciop','$fecha')",$link);
    echo "<table>";
    echo "<tr>";
    echo "<td>";
    echo "Esto no es un comprobante fiscal";
    echo "</td>";
     echo "</tr>";
      echo "<tr>";
    echo "<td>";
    echo $fecha;
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "Clave del Cliente:";
    echo "</td>";
    echo "<td>";
    echo $ccliente;
    echo "</td>";
    echo "</tr>";
        echo "<tr>";
    echo "<td>";
    echo "Descripcion:";
    echo "</td>";
    echo "<td>";
    echo $descripcion;
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "Ingreso a Cuenta:";
    echo "</td>";
    echo "<td>";
     echo "$",$preciop;
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>";
     echo "Muchas Gracias";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
   
?>
</table>
<p><span class="Estilo9">ADEUDO TOTAL </span></p>
<table>
<tr>
<td><? $total = 0;
$resultado = mysql_query("SELECT sum(preciop)as total_price FROM ingresos where ccliente='".$ccliente."'and fpago='CREDITO'"); 
if ($resultado && mysql_num_rows($resultado) > 0) {
  $query_data=mysql_fetch_array($resultado);
  $total= (float)$query_data["total_price"];
  } //;
echo "EL Total a Pagar Es:   $".$total;
//  mysql_close($link); 
?></td>
</tr>
<tr>
<td><? $total0 = 0;
$resultado0 = mysql_query("SELECT sum(preciop)as total_price FROM cuntacob where ccliente='".$ccliente."'"); 
if ($resultado0 && mysql_num_rows($resultado0) > 0) {
  $query_data=mysql_fetch_array($resultado0);
  $total0= (float)$query_data["total_price"];
  } //;
echo "Usted ha pagado:   $".$total0;
//  mysql_close($link); 
?></td>
</tr>
<tr>
<td>
<?
$saldos=$total-$total0;
echo "Su Adeudo es de:   $".$saldos;
?></td>
</tr>
</table>
