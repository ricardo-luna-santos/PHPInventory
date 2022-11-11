<link rel="stylesheet" href="css/estilo.css"/> 
    <form action="insertabono.php" target="_blank">
      <table width="583" border="0" align="center" cellpadding="0" cellspacing="0">
 <TR>
     <TD width="158"><b>Cliente:</b></TD>
       <TD width="425"><INPUT TYPE="text" NAME="ccliente" SIZE="15" MAXLENGTH="15" ></TD>
</TR>
  <TR>
     <TD><b>Descripci&oacute;n:</b></TD>
       <TD><input type="text" name="descripcion" size="60" maxlength="100" ></TD>
  </TR>
 <TR>
     <TD><b>Precio:</b></TD>
       <TD><input type="text" name="preciop" size="10" maxlength="10" ></TD>
</TR>
<TR>
     <TD><b>Fecha:</b></TD>
           <?php
                if ($fecha==NULL)
                {
                $fecha = date("Y-m-d");
}
?>
       <TD><input type="date" name="fecha" size="15" maxlength="15" value="<?= $fecha; ?>" ></TD>
</TR>
  </table>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">
    <input type="submit" value="Abonar" name="accion"> 
  </p>
    </form>