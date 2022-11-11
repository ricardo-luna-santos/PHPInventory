  <?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from proveedores",$link);

?>
</p>
<TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR>
	<TD align="center">&nbsp;<B>Nombre</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Direcci&oacute;n</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Telefono</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Correo</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>RFC</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Bancos</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Numero de Cuenta</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Clave Interbancaria</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Borrar</B>&nbsp;</TD>
	<TD align="center">&nbsp;<B>Modificar</B>&nbsp;</TD>
      </TR>
<?php          
while($row = mysql_fetch_array($result))
{
	printf("<tr><td class='Estilo5'>&nbsp;%s&nbsp;</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'><a style=\"text-decoration:underline;cursor:pointer;\" onclick=\"confirmar(id=%d)\"><center><img src='images/eliminar.png' width='30' height='30'></center></a></td><td class='Estilo5'><a href=\"actualizap.php?id=%d\"><center><img src='images/editar.gif' width='30' height='30'></center></a></td></tr>",$row["nombre"], $row["direccion"], $row["telefono"], $row["correo"], $row["rfc"], $row["bancos"], $row["ncuenta"], $row["cinterbancaria"], $row["id"], $row["id"]);
}

   mysql_free_result($result);
   mysql_close($link);  
?> 
</table>
 


