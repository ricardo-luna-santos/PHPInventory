<body onload="javascript:document.verificador.clave.focus ();">
<link rel="stylesheet" href="css/estilo.css"/>
	<form name="verificador" id="verificador" action="vprecio.php">
	<label>
        <div align="center">
          <input type="text" name="clave">
        </div>
      </label>
	    <div align="center">
	      
	      <input name="Aceptar"  type="submit" value="Enviar">
        </div>
	</form>
	<div align="center">
	  <?
   include("conexion.php");
   $link=Conectarse();
   $result=mysql_query("SELECT * FROM productos WHERE clave='".$clave."'", $link);

   while($row = mysql_fetch_array($result)){
   $clave = $row[clave];
   $descripcion = $row[descripcion];
   $unidad = $row[unidad];
   $preciop=$row[preciop];
   $existencia=$row[existencia];
   }
 ?>
 <h1>
	  <span>El PRODUCTO:</div>
	<label> 
	<div align="center">
 
		<? echo "<h2>".$descripcion."<h2>";?>
	    </div>
	<div align="center">
	            
	           <? echo "<h2>$".$preciop."<h2>";?>
            <? echo "<h2>".$unidad."<h2>";?>
      </div>
	</label>
   
	<label><h2>
	<div align="left">SOLO QUEDAN:</h2>
	  <? echo "<h2>".$existencia."<h2>";?>
	</div>
	</label>
</h1>
</body>