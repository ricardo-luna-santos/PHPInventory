<html>
<head>
   <title>Catalogo de Clientes</title>
   <style type="text/css">
<!--
.Estilo7 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo8 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 22px;
	font-weight: bold;
}
.Estilo9 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.Estilo10 {font-size: 14px}
-->
   </style>
</head>
<body >
  <hr>
  <span class="Estilo20 Estilo8"> REPORTE DE CLIENTES </span>
<H1 align="right" class="Estilo12 Estilo9">
  <center>
</H1>
<div align="center">
  <p align="left" class="Estilo10"><span class="Estilo7">Catalogo de Clientes</span><?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM clientes ", $link);
?>
  </p>
</div>
<center>
<TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR bgcolor="#CCCCCC">
	<TD align="center">&nbsp;<B>Clave del Cliente</B></TD>
	<TD align="center">&nbsp;<B>RFC</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Nombre</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Dirección</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Telefono</B></TD>
	<TD align="center">&nbsp;<B>Correo</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Contacto</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Telefono Fijo</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Celular</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Fax</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Fecha de Registro</B>&nbsp;</TD>
	 </TR>
<?php          
while($row = mysql_fetch_array($result))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$row["ccliente"], $row["rfc"], $row["nombre"], $row["direccion"], $row["telefono"], $row["correo"], $row["contacto"], $row["telefonof"], $row["celular"], $row["fax"], $row["fechareg"], $row["ccliente"], $row["ccliente"]);
}

   mysql_free_result($result);
   mysql_close($link);  
?> 
</table>
</center>
</body>
</html> 