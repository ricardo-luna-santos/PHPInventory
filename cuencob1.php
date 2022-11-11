
    <p align="center">DEUDORES</p>
    <hr>


    <TABLE height="43" BORDER=1 align="center" CELLPADDING=0 CELLSPACING=0 bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <TR>
          <TD width="132" align="center" class="Estilo12">&nbsp;<B>Clave del Cliente</B>&nbsp;</TD>
          <TD width="132" align="center" class="Estilo12">&nbsp;<B>Cliente</B>&nbsp;</TD>
	  <TD width="76" align="center" class="Estilo12"><b>Adeudo</b></TD>
      </TR>
<?php
   include("conexion.php");
   $link=Conectarse();

$result1=mysql_query("SELECT * FROM ingresos WHERE fpago='CREDITO' GROUP BY ccliente", $link);

while($row = mysql_fetch_array($result1))
{

    $total = 0;
    $resultad = mysql_query("SELECT nombre FROM clientes where ccliente='".$row["ccliente"]."'");
if ($resultad && mysql_num_rows($resultad) > 0) {
  $query_data=mysql_fetch_array($resultad);
  $nom=$query_data["nombre"];
  }
$resultado = mysql_query("SELECT sum(preciop)as total_price FROM ingresos where ccliente='".$row["ccliente"]."'and fpago='CREDITO'");
if ($resultado && mysql_num_rows($resultado) > 0) {
  $query_data=mysql_fetch_array($resultado);
  $total= (float)$query_data["total_price"];
  }
//echo "EL Total a Pagar Es:   $".$total;
//echo "<br>";
$total0 = 0;
$resultado0 = mysql_query("SELECT sum(preciop)as total_price FROM cuntacob where ccliente='".$row["ccliente"]."'");
if ($resultado0 && mysql_num_rows($resultado0) > 0) {
  $query_data=mysql_fetch_array($resultado0);
  $total0= (float)$query_data["total_price"];
  }
//echo "Usted ha pagado:   $".$total0;
//echo "<br>";
$saldos=$total-$total0;
//echo "Su Adeudo es de:   $".$saldos;


if ($total>$total0)
{
printf("<tr><td><a href=consulta.php?ccliente=".$row["ccliente"].">&nbsp;%s</a></td><td>&nbsp;%s</td><td>$&nbsp;%s</td></tr>",$row["ccliente"],$nom,$saldos);
}

}

   mysql_free_result($result1);

?>
</TABLE>
