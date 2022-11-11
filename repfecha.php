  <p><h1><span class="Estilo13">Reporte por Fecha del
    <?=$fechaini ?>
    al
    <?=$fechafin ?>
  </span></h1></p>
  <p>
    <center>
    <?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM ingresos WHERE fecha >='".$fechaini."' and fecha <='".$fechafin."' ", $link);
?>
    </p>

<center>
<TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR>
	<TD align="center" bgcolor="#CCCCCC" class="Estilo12">&nbsp;<B>Recibo</B>&nbsp;</TD>
	<TD align="center" bgcolor="#CCCCCC"class="Estilo12">&nbsp;<B>Clave del Producto</B>&nbsp;</TD>
	<TD align="center" bgcolor="#CCCCCC"class="Estilo12">&nbsp;<B>Descripcion</B>&nbsp;</TD>
	<TD align="center" bgcolor="#CCCCCC"class="Estilo12">&nbsp;<B>Importe</B>&nbsp;</TD>
	<TD align="center" bgcolor="#CCCCCC" class="Estilo12">&nbsp;<B>Fecha</B>&nbsp;</TD>
   </TR>
<?php          
while($row = mysql_fetch_array($result))
{
	printf("<tr><td class='Estilo16'>&nbsp;%s</td><td class='Estilo16'>&nbsp;%s</td><td class='Estilo16'>&nbsp;%s</td><td class='Estilo16'>&nbsp;%s</td><td class='Estilo16'>&nbsp;%s</td></tr>",$row["norecibo"],$row["clave"], $row["descripcion"], $row["preciop"],$row["fecha"]);
}

   mysql_free_result($result);
?> 
</table>
</center>
