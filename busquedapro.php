<?php
   //include ("conexion.php");
   //$link=Conectarse();
   $result=mysql_query("SELECT * FROM productos WHERE clave='".$clave."'", $link);

   while($row = mysql_fetch_array($result)){
   $clave = $row[clave];
   $unidad = $row[unidad];
   $preciop = $row[preciop];
   $descripcion = $row[descripcion];
   }
   //mysql_free_result($result);
 ?>
            <table width="564" height="88" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="188"><span class="Estilo23">CLAVE DEL PRODUCTO:</span></td>
              <td width="360"><span class="Estilo10">
                <input type="text" name="clave" size="10" maxlength="100" value="<?= $clave ?>">
              </span><a href="javascript:buscarpro()"><img src="images/aceptar.png" alt="Buscar" width="20" height="20" border="0"/></a></td>
            </tr>
            <tr>
              <td><span class="Estilo23">UNIDAD:</span></td>
              <td><span class="Estilo10">
                <input type="text" name="unidad" size="13" maxlength="20" value="<?= $unidad ?>" OnFocus="this.blur()">
              </span></td>
            </tr>
            <tr>
              <td><span class="Estilo23">PRECIO UNITARIO: </span></td>
              <td><span class="Estilo10">
                <input type="float" name="preciop" id="preciop" size="13" maxlength="20" value="<?= $preciop ?>" OnFocus="this.blur()" >
              </span></td>
            </tr>
            <tr>
              <td><span class="Estilo23">DESCRIPCI&Oacute;N: </span></td>
              <td><span class="Estilo10">
                <input type="text" name="descripcion" size="60" maxlength="100" value="<?= $descripcion ?>" OnFocus="this.blur()" >
              </span></td>
            </tr>
            <tr>
              <td><span class="Estilo23">CANTIDAD:</span></td>
              <td><span class="Estilo10">
                <input type="text" name="cantidad" id="cantidad" onKeyUp="Operaciones();" size="10" maxlength="20" value="0" onkeypress="checkKey(event);">

              </span></td>
            </tr>
            <tr>
              <td><span class="Estilo23">IMPORTE: </span></td>
              <td><span class="Estilo10">
                <input id="importe" type="text" size="13" maxlength="20" >
              </span></td>
            </tr>
          </table>
