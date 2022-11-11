<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("select * from clientes",$link);

?>
 
<center>
<TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR >
	<TD align="center"><B>Clave del Cliente</B></span></TD>
	<TD align="center"><B>RFC</B>&nbsp;</span></TD>
	<TD align="center"><B>Nombre</B>&nbsp;</span></TD>
	<TD align="center"><B>Direcci&oacute;n</B>&nbsp;</span></TD>
	<TD align="center"><B>Telefono</B></span></TD>
	<TD align="center"><B>Correo</B>&nbsp;</span></TD>
	<TD align="center"><B>Contacto</B>&nbsp;</span></TD>
	<TD align="center"><B>Telefono Fijo</B>&nbsp;</span></TD>
	<TD align="center"><B>Celular</B>&nbsp;</span></TD>
	<TD align="center"><B>Fax</B>&nbsp;</span></TD>
	<TD align="center"><B>Fecha de Registro</B>&nbsp;</span></TD>
	<TD align="center"><B>Borrar</B>&nbsp;</span></TD>
	<TD align="center"><B>Modificar</B>&nbsp;</span></TD>
      </TR>
<?php          
while($row = mysql_fetch_array($result))
{
	printf("<tr><td class='Estilo4'>&nbsp;%s</td><td class='Estilo4'>&nbsp;%s</td><td class='Estilo4'>&nbsp;%s&nbsp;</td><td class='Estilo4'>&nbsp;%s</td><td class='Estilo4'>&nbsp;%s</td><td class='Estilo4'>&nbsp;%s&nbsp;</td><td class='Estilo4'>&nbsp;%s</td><td class='Estilo4'>&nbsp;%s</td><td class='Estilo4'>&nbsp;%s&nbsp;</td><td class='Estilo4'>&nbsp;%s</td><td class='Estilo4'>&nbsp;%s</td><td class='Estilo4'><a style=\"text-decoration:underline;cursor:pointer;\" onclick=\"confirmar('".$row['ccliente']."')\"><center><img src='images/eliminar.png' width='30' height='30'></center></a></td><td class='Estilo4'><a href=\"actualizacl.php?ccliente=%s\"><center><img src='images/editar.gif' width='30' height='30'></center></a></td></tr>",$row["ccliente"], $row["rfc"], $row["nombre"], $row["direccion"], $row["telefono"], $row["correo"], $row["contacto"], $row["telefonof"], $row["celular"], $row["fax"], $row["fechareg"], $row["ccliente"], $row["ccliente"]);
}

   mysql_free_result($result);
   mysql_close($link);  
?> 
</table>