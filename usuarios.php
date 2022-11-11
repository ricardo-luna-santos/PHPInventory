<link rel="stylesheet" href="css/estilo.css"/>
	  <script language="JavaScript" type="text/javascript" src="funsiones.js"></script>
    <form method="POST" action="registrar.php">
  <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><span class="Estilo1"><b>Usuario:</b></span></td>
    <td><input type="text" name="nick" size="20"></td>
  </tr>
  <tr>
    <td><span class="Estilo1"><b>Email:</b></span></td>
    <td><input type="text" name="email" size="30"></td>
  </tr>
  <tr>
    <td><span class="Estilo1"><b>Contrase&ntilde;a:</b></span></td>
    <td><input type="password" name="password" size="20"></td>
  </tr>
  <tr>
    <td><span class="Estilo1"><b>Nombre:</b></span></td>
    <td><input type="text" name="nombre" size="30"></td>
  </tr>
    <tr>
    <td><span class="Estilo1"><b>Telefono:</b></span></td>
    <td><input type="text" name="telefono" size="30"></td>
  </tr>
  <tr>
    <td><span class="Estilo1"><b>Direccion:</b></span></td>
    <td><input type="text" name="direccion" size="30"></td>
  </tr>
  <tr>
    <td><span class="Estilo1"><b>Tipo:</b></span></td>
    <td>
      <select name="tipo">
        <option value="Cajero">Cajero</option>
        <option value="Administrador">Administrador</option>
      </select>
  </tr>
</table>
<p align="center">
  <input type="submit" value="Enviar" name="privado">
</p>
</form>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from usuarios where nick!='admin'",$link);

?>

<table BORDER=1 align="center" CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR bgcolor="#CCCCCC">
	<TD align="center">&nbsp;<B>Usuario</B></TD>
	<TD align="center">&nbsp;<B>Email</B>&nbsp;</TD>
	<TD align="center">&nbsp;<strong>Contrase&ntilde;a</strong>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Nombre</B>&nbsp;</TD>
  <TD align="center">&nbsp;<B>Telefono</B>&nbsp;</TD>
  <TD align="center">&nbsp;<B>Direccion</B>&nbsp;</TD>
  <TD align="center">&nbsp;<B>Tipo</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Borrar</B>&nbsp;</TD>
      </TR>
<?php          
while($row = mysql_fetch_array($result))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td><img onclick='confirmarr(&nbsp;%s);' src='images/eliminar.png'/></td></tr>",$row["nick"], $row["email"], $row["password"], $row["nombre"], $row["telefono"], $row["direccion"], $row["tipo"], $row["id"]);
}

   mysql_free_result($result);
   mysql_close($link);  
?> 
</table>
