<link rel="stylesheet" href="css/estilo.css"/>
    <script>
    function confirmar(ccliente) {
if (!confirm ("Deseas continuar?")) {
//window.location = "";
}
else {
window.location = "borrarclien.php?ccliente="+ccliente;
}
}
</script>
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
</script>
<?php
                if ($fecha==NULL)
                {
                $fecha = date("Y-m-d");
}
?>
<FORM ACTION="insertclien.php">
  <TABLE width="586">
<TR>
   <TD class="Estilo3"><b>Clave del Cliente:</b></TD>
   <TD><INPUT TYPE="text" NAME="ccliente" SIZE="10" MAXLENGTH="10"></TD>
</TR>
<TR>
   <TD class="Estilo3"><b>RFC:</b></TD>
   <TD><INPUT TYPE="text" NAME="rfc" SIZE="25" MAXLENGTH="25"></TD>
</TR>
<TR>
     <TD class="Estilo3"><b>Nombre/Raz&oacute;n Social:</b></TD>
       <TD><INPUT TYPE="text" NAME="nombre" SIZE="50" MAXLENGTH="100"></TD>
</TR>
<TR>
         <TD class="Estilo3"><b>Direcci&oacute;n:</b></TD>
           <TD><INPUT TYPE="text" NAME="direccion" SIZE="50" MAXLENGTH="100"></TD>
    </TR>
<TR>
   <TD class="Estilo3"><b>Telefono:</b></TD>
   <TD><INPUT TYPE="text" NAME="telefono" SIZE="15" MAXLENGTH="15"></TD>
</TR>
<TR>
     <TD class="Estilo3"><b>Correo:</b></TD>
       <TD><INPUT TYPE="text" NAME="correo" SIZE="40" MAXLENGTH="40"></TD>
</TR>
<TR>
     <TD class="Estilo3"><b>Contacto:</b></TD>
       <TD><INPUT TYPE="text" NAME="contacto" SIZE="40" MAXLENGTH="40"></TD>
</TR>
<TR>
         <TD class="Estilo3"><b>Telefono Fijo:</b></TD>
           <TD><INPUT TYPE="text" NAME="telefonof" SIZE="15" MAXLENGTH="15"></TD>
    </TR>
	   <TR>
   <TD class="Estilo3"><b>Celular:</b></TD>
   <TD><INPUT TYPE="text" NAME="celular" SIZE="15" MAXLENGTH="15"></TD>
</TR>
<TR>
     <TD class="Estilo3"><b>Fax:</b></TD>
       <TD><INPUT TYPE="text" NAME="fax" SIZE="15" MAXLENGTH="15"></TD>
</TR>
<TR>
         <TD class="Estilo3"><b>Fecha de Registro:</b></TD>
           <TD><input type="date" name="fechareg" id="fechareg" size="10" value="<?= $fecha; ?>"></TD>
    </TR>
</TABLE>
<INPUT TYPE="submit" NAME="accion" VALUE="Insertar">
</FORM>
<?
include('listarclientes.php');
?>
		  


