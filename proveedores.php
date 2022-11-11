<script language="JavaScript" type="text/javascript" src="funsiones.js"></script>
<link rel="stylesheet" href="css/estilo.css"/>
<FORM name="proveedores" action="insertaproveedores.php" >
<TABLE>
<tr>
   <TD><b>Nombre:</b></TD>
     <TD><INPUT TYPE="text" NAME="nombre" SIZE="50" MAXLENGTH="70"></TD>
</TR>
<TR>
     <TD><b>Direcci&oacute;n:</b></TD>
      <TD><INPUT TYPE="text" NAME="direccion" SIZE="70" MAXLENGTH="100"></TD>
</TR>
<TR>
<TD><b>Telefono:</b></TD>
<TD><INPUT TYPE="text" NAME="telefono" SIZE="15" MAXLENGTH="15"></TD>
</TR>
<TR>
<TD><b>Correo Electronico:</b></TD>
<TD><INPUT TYPE="text" NAME="correo" SIZE="50" MAXLENGTH="50"></TD>
</TR>
<TR>
<TD><b>RFC:</b></TD>
<TD><INPUT TYPE="text" NAME="rfc" SIZE="20" MAXLENGTH="20"></TD>
</TR>
<TR>
<TD><b>Bancos:</b></TD>
<TD><INPUT TYPE="text" NAME="bancos" SIZE="50" MAXLENGTH="50"></TD>
</TR>
<TR>
<TD><b>Numeros de Cuenta:</b></TD>
<TD><INPUT TYPE="text" NAME="ncuenta" SIZE="50" MAXLENGTH="50"></TD>
</TR>
<TR>
<TD><b>Clave Interbancaria:</b></TD>
<TD><INPUT TYPE="text" NAME="cinterbancaria" SIZE="50" MAXLENGTH="50"></TD>
</TR>
<TR>
  <TD><b>Bancos:</b></TD>
  <TD><INPUT TYPE="text" NAME="bancos2" SIZE="50" MAXLENGTH="50"></TD>
</TR>
<TR>
  <TD><b>Numeros de Cuenta:</b></TD>
  <TD><INPUT TYPE="text" NAME="ncuenta2" SIZE="50" MAXLENGTH="50"></TD>
</TR>
<TR>
  <TD><b>Clave Interbancaria:</b></TD>
  <TD><INPUT TYPE="text" NAME="cinterbancaria2" SIZE="50" MAXLENGTH="50"></TD>
</TR>
</TABLE>
<p>
  <INPUT TYPE="submit" NAME="accion" VALUE="Insertar">
</p>
</FORM>
<p>
<?
include('listaproveedores.php');
?>
<p>