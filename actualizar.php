<link rel="stylesheet" href="css/estilo.css"/>
<script type="text/javascript">
function Operaciones(){
// Obtengo el valor de subtotal...
var precio = document.getElementById('precio').value;
var ivap = document.getElementById('ivap').value;
var ivac = document.getElementById('ivac').value;
var incrementop = document.getElementById('incrementop').value;
//var cant = document.getElemetById('cant').value;
// Ya que lo tengo le saco el 16%
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

//var ex=(parseFloat(ex)+parseFloat(cant));
//document.getElementById('ex').value = ex;
} 
function incremento(){
var cant = document.getElementById('cant').value;
var exi = document.getElementById('exi').value;

var exis=(parseFloat(cant)+parseFloat(exi));
document.getElementById('existencia').value = exis;
}
</script>
<FORM ACTION="actualizarpro.php">
<table>
<?php
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM productos WHERE clave='".$clave."'", $link);

   while($row = mysql_fetch_array($result)){
   $clave = $row[clave];
   $descripcion = $row[descripcion];
   $unidad = $row[unidad];
   $precio = $row[precio];
   $preciop=$row[preciop];
   $existencia=$row[existencia];
   $nombrep=$row[nombrep];
   $fechareg=$row[fechareg];
   }
 ?>
  <TR>
     <TD><b>Clave del Producto:</b></TD>
       <TD><? echo $clave ?><INPUT TYPE="text" NAME="clave" SIZE="40" MAXLENGTH="40" value="<?= $clave?>" style="visibility:hidden"></TD>
</TR>
 <TR>
     <TD><b>Descripci&oacute;n:</b></TD>
       <TD><INPUT TYPE="text" NAME="descripcion" SIZE="100" MAXLENGTH="100" value="<?= $descripcion?>"></TD>
</TR>
<TR>
     <TD><b>Unidad:</b></TD>
       <TD><INPUT TYPE="text" NAME="unidad" SIZE="40" MAXLENGTH="60" value="<?= $unidad?>"></TD>
</TR>
<TR>
     <TD><b>Precio:</b></TD>
       <TD><input type="text" name="precio" id="precio" onKeyUp="Operaciones();" size="10" maxlength="10" value="<?= $precio ?>">
IVA
  <input name="ivap" type="text" id="ivap" onKeyUp="Operaciones();" size="4" maxlength="4">
%
Porcentaje
<input name="incrementop" type="text" id="incrementop" onKeyUp="Operaciones();" size="4" maxlength="4">
%
<input name="incrementoc" type="text" id="incrementoc" onKeyUp="Operaciones();" size="10" style="visibility:hidden" ><input name="ivac" type="text" id="ivac" onKeyUp="Operaciones();" size="10" style="visibility:hidden" ></TD>
</TR>
 <TR>
     <TD><b>Precio al Publico:</b></TD>
       <TD><input type="text" name="preciop" id="pp" size="10" maxlength="10" value="<?= $preciop ?>"> </TD>
</TR>
 <TR>
   <TD><b>Ingresa a Inventario:</b></TD>
   <TD><input name="cant" type="text" id="cant" onKeyUp="incremento();" size="4" maxlength="4"></TD>
 </TR>
 <TR>
   <TD><b>Existencia Anterior:</b></TD>
   <TD><? echo $existencia ?><input type="text" name="exi" id="exi" size="20" maxlength="20" value="<?= $existencia?>" style="visibility:hidden"></TD>
 </TR>
 <TR>
   <TD height="25"><b>Existencia Actual:</b></TD>
   <TD><input type="text" name="existencia" id="existencia" size="20" maxlength="20" value="<?= $existencia?>" readonly="readonly"></TD>
 </TR>
<TR>
  <TD class="Estilo3"><b>Proveedor</b></TD>
  <TD>
        <select NAME="nombrep">
            <option value="<?=$nombrep ?>"><?=$nombrep?></option>
			<?php
             //include("conexion.php");
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
  <TD>
      <input type="date" name="fechareg" id="fechareg" size="10" value="<?= $fechareg?>">
  </TD>
</TR>
</table>
<INPUT TYPE="submit" NAME="accion" VALUE="Actualizar">
</FORM>
