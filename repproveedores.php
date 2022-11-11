<html>
<head>
   <title>Catalogo de Proveedores</title>
   <style type="text/css">
<!--
.Estilo7 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Estilo12 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.Estilo20 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 22px; font-weight: bold; }
.Estilo21 {font-size: 14px}
-->
   </style>
</head>
<body >
  <hr>
  <div align="left"><span class="Estilo20"> REPORTE DE PROVEEDORES </span>
  </div>
  <H1 align="right" class="Estilo12">&nbsp;</H1>
  <hr>
<center>
<div align="left" class="Estilo21"><span class="Estilo7">Catalogo de Proveedores</span>
  <?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM proveedores ", $link);
?>
</div>
<center>
  <p>&nbsp;</p>
  <TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR bgcolor="#CCCCCC">
	<TD align="center">&nbsp;<B>Nombre</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Dirección</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Telefono</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Correo</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>RFC</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Banco</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Numero de Cuenta</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Clave Interbancaria</B>&nbsp;</TD>
	 </TR>
<?php          
while($row = mysql_fetch_array($result))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$row["nombre"],$row["direccion"],$row["telefono"],$row["correo"],$row["rfc"],$row["bancos"],$row["ncuenta"],$row["cinterbancaria"]);
}

   mysql_free_result($result);
   mysql_close($link);  
?> 
</table>
</center>
</body>
</html> 