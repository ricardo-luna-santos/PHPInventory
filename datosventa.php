  <?php
   //require("conexion.php");
   $result=mysql_query("SELECT * FROM ingresos WHERE norecibo='".$norecibo."'", $link);
   ?>
<br />
      <table width="70%" height="37" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="192" height="35" bgcolor="#CCCCCC" class="Estilo25"><div align="center" class="Estilo15"><span class="Estilo25">CLAVE</span></div></td>
          <td width="365" bgcolor="#CCCCCC" class="Estilo25"><div align="center" class="Estilo15"><span class="Estilo25">DESCRIPCI&Oacute;N</span></div></td>
          <td width="49" bgcolor="#CCCCCC" class="Estilo25"><div align="center" class="Estilo15"><span class="Estilo25">UNI</span></div></td>
          <td width="83" bgcolor="#CCCCCC" class="Estilo25"><div align="center" class="Estilo15"><span class="Estilo25">CANTIDAD</span></div></td>
          <td width="83" bgcolor="#CCCCCC" class="Estilo25"><div align="center" class="Estilo15"><span class="Estilo25">PRECIO UNITARIO</span></div></td>
          <td width="83" bgcolor="#CCCCCC" class="Estilo25"><div align="center" class="Estilo15"><span class="Estilo25">IMPORTE</span></div></td>
		   <td width="82" bgcolor="#CCCCCC" class="Estilo25"><div align="center" class="Estilo15"><span class="Estilo25">ELIMINAR</span></div></td>
        </tr>
<?php   
while($row = mysql_fetch_array($result)){
    
printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s</td><td><a style=\"text-decoration:underline;cursor:pointer;\" onclick=\"eliminarventa('".$row['id']."')\"><center><img src='images/eliminar.png' width='30' height='30'></center></a></td></tr>", $row["clave"], $row["descripcion"], $row["unidad"], $row["cantidad"], $row["preciop"],$row["cantidad"]*$row["preciop"], $row["id"]);	
    
}
   mysql_free_result($result);
?>
</table>

