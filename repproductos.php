<!-- Manual de PHP de WebEstilo.com -->

<html>
<head>
   <title>Catalogo de Cuentas</title>
   <style type="text/css">
<!--
.Estilo7 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo8 {
	font-size: 22px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo9 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo10 {font-size: 14px}
-->
   </style>
</head>
<body >
  <hr>
  <span class="Estilo20 Estilo8"> REPORTE DE PRODUCTOS </span>
<H1 align="right" class="Estilo12 Estilo9">
  <center>
</H1>
<div align="center">
  <p align="left" class="Estilo10"><span class="Estilo7">Catalogo de Productos </span>
    <?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM productos ORDER BY clave", $link);
?>
  </p>
</div>
<center>
<TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR bgcolor="#CCCCCC">
	<TD align="center">&nbsp;<B>Clave del Producto</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Descripcion</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Precio al Publico</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Existencia</B>&nbsp;</TD>
	 </TR>
<?php          
while($row = mysql_fetch_array($result))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$row["clave"], $row["descripcion"], $row["preciop"], $row["existencia"]);
}

   mysql_free_result($result);
   mysql_close($link);  
?> 
</table>
</center>
</body>
</html> 