<link rel="stylesheet" href="css/estilo.css"/>
<script language="javascript" type="text/javascript" src="datetimepicker.js">
</script> 
	<form action="productorep.php" target="_blank">
  <p align="center" class="Estilo2">&nbsp;</p>
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><span class="Estilo1">Desde:</span></td>
      <td><input type="date" name="fechaini" id="fechaini" size="10"></td>
    </tr>
    <tr>
      <td><span class="Estilo1">Hasta:</span></td>
      <td><input type="date" name="fechafin" id="fechafin" size="10"></td>
    </tr>
    <tr>
      <td class="Estilo1">Clave del Producto:</td>
      <td><label>
        <input type="text" name="claves" size="20">
      </label></td>
    </tr>
  </table>
  <p align="center">
    <input type="submit" value="Buscar" name="accion"> 
  </p>
  </form>