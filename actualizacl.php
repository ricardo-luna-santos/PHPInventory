<link rel="stylesheet" href="css/estilo.css"/>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>

<FORM ACTION="actualizarcl.php">
<?
   include ("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM clientes WHERE ccliente='".$ccliente."'", $link);

   while($row = mysql_fetch_array($result)){
   $ccliente = $row[ccliente];
   $rfc = $row[rfc];
   $nombre = $row[nombre];
   $direccion = $row[direccion];
   $telefono = $row[telefono];
   $correo = $row[correo];
   $contacto = $row[contacto];
   $telefonof = $row[telefonof];
   $celular = $row[celular];
   $fax = $row[fax];
   $fechareg = $row[fechareg];
   }
 ?>
<TABLE width="814" align="center">
<TR>
   <TD><b>Clave del Cliente:</b></TD>
   <TD><INPUT TYPE="text" NAME="ccliente" SIZE="10" MAXLENGTH="10" value="<?= $ccliente?>" readonly="readonly"></TD>
</TR>
<TR>
   <TD><b>RFC:</b></TD>
   <TD><INPUT TYPE="text" NAME="rfc" SIZE="25" MAXLENGTH="25"value="<?= $rfc?>"></TD>
</TR>
<TR>
     <TD><b>Nombre/Raz&oacute;n Social:</b></TD>
       <TD><INPUT TYPE="text" NAME="nombre" SIZE="100" MAXLENGTH="100"value="<?= $nombre?>"></TD>
</TR>
<TR>
         <TD><b>Direcci&oacute;n:</b></TD>
           <TD><INPUT TYPE="text" NAME="direccion" SIZE="100" MAXLENGTH="100" value="<?= $direccion?>"></TD>
	   </TR>
<TR>
   <TD><b>Telefono:</b></TD>
   <TD><INPUT TYPE="text" NAME="telefono" SIZE="15" MAXLENGTH="15"value="<?= $telefono?>"></TD>
</TR>
<TR>
     <TD><b>Correo:</b></TD>
       <TD><INPUT TYPE="text" NAME="correo" SIZE="40" MAXLENGTH="40" value="<?= $correo?>"></TD>
</TR>
<TR>
     <TD><b>Contacto:</b></TD>
       <TD><INPUT TYPE="text" NAME="contacto" SIZE="40" MAXLENGTH="40"value="<?= $contacto?>"></TD>
</TR>
<TR>
  <TD><b>Telefono Fijo:</b></TD>
           <TD><INPUT TYPE="text" NAME="telefonof" SIZE="15" MAXLENGTH="15"value="<?= $telefonof?>"></TD>
	   </TR>
 <TR>
   <TD><b>Celular:</b></TD>
   <TD><INPUT TYPE="text" NAME="celular" SIZE="15" MAXLENGTH="15" value="<?= $celular?>"></TD>
</TR>
<TR>
     <TD><b>Fax:</b></TD>
       <TD><INPUT TYPE="text" NAME="fax" SIZE="15" MAXLENGTH="15" value="<?= $fax?>"></TD>
</TR>
<TR>
         <TD><b>Fecha de Registro:</b></TD>
           <TD><INPUT TYPE="date" NAME="fechareg" SIZE="12" MAXLENGTH="12" value="<?= $fechareg?>"></TD>
	   </TR>

</TABLE>
<div align="center">
  <INPUT TYPE="submit" NAME="accion" VALUE="Actualizar">
</div>
</FORM>
