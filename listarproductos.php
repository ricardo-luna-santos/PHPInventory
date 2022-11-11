<?php
// include("conexion.php");
   //$link=Conectarse();
   $result=mysql_query("select * from productos ORDER BY descripcion",$link);
?>
      </p>
      <TABLE BORDER=1 align="center" CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR>
	<TD height="34" align="center">&nbsp;Clave del Producto</TD>
	<TD align="center">&nbsp;Descripci&oacute;n&nbsp;</TD>
	<TD align="center">&nbsp;Unidad&nbsp;</TD>
	<TD align="center">&nbsp;Precio&nbsp;</TD>
	<TD align="center">&nbsp;Precio al Publico&nbsp;</TD>
	<TD align="center">&nbsp;Existencia&nbsp;</TD>
    <TD align="center">&nbsp;Proveedor&nbsp;</TD>
    <TD align="center">&nbsp;Fecha de Registro&nbsp;</TD>
	<TD align="center">&nbsp;Borrar&nbsp;</TD>
	<TD align="center">&nbsp;Modificar&nbsp;</TD>
      </TR>
<?php          
while($row = mysql_fetch_array($result))
{
	printf("<tr><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s&nbsp;</td><td class='Estilo5'>&nbsp;%s&nbsp;</td><td class='Estilo5'>&nbsp;%s&nbsp;</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'>&nbsp;%s</td><td class='Estilo5'><a style=\"text-decoration:underline;cursor:pointer;\" onclick=\"confirmar('".$row['clave']."')\"><center><img src='images/eliminar.png' width='30' height='30'></center></a></td><td class='Estilo5'><a href=\"actualizar.php?clave=%s\"><center><img src='images/editar.gif' width='30' height='30'></center></a></td></tr>",$row["clave"],$row["descripcion"],$row["unidad"], $row["precio"], $row["preciop"],$row["existencia"],$row["nombrep"],$row["fechareg"],$row["clave"],$row["clave"]);
}

   mysql_free_result($result);
   mysql_close($link);  
?> 
</table>

