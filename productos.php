<link rel="stylesheet" href="css/estilo.css"/>
<script type="text/javascript">
function Operaciones(){
// Obtengo el valor de subtotal...
var precio = document.getElementById('precio').value;
var ivap = document.getElementById('ivap').value;

var incrementop = document.getElementById('incrementop').value;
// Ya que lo tengo le saco el 16%
var ivac = document.getElementById('ivac').value;
var ivac = (precio * ivap / 100);
// El resultado lo guardo en el input del iva.
document.getElementById('ivac').value = ivac;
var total=(parseFloat(precio) + parseFloat(ivac));
var incrementoc = (total * incrementop/100);
// El resultado lo guardo en el input del iva.
document.getElementById('incrementoc').value = incrementoc;
// Sumo el subtotal + iva para tener el total.
var total = (parseFloat(precio) + parseFloat(ivac)+ parseFloat(incrementoc));
// Lo muestro en el text de total.
document.getElementById('pp').value = total;
}
</script>
    <script type="text/javascript">
    function confirmar (clave) {
if (!confirm ("Deseas continuar?")) {
//window.location = "";
}
else {
window.location = "borrarpro.php?clave="+clave;
}
}
</script>
<FORM ACTION="insertarpro.php" id="form1">
<TABLE>
<TR>
   <TD class="Estilo3"><b>Clave del Producto:</b></TD>
   <TD><INPUT TYPE="text" NAME="clave" SIZE="20" MAXLENGTH="20"></TD>
</TR>
   <TD class="Estilo3"><b>Descripci&oacute;n:</b></TD>
     <TD><INPUT TYPE="text" NAME="descripcion" SIZE="70" MAXLENGTH="100"></TD>
</TR>   <tr>
     <TD class="Estilo3"><b>Unidad:</b></TD>
     <TD><select name="unidad">
       <option>MTS</option>
       <option>PZA</option>
     </select></TD>
   <TR>
<TD class="Estilo3"><b>Precio</b></TD>
<TD>
  <input type="text" id="precio" name="precio" onBlur="Operaciones();">
IVA
<input name="ivap" type="text" id="ivap" onBlur="Operaciones();" size="4" maxlength="4">
%
Porcentaje
<input name="incrementop" type="text" id="incrementop" onKeyUp="Operaciones();" size="4" maxlength="4">
%
<input name="incrementoc" type="text" id="incrementoc" onKeyUp="Operaciones();" size="10" style="visibility:hidden" >
<input name="ivac" type="text" id="ivac" onBlur="Operaciones();" size="1" style="visibility:hidden" >
</TD>
</TR>
<TR>
  <TD class="Estilo3"><b>Precio al Publico:</b></TD>
  <TD>
    <input type="text" id="pp" name="preciop"></TD>
</TR>
<TR>
  <TD class="Estilo3"><strong>Existencia</strong></TD>
  <TD><input type="text" name="existencia" size="25" maxlength="25"></TD>
</TR>
<TR>
  <TD class="Estilo3"><b>Proveedor</b></TD>
  <TD>
  <select NAME="nombrep">
			<?php
             include("conexion.php");
             $link=Conectarse();
                       $sql = mysql_query ("SELECT * FROM proveedores");
                        while ($registro = mysql_fetch_array($sql)) 
                        {
                      ?>
                      <option value="<?=$registro['nombre']?>"><?=$registro['nombre']?></option>
	                  <?php
                        }
                        mysql_close($sql);
						
                    ?>
</select>
  </TD>
</TR>
<TR>
  <TD class="Estilo3"><b>Fecha</b></TD>
                <?php
                if ($fecha==NULL)
                {
                $fecha = date("Y-m-d");
}
?>
  <TD><input type="date" name="fechareg" id="fechareg" size="10" value="<?= $fecha; ?>">
  </TD>

</TR>
<TR>
  <TD></TD>
  <TD> <INPUT TYPE="submit" NAME="accion" VALUE="Insertar"></TD>

</TR>
 
</TABLE></FORM>
<?
include('listarproductos.php');
?>