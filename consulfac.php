<?php
session_start();
   include("conexion.php");
   $link=Conectarse();
   $result0=mysql_query("SELECT * FROM ingresos where norecibo=$norecibo", $link);
 ?>

 <?php
   while($row = mysql_fetch_array($result0)){
   $rfc = $row[rfc];
   $nombrecl = $row[nombre];
   $direccion = $row[direccion];
   $ccliente = $row[ccliente];
   $fecha = $row[fecha];
   $descuento = $row[descuento];
   $iva = $row[iva];
   $fpago = $row[fpago];
   $tpago = $row[tpago];
   $entrega = $row[entrega];
   }
 ?>
<html>
<head>
<script type="text/javascript">
function Operaciones(){
var subtotal=parseFloat(document.getElementById('subtotal').value);
var descuento=parseFloat(document.getElementById('descuento').value);
var res =(subtotal * descuento)/100;
document.getElementById('total').value = subtotal-res;
var res2 =((subtotal-res)*16)/100;
document.getElementById('iva').value = res2;
document.getElementById('subtotal').value=subtotal;
} 
</script>
   <title>Facturas y Notas</title>
   <style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
#Layer1 {	position:absolute;
	width:120px;
	height:145px;
	z-index:7;
	left: 14px;
	top: 80px;
	visibility: hidden;
}
#Layer2 {	position:absolute;
	left:1px;
	top:2px;
	width:120px;
	height:35px;
	z-index:12;
	background-color: #999999;
}
#Layer3 {	position:absolute;
	left:1px;
	top:37px;
	width:120px;
	height:35px;
	z-index:11;
	background-color: #999999;
}
#Layer4 {	position:absolute;
	left:5px;
	top:0px;
	width:120px;
	height:35px;
	z-index:9;
	background-color: #999999;
}
#Layer5 {	position:absolute;
	left:4px;
	top:-3px;
	width:120px;
	height:35px;
	z-index:6;
	background-color: #999999;
}
.Estilo6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #999999;
}
.Estilo7 {font-size: 14px}
.Estilo9 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
#Layer6 {
	position:absolute;
	left:595px;
	top:37px;
	width:136px;
	height:26px;
	z-index:1;
}
#Layer7 {
	position:absolute;
	left:839px;
	top:38px;
	width:127px;
	height:23px;
	z-index:2;
}
#Layer8 {
	position:absolute;
	left:522px;
	top:128px;
	width:394px;
	height:144px;
	z-index:3;
}
#Layer9 {
	position:absolute;
	left:32px;
	top:493px;
	width:58px;
	height:22px;
	z-index:4;
}
#Layer10 {
	position:absolute;
	left:88px;
	top:494px;
	width:403px;
	height:21px;
	z-index:5;
}
#Layer11 {
	position:absolute;
	left:508px;
	top:495px;
	width:103px;
	height:26px;
	z-index:6;
}
#Layer12 {
	position:absolute;
	left:619px;
	top:495px;
	width:104px;
	height:25px;
	z-index:7;
}
#Layer13 {
	position:absolute;
	left:729px;
	top:494px;
	width:102px;
	height:25px;
	z-index:8;
}
#Layer14 {
	position:absolute;
	left:826px;
	top:442px;
	width:112px;
	height:632px;
	z-index:9;
}
#Layer15 {
	position:absolute;
	left:862px;
	top:84px;
	width:78px;
	height:24px;
	z-index:9;
}
#Layer16 {
	position:absolute;
	left:839px;
	top:494px;
	width:118px;
	height:26px;
	z-index:10;
}
#Layer17 {
	position:absolute;
	left:38px;
	top:493px;
	width:923px;
	height:28px;
	z-index:11;
}
#Layer18 {
	position:absolute;
	left:968px;
	top:493px;
	width:71px;
	height:29px;
	z-index:12;
}
#Layer19 {
	position:absolute;
	left:836px;
	top:1405px;
	width:171px;
	height:12px;
	z-index:12;
}
#Layer20 {
	position:absolute;
	left:841px;
	top:1357px;
	width:163px;
	height:4px;
	z-index:13;
}
#Layer21 {
	position:absolute;
	left:840px;
	top:1380px;
	width:130px;
	height:23px;
	z-index:14;
}
#Layer22 {
	position:absolute;
	left:836px;
	top:1390px;
	width:84px;
	height:22px;
	z-index:15;
}
#Layer23 {
	position:absolute;
	left:836px;
	top:1329px;
	width:159px;
	height:22px;
	z-index:16;
}
#Layer24 {
	position:absolute;
	left:96px;
	top:1392px;
	width:66px;
	height:10px;
	z-index:17;
}
#Layer25 {
	position:absolute;
	left:291px;
	top:1392px;
	width:74px;
	height:22px;
	z-index:18;
}
#Layer26 {
	position:absolute;
	left:483px;
	top:1392px;
	width:82px;
	height:21px;
	z-index:19;
}
#Layer27 {
	position:absolute;
	left:824px;
	top:29px;
	width:139px;
	height:23px;
	z-index:20;
}
#Layer28 {
	position:absolute;
	left:519px;
	top:116px;
	width:135px;
	height:8px;
	z-index:20;
}
#Layer29 {
	position:absolute;
	left:587px;
	top:29px;
	width:131px;
	height:22px;
	z-index:21;
}
#Layer30 {
	position:absolute;
	left:850px;
	top:1360px;
	width:159px;
	height:22px;
	z-index:16;

}
#Layer33 {
	position:absolute;
	left:150px;
	top:1340px;
	width:124px;
	height:22px;
	z-index:18;
}
-->
   </style>
