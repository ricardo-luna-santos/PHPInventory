
<H1 align="left" class="Estilo9">Reporte por Fecha del
  <?=$fechaini ?>
  al
  <?=$fechafin ?>
  del Producto
  <?=$claves?>
</H1>
<H1 align="right" class="Estilo2">&nbsp;</H1>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM ingresos WHERE fecha >='".$fechaini."' and fecha <='".$fechafin."' and clave = '".$claves."'", $link);
   
$res=mysql_query("SELECT * FROM ingresos WHERE fecha >='".$fechaini."' and fecha <='".$fechafin."' and clave = '".$claves."'", $link);
while($row=mysql_fetch_assoc($res))
$total+=$row['cantidad'];

?>

<center>
<TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 bordercolor="#999999">
      <TR>
	<TD align="center" bgcolor="#CCCCCC"><span class="Estilo30">&nbsp;<B>Recibo</B>&nbsp;</span></TD>
	<TD align="center" bgcolor="#CCCCCC"><span class="Estilo30">&nbsp;<B>Clave de Producto</B>&nbsp;</span></TD>
	<TD align="center" bgcolor="#CCCCCC"><span class="Estilo30">&nbsp;<B>Descripcion</B>&nbsp;</span></TD>
	<TD align="center" bgcolor="#CCCCCC"><span class="Estilo30">&nbsp;<B>Importe</B>&nbsp;</span></TD>
	<TD align="center" bgcolor="#CCCCCC"><span class="Estilo30">&nbsp;<B>Fecha</B>&nbsp;</span></TD>
      </TR>

<?php

	while($row = mysql_fetch_array($result))
	{ 
   $norecibo = $row[norecibo];
      $clave = $row[clave];
   $descripcion = $row[descripcion];
   $preciop = $row[preciop];
    $unidad = $row[unidad];
   $fecha = $row[fecha];

//if ($claves==$clave and $claves!=0)
		//{
		printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>",$norecibo,$clave,$descripcion,$preciop,$fecha);
	//	}

	}
	echo ("LA CANTIDAD DE ".$descripcion." QUE SE VENDIO EN ESTA FECHA ES:");
  echo $total;		
   mysql_free_result($result);
   mysql_close($link);  

?> 
</table>
</center>
