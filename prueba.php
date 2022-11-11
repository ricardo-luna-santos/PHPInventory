<script language="JavaScript" type="text/javascript" src="funsiones.js"></script>
<body onload="javascript:document.ventas.clave.focus ();">
<?php
   include "conexion2.php";
   $link=Conectarse2();
   $result=mysql_query("SELECT * FROM ingresos WHERE norecibo='".$norecibo."'", $link);

   while($row = mysql_fetch_array($result)){
   $norecibo = $row[norecibo];
  // $fecha = $row[fecha];
  if ($row[fecha]==NULL)
    {
       $fecha = date("Y-m-d");  
     }
  else
    {     
        $fecha = $row[fecha];
    }
   $tpago = $row[tpago];
   $fpago = $row[fpago];
   $descuento=$row[descuento];
   $ccliente=$row[ccliente];
   $rfc=$row[rfc];
   $nombre=$row[nombre];
   $direccion=$row[direccion];
   $entrega=$row[entrega];
   }
   //mysql_free_result($result);
 ?>
<?php
  //include("conexion.php");
   //$link=Conectarse();
$total0 = 0;
$res = mysql_query("SELECT sum(preciop)as total_prices FROM ingresos WHERE norecibo='".$norecibo."'"); 
if ($res && mysql_num_rows($res) > 0) {
  $query_data=mysql_fetch_array($res);
  $total0= (float)$query_data["total_prices"];
  } //;
 ?>
<div id="ventass">
<center>
    <form name="ventas" id="ventas" action="guardarventa.php">
                    <p><br />                    
              FECHA:
              <?php
                if ($fecha==NULL)
                {
                $fecha = date("Y-m-d");
}
?>
              <input type="date" name="fecha" size="15" maxlength="15" value="<?= $fecha; ?>" >
              NUMERO DE NOTA:
              <input type="text" name="norecibo" size="6" maxlength="6" value="<?= $norecibo?>">
            <a href="javascript:buscarventa()"><img src="images/aceptar.png" alt="Buscar" width="20" height="20" border="0"/></a>
            <a href="consulrec.php?norecibo=<?php echo $norecibo;?>" target="_blank"><img src="images/printer.png" alt="Imprimir" width="20" height="20" border="0"/></a></p>
            <p>FORMA DE PAGO:
                      <select name="fpago">
                        <option value="<?=$fpago ?>">
                        <?=$fpago ?>
                        </option>
                        <option value="CONTADO">CONTADO</option>
                        <option value="CREDITO">CREDITO</option>
                      </select>
                    TIPO DE PAGO: 
                    <select name="tpago">
                      <option value="<?=$tpago ?>">
                      <?=$tpago ?>
                      </option>
                      <option value="EFECTIVO">EFECTIVO</option>
                      <option value="TARJETA C.">TARJETA C.</option>
                      <option value="CHEQUE">CHEQUE</option>
                    </select>
ENTREGA:            
<select name="entrega">
  <option value="<?=$entrega ?>">
    <?=$entrega ?>
    </option>
  <option value="MOSTRADOR">MOSTRADOR</option>
  <option value="DOMICILIO">DOMICILIO</option>
</select>
                DESCUENTO:
                <input type="text" name="descuento" id="descuento" onKeyUp="Operaciones();"  size="6" maxlength="6" value="<?= 0+$descuento?>">
      %</p>
            <h2>TOTAL: $
  <?= $total0 ?></h2>
            </p>
                    <p>&nbsp; </p>
      <p align="center" class="Estilo25">DATOS DEL CLIENTE:
              <input type="text" name="ccliente" value="<?= $ccliente; ?>"/>
</p>
            <p align="center" class="Estilo25">DATOS DEL PRODUCTO:
  <input type="text" name="clave"/>
  <p>CANTIDAD:<input type="text" name="cantidad" value="1" /></p>
  <input type="submit" value="Comprar" name="accion">
  
  </p>
  </form>
  
  <div id="vent">
         <?php
include('datosventa.php');
?>
</div>
</div> 
</body>