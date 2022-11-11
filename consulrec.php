<?php
session_start();
   include("conexion.php");
   $link=Conectarse();
   $result0=mysql_query("SELECT * FROM ingresos where norecibo=$norecibo", $link);
 ?>

 <?php
   while($row = mysql_fetch_array($result0)){
   $rfc = $row[rfc];
   $nombrecl = $row[ccliente];
   $direccion = $row[direccion];
   $ccliente = $row[ccliente];
   $fecha = $row[fecha];
   $descuento = $row[descuento];
   $iva = $row[iva];
   $fpago = $row[fpago];
   $tpago = $row[tpago];
   $entrega = $row[entrega];
   }
$total0 = 0;
$res = mysql_query("SELECT sum(importe)as total_prices FROM ingresos WHERE norecibo='".$norecibo."'"); 
if ($res && mysql_num_rows($res) > 0) {
  $query_data=mysql_fetch_array($res);
  $total0= (float)$query_data["total_prices"];
  } //;
$total1 = 0;
$res = mysql_query("SELECT sum(preciop*cantidad)as total_prices FROM ingresos WHERE norecibo='".$norecibo."'");
if ($res && mysql_num_rows($res) > 0) {
  $query_data=mysql_fetch_array($res);
  $total1= (float)$query_data["total_prices"];
  } 
  	echo "<br>Fecha: ".$fecha;
  	echo "<br>No Recibo: ".$norecibo;
  	echo "<br>Cliente: ".$nombrecl;

  	echo "<br>Forma de Pago:".$fpago;
	echo "<br>Tipo de Pago:".$tpago;
  	echo "<br>Entrega: ".$entrega;
   $result2=mysql_query("SELECT * FROM ingresos where norecibo=$norecibo", $link);
?>
  <table border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td>Producto</td>
      <td>Cantidad</td>
      <td>Precio</td>
    </tr>
	<?php          
while($row = mysql_fetch_array($result2))
{
	printf("<tr><td class='Estilo12'>&nbsp;%s</td><td class='Estilo12'>&nbsp;%s&nbsp;</td><td class='Estilo12'>&nbsp;%s</td></tr>",$row["descripcion"],$row["cantidad"], $row["preciop"]);
}?>

</table>
<?
   mysql_free_result($result2);
   mysql_close($link);  

echo "<br>TOTAL: $".$total1; 
     include('cantidadletra.php');
echo "<br>";
echo num2letras ($total1);
echo "<br>DESCUENTO: ".$descuento."%"
?>