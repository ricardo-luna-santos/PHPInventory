<!-- Manual de PHP de WebEstilo.com -->

<html>
<head>
    <script>
function confirmar(id) {
if (!confirm ("Deseas continuar?")) {
//window.location = "";
}
else {
window.location = "borrarcuntacob.php?id="+id;
}
}
</script>
   <title>Cuentas por Cobrar por Alumno</title>
   <style type="text/css">
<!--
.Estilo2 {
	font-size: 16px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo8 {color: #000000}
.Estilo9 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
.Estilo12 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo13 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 22px;
	font-weight: bold;
}
-->
   </style>
</head>
<body >
<span class="Estilo20 Estilo13"> Estado de Cuenta</span>
<hr>
<H1 class="Estilo2">
  </hr>
  <?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM cuntacob WHERE ccliente='".$ccliente."'", $link);
   $result0=mysql_query("SELECT * FROM clientes WHERE ccliente='".$ccliente."'", $link);
   ?>
</H1>
<center>
  <p class="Estilo9">DATOS DEL CLIENTE </p>
  <TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#ffffff" bgcolor="#CCCCCC">
      <TR>
	<TD height="32" align="center" bgcolor="#CCCCCC" class="Estilo12">&nbsp;<B>Clave de Cliente</B>&nbsp;</TD>
	<TD align="center" bgcolor="#CCCCCC" class="Estilo12">&nbsp;<B>Nombre</B>&nbsp;</TD>
	<TD align="center" bgcolor="#CCCCCC" class="Estilo12">&nbsp;<B>RFC</B>&nbsp;</TD>
	<TD align="center" bgcolor="#CCCCCC" class="Estilo12">&nbsp;<B>Telefono</B>&nbsp;</TD>
      </TR>
<?php   
while($row = mysql_fetch_array($result0))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$row["ccliente"],$row["nombre"], $row["rfc"], $row["telefono"]);

}
   mysql_free_result($result0);
?> 
</table>
<hr>
<p><span class="Estilo9">ABONOS</span></p>
<TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <TR>	
	<TD width="280" height="28" align="center" class="Estilo12"><span class="Estilo8">&nbsp;<B>Descripci&oacute;n</B>&nbsp;</span></TD>
	<TD width="93" align="center" bgcolor="#CCCCCC" class="Estilo12"><span class="Estilo8">&nbsp;<B>Precio</B>&nbsp;</span></TD>
	<TD width="82" align="center" bgcolor="#CCCCCC" class="Estilo12"><span class="Estilo8">&nbsp;<B>Borrar</B>&nbsp;</span></TD>
      </TR>
	  
<?php 
while($row = mysql_fetch_array($result)) 
{

	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td><a style=\"text-decoration:underline;cursor:pointer;\" onclick=\"confirmar('".$row['id']."')\"><center><img src='images/eliminar.png' width='30' height='30'></center></a></td></tr>", $row["descripcion"], $row["preciop"], $row["id"]);
}
   mysql_free_result($result);
?> 
</TABLE>
<hr>
<p><span class="Estilo9">CUENTAS POR PAGAR </span></p>
<TABLE height="43" BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#FFFFFF" bgcolor="#CCCCCC">
      <TR>
	<TD width="132" align="center" class="Estilo12">&nbsp;<B>Clave del Producto</B>&nbsp;</TD>
	<TD width="66" align="center" class="Estilo12">&nbsp;Cantidad&nbsp;</TD>
	<TD width="85" align="center" class="Estilo12"><b>Descripci&oacute;n</b>&nbsp;&nbsp;</TD>
      <TD width="106" align="center" class="Estilo12"><b>Precio Unitario </b></TD>
      <TD width="106" align="center" class="Estilo12"><b>Recibo </b></TD>
      </TR>
<?php
$result1=mysql_query("SELECT * FROM ingresos WHERE ccliente='".$ccliente."' and fpago='CREDITO' order by clave", $link); 
while($row = mysql_fetch_array($result1))
{

	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$row["clave"], $row["unidad"], $row["descripcion"], $row["preciop"], $row["norecibo"]);

}

   mysql_free_result($result1);
  
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
</center>

</body>
</html>