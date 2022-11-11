<link rel="stylesheet" href="css/estilo.css"/>
<script language="JavaScript" type="text/javascript" src="funsiones.js"></script>

	  <FORM ACTION="actualizarpv.php">

 <?
   include ("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM proveedores WHERE id='".$id."'", $link);
   while($row = mysql_fetch_array($result)){
   $nombre = $row[nombre];
   $direccion = $row[direccion];
   $telefono = $row[telefono];   
   $correo = $row[correo];
   $rfc = $row[rfc];
   $bancos = $row[bancos];
   $ncuenta = $row[ncuenta];  
   $cinterbancaria = $row[cinterbancaria];
   $bancos2 = $row[bancos2];
   $ncuenta2 = $row[ncuenta2];  
   $cinterbancaria2 = $row[cinterbancaria2];
   }
 ?>
 <TABLE align="center">
<tr>
   <TD><b>Nombre:</b></TD>
     <TD><INPUT TYPE="text" NAME="nombre" SIZE="70" MAXLENGTH="70" value="<?= $nombre?>"></TD>
     <TD><INPUT TYPE="text" NAME="id" SIZE="5" MAXLENGTH="5" value="<?= $id?>" readonly="readonly"></TD>
</TR>
<TR>
     <TD><b>Direcci&oacute;n:</b></TD>
      <TD><INPUT TYPE="text" NAME="direccion" SIZE="100" MAXLENGTH="100" value="<?= $direccion?>"></TD>
      <TD>&nbsp;</TD>
</TR>
<TR>
<TD><b>Telefono:</b></TD>
<TD><INPUT TYPE="text" NAME="telefono" SIZE="15" MAXLENGTH="15" value="<?= $telefono?>"></TD>
<TD>&nbsp;</TD>
</TR>
<TR>
<TD><b>Correo Electronico:</b></TD>
<TD><INPUT TYPE="text" NAME="correo" SIZE="50" MAXLENGTH="50" value="<?= $correo?>"></TD>
<TD>&nbsp;</TD>
</TR>
<TR>
<TD><b>RFC:</b></TD>
<TD><INPUT TYPE="text" NAME="rfc" SIZE="20" MAXLENGTH="20" value="<?= $rfc?>"></TD>
<TD>&nbsp;</TD>
</TR>
<TR>
<TD><b>Bancos:</b></TD>
<TD><INPUT TYPE="text" NAME="bancos" SIZE="20" MAXLENGTH="20" value="<?= $bancos?>"></TD>
<TD>&nbsp;</TD>
</TR>
<TR>
<TD><b>Numeros de Cuenta:</b></TD>
<TD><INPUT TYPE="text" NAME="ncuenta" SIZE="20" MAXLENGTH="20" value="<?= $ncuenta?>"></TD>
<TD>&nbsp;</TD>
</TR>
<TR>
<TD><b>Claves Interbancarias:</b></TD>
<TD><INPUT TYPE="text" NAME="cinterbancaria" SIZE="50" MAXLENGTH="50" value="<?= $cinterbancaria?>"></TD>
<TD>&nbsp;</TD>
</TR>
<TR>
  <TD><b>Bancos:</b></TD>
  <TD><INPUT TYPE="text" NAME="bancos2" SIZE="20" MAXLENGTH="20" value="<?= $bancos2?>"></TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TD><b>Numeros de Cuenta:</b></TD>
  <TD><INPUT TYPE="text" NAME="ncuenta2" SIZE="20" MAXLENGTH="20" value="<?= $ncuenta2?>"></TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TD><b>Claves Interbancarias:</b></TD>
  <TD><INPUT TYPE="text" NAME="cinterbancaria2" SIZE="50" MAXLENGTH="50" value="<?= $cinterbancaria2?>"></TD>
  <TD>&nbsp;</TD>
</TR>
</TABLE>
<div align="center">
  <INPUT TYPE="submit" NAME="accion" VALUE="Actualizar">
</div>
</FORM>
<p>
