<html>
<head>
<script type="text/javascript">

function IsNumeric(expression)
{
var nums = "0123456789.-";
if (expression.length==0)return(false);
for (var n=0; n < expression.length; n++){
if(nums.indexOf(expression.charAt(n))==-1)return(false);
}
return(true);
}

function Sum()
{
if (IsNumeric(document.getElementById("Var1").value) == false || IsNumeric(document.getElementById("Var2").value) == false)
{
document.getElementById("Result").value = "Valores no num�ricos";
}
else
{
document.getElementById("Result").value = parseFloat(document.getElementById("Var1").value) + parseFloat(document.getElementById("Var2").value);
if (document.getElementById("Result").value == "NaN")
{
document.getElementById("Result").value ="";
}
}
}
</script>

   <title>Reporte General por Fecha</title>
   <style type="text/css">
<!--
.Estilo2 {
	font-size: 16px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo7 {
	font-size: 22px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo8 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.Estilo9 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
-->
   </style>
</head>
<body >
<span class="Estilo20 Estilo7"> Corte de Caja </span>

<hr>
<H1 align="left" class="Estilo9">Corte de Caja del <?=$fechaini ?> al <?=$fechafin ?> </H1>
<H1 align="left" class="Estilo2">&nbsp;</H1>
<H1 class="Estilo2"></hr>
</H1>
<center>
<?php
   include("conexion.php");
   $link=Conectarse();
   ?>

<center>
<?php
   $result1=mysql_query("SELECT norecibo,clave,descripcion,cantidad,unidad,preciop FROM ingresos WHERE fecha >='".$fechaini."' and fecha <='".$fechafin."' and fpago = 'CONTADO' ORDER BY norecibo", $link);
?>
<center>
    COMPRAS DE CONTADO
<TABLE BORDER=1 align="center" CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR bgcolor="#CCCCCC">
        <TD width="72" align="center">&nbsp;<B>Numero de Nota</B>&nbsp;</TD>
	<TD width="72" align="center">&nbsp;<B>Clave</B>&nbsp;</TD>
	<TD width="193" align="center">&nbsp;<B>Descripci&oacute;n</B>&nbsp;</TD>
	<TD width="69" align="center">&nbsp;<B>Cantidad</B>&nbsp;</TD>
	<TD width="69" align="center">&nbsp;<B>Unidad</B>&nbsp;</TD>
	<TD width="108" align="center">&nbsp;<B>Precio Unitario</B>&nbsp;</TD>
	<TD width="118" align="center">&nbsp;<B>Importe</B>&nbsp;</TD>

   </TR>
<?php          
while($row = mysql_fetch_array($result1))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$row["norecibo"],$row["clave"], $row["descripcion"],$row["cantidad"],$row["unidad"],$row["preciop"],$row["preciop"]*$row["cantidad"] );
}

   mysql_free_result($result1);
 
?> 
</table>
</center>
<hr>
</hr>
<? $total0 = 0;
$resultado0 = mysql_query("SELECT sum(preciop*cantidad) as total FROM ingresos WHERE fecha >='".$fechaini."' and fecha <='".$fechafin."' and fpago='CONTADO'");
$row=@mysql_fetch_array($resultado0);
$resefectivo=$row['total'];
echo "<h2>Total Compras: $".$resefectivo."</h2>";
//mysql_close($link);
?>
<HR>
<center>
<?php
   $result2=mysql_query("SELECT norecibo,clave,descripcion,cantidad,unidad,preciop FROM ingresos WHERE fecha >='".$fechaini."' and fecha <='".$fechafin."' and fpago = 'CREDITO' ORDER BY norecibo", $link);
?>
<center>
    COMPRAS A CREDITO
<TABLE BORDER=1 align="center" CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR bgcolor="#CCCCCC">
        <TD width="72" align="center">&nbsp;<B>Numero de Nota</B>&nbsp;</TD>
	<TD width="72" align="center">&nbsp;<B>Clave</B>&nbsp;</TD>
	<TD width="193" align="center">&nbsp;<B>Descripci&oacute;n</B>&nbsp;</TD>
	<TD width="69" align="center">&nbsp;<B>Cantidad</B>&nbsp;</TD>
	<TD width="69" align="center">&nbsp;<B>Unidad</B>&nbsp;</TD>
	<TD width="108" align="center">&nbsp;<B>Precio Unitario</B>&nbsp;</TD>
	<TD width="118" align="center">&nbsp;<B>Importe</B>&nbsp;</TD>

   </TR>
<?php
while($row = mysql_fetch_array($result2))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$row["norecibo"],$row["clave"], $row["descripcion"],$row["cantidad"],$row["unidad"],$row["preciop"],$row["preciop"]*$row["cantidad"] );
}

   mysql_free_result($result2);

?>
</table>
</center>
<hr>
<center>
<?php
   $result3=mysql_query("SELECT ccliente,descripcion,preciop FROM cuntacob WHERE fecha >='".$fechaini."' and fecha <='".$fechafin."' ORDER BY ccliente", $link);
?>
    ABONOS
<TABLE BORDER=1 align="center" CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR bgcolor="#CCCCCC">

	<TD width="72" align="center">&nbsp;<B>Cliente</B>&nbsp;</TD>
	<TD width="193" align="center">&nbsp;<B>Descripci&oacute;n</B>&nbsp;</TD>
	<TD width="69" align="center">&nbsp;<B>Monto</B>&nbsp;</TD>


   </TR>
<?php
while($row = mysql_fetch_array($result3))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$row["ccliente"],$row["descripcion"], $row["preciop"]);
}

   mysql_free_result($result3);

?>
</table>
</center>
</hr>
<? $total1 = 0;
$resultado1 = mysql_query("SELECT sum(preciop) as total FROM cuntacob WHERE fecha >='".$fechaini."' and fecha <='".$fechafin."'");

$row=@mysql_fetch_array($resultado1);
$respagos=$row['total'];
echo "<h2>Total Abonos: $".$respagos."</h2>";
mysql_close($link);
?>
<HR>
<?php
$resgeneral=$resefectivo+$respagos;
echo "<h2>Total General: $".$resgeneral."</h2>";
?>
<TABLE>
<TR>
<TD><TABLE><TR><TD width="147">CAJA</TD>
<TD width="152">BANCO</TD>
<TD width="142">TOTAL</TD>
</TR></TABLE>
</TD>
</TR>

<TR>
<TD>
<form id="form1"> 
  <p>
    <input id="Var1" onKeyUp="Sum();" type="text" value="0">
    +
    <input id="Var2" onKeyUp="Sum();" type="text" value="0">
    <input id="Result" type="text">
  </p>
</form>
</TD></TR>
</TABLE>
<hr>
<p>&nbsp;</p>
<table width="743" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="280" height="52">___________________________________</td>
    <td width="183">&nbsp;</td>
    <td width="280">___________________________________</td>
  </tr>
  <tr>
    <td><div align="center">Elaboro</div></td>
    <td>&nbsp;</td>
    <td><div align="center">Reviso</div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html> 