</head>
<body >
<div id="Layer5"><img src="images/FACTURA.png" width="997" height="1487"></div>
<div id="Layer22">$
    <input type="text" name="iva" id="iva" size="5" maxlength="20" onclick="Operaciones();" ></div>
<?php $total0 = 0;
$res = mysql_query("SELECT sum(importe)as total_prices FROM ingresos WHERE norecibo='".$norecibo."'"); 
if ($res && mysql_num_rows($res) > 0) {
  $query_data=mysql_fetch_array($res);
  $total0= (float)$query_data["total_prices"];
  } //;
 ?>
<?php $total1 = 0;
$res = mysql_query("SELECT sum(preciop * cantidad)as total_prices FROM ingresos WHERE norecibo='".$norecibo."'");
if ($res && mysql_num_rows($res) > 0) {
  $query_data=mysql_fetch_array($res);
  $total1= (float)$query_data["total_prices"];
  } //;
 ?>
<div id="Layer19">
  <p>
    $
    <INPUT TYPE="text" NAME="total" id="total" SIZE="14" MAXLENGTH="100" value="<?= $total0 ?>"></p>
</div>
<div id="Layer33">
<table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
      <?php
      include('cantidadletra.php');
      ?>
    <td class="Estilo12"><?echo num2letras ($total1); ?></td>
  </tr>
</table>
</div>
<div id="Layer23">
$
<INPUT TYPE="text" NAME="subtotal" id="subtotal" SIZE="14" MAXLENGTH="100" value="<?= $total1 ?>"></div>
<div id="Layer30">
<INPUT TYPE="text" NAME="descuento" id="descuento" SIZE="3" MAXLENGTH="100" value="<?= $descuento ?>">%</div>
<div id="Layer24">
<INPUT TYPE="text" NAME="fpago" id="fpago" SIZE="16" MAXLENGTH="100" value="<?= $fpago ?>"></div>
<div id="Layer25">
<INPUT TYPE="text" NAME="tpago" id="tpago" SIZE="16" MAXLENGTH="100" value="<?= $tpago ?>"></div>
<div id="Layer26">
<INPUT TYPE="text" NAME="entrga" id="entrega" SIZE="16" MAXLENGTH="100" value="<?= $entrega ?>"></div>
<div id="Layer27">
  <INPUT TYPE="text" NAME="norecibo" SIZE="12" MAXLENGTH="12">
</div>
<div id="Layer15">
  <input type="float" name="ccliente" size="10" maxlength="20" value="<?= $ccliente ?>">
</div>
<div id="Layer28">
  <p>
    <INPUT TYPE="text" NAME="rfc" SIZE="25" MAXLENGTH="25" value="<?= $rfc ?>">
  </p>
  <p>
    <input type="text" name="nombre" size="60" maxlength="100" value="<?= $nombrecl ?>">
  </p>
  <p>
    <INPUT TYPE="text" NAME="direccion" SIZE="60" MAXLENGTH="100" value="<?= $direccion ?>">
  </p>
  <p>&nbsp;</p>
</div>
<div id="Layer17">
<?
   $result2=mysql_query("SELECT * FROM ingresos where norecibo=$norecibo", $link);
?>
  <table width="922" height="25" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="63"></td>
      <td width="416"></td>
      <td width="111"></td>
      <td width="111"></td>
      <td width="114"></td>
      <td width="107"></td>
    </tr>
	<?php          
while($row = mysql_fetch_array($result2))
{
	printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s</td><td>&nbsp;%s</td><td>&nbsp;%s</td></tr>", $row["clave"], $row["descripcion"], $row["unidad"], $row["cantidad"], $row["preciop"], $row["preciop"]* $row["cantidad"]);
}

   mysql_free_result($result2);
   mysql_close($link);  
?> 
  </table>
  
</div>
<div id="Layer29">
<?
$fecha = date("Y-m-d");
?>
<input type="date" name="fecha" size="15" maxlength="15" value="<?= $fecha; ?>"></div>
</body>
</html> 