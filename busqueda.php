<?php
   //include ("conexion.php");
   //$link=Conectarse();
   $result=mysql_query("SELECT * FROM clientes WHERE ccliente='".$ccliente."'", $link);

   while($row = mysql_fetch_array($result)){
   $ccliente = $row[ccliente];
   $rfc = $row[rfc];
   $nombre = $row[nombre];
   $direccion = $row[direccion];
   }
   //mysql_free_result($result);
 ?>
     <table width="583" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="95"><span class="Estilo10">CLAVE DEL CLIENTE:</span></td>
                <td width="472"><span class="Estilo10">
                  <input type="text" name="ccliente" size="10" maxlength="20" value="<?= $ccliente ?>"></span><a href="javascript:buscarcliente()"><img src="images/aceptar.png" alt="Buscar" width="20" height="20" border="0"/></a></td>
              </tr>
              <tr>
                <td><span class="Estilo10">RFC:</span></td>
                <td><span class="Estilo10">
                  <input type="text" name="rfc" size="25" maxlength="25" value="<?= $rfc ?>">
                </span></td>
              </tr>
              <tr>
                <td><span class="Estilo10">NOMBRE: </span></td>
                <td><span class="Estilo10">
                  <input type="text" name="nombre" size="60" maxlength="100" value="<?= $nombre ?>">
                </span></td>
              </tr>
              <tr>
                <td><span class="Estilo10">DIRECCI&Oacute;N: </span></td>
                <td><span class="Estilo10">
                  <input type="text" name="direccion" size="60" maxlength="100" value="<?= $direccion ?>" >
                </span></td>
              </tr>
            </table>
