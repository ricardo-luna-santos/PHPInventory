<!doctype html>
<html lang="es">
<html>
<head>
<meta charset="utf-8">
<title>Acceso</title>
<link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
      <header><img src="imagenes/logo.png" width="483" height="160" alt="Inventory"></header>
<nav>
<ul class="menu">
    <li><a href="restore.php" target="contenido"><img src="imagenes/respaldo.png" width="50" height="50" alt="REPORTES">SUBIR RESPALDO</a>
</li>
</ul>
</nav>
<section>
         <center>
	<link rel="stylesheet" type="text/css" href="css/estilos_1.css">
    <script language="javascript" type="text/javascript">
      function botonCancelar (){
        location.href="index.html";
      }
    </script>
<p>
	<?php
    if (!isset ($_FILES["ficheroDeCopia"])){ // Se comprueba si ya existe un fichero enviado o aun no.
/* Si aun no existe un fichero enviado, se define un formulario para que el usuario
pueda enviarlo. Este debe ser el fichero de copia de seguridad con la consulta SQL para
recrear la base de datos perdida o estropeada.
En el formulario se deben incluir las clases que definen el aspecto de los distintos elementos,
a partir del fichero de estilos CSS.*/
	  $contenidoDeFormulario="  <form action='restore.php' method='post' enctype='multipart/form-data' name='formularioDeRestauracion'";
	  $contenidoDeFormulario.="id='formularioDeRestauracion'>\n";
      $contenidoDeFormulario.="    <table width='600' border='0' class=''>\n";
      $contenidoDeFormulario.="      <tbody class=''>\n";
      $contenidoDeFormulario.="        <tr>\n";
      $contenidoDeFormulario.="          <td height='40' colspan='4' class=''>RESTAURACI&Oacute;N DE COPIA DE SEGURIDAD DE MySQL </td>\n";
      $contenidoDeFormulario.="        </tr>\n";
      $contenidoDeFormulario.="        <tr>\n";
      $contenidoDeFormulario.="          <td width='82' class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="          <td colspan='2' class=''>Indique el origen del archivo de copia: </td>\n";
      $contenidoDeFormulario.="          <td width='60' class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="        </tr>\n";
      $contenidoDeFormulario.="        <tr>\n";
      $contenidoDeFormulario.="          <td class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="          <td colspan='2' class=''><input type='file' name='ficheroDeCopia' id='ficheroDeCopia'";
      $contenidoDeFormulario.="size='50'></td>\n";
      $contenidoDeFormulario.="          <td class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="        </tr>\n";
      $contenidoDeFormulario.="        <tr>\n";
      $contenidoDeFormulario.="          <td class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="          <td colspan='2' class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="          <td class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="        </tr>\n";
      $contenidoDeFormulario.="        <tr>\n";
      $contenidoDeFormulario.="          <td class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="          <td width='204' align='center' class=''><input name='envio' type='submit' ";
      $contenidoDeFormulario.="id='envio' value='Aceptar'></td>\n";
      $contenidoDeFormulario.="          <td width='226' align='center' class=''><input name='regreso' type='button' ";
	  $contenidoDeFormulario.="onClick='javascript:botonCancelar();'";
      $contenidoDeFormulario.="id='regreso' value='Cancelar'></td>\n";
      $contenidoDeFormulario.="          <td class=''>&nbsp;</td>\n";
      $contenidoDeFormulario.="        </tr>\n";
      $contenidoDeFormulario.="      </tbody>\n";
      $contenidoDeFormulario.="    </table>\n";
      $contenidoDeFormulario.="  </form>\n";
/* Se muestra el formulario. */
      echo ($contenidoDeFormulario);
    } else {
/* Si el fichero ya existe, se efect�a la carga del mismo y se inicia su procesado. */
/* Empezamos grabando el archivo de copia en el servidor. */
      $archivoRecibido=$_FILES["ficheroDeCopia"][tmp_name];
      $destino="./ficheroParaRestaurar.sql";
	  if (!@move_uploaded_file ($archivoRecibido, $destino)){
        die ("EL PROCESO HA FALLADO. INT�NTELO DE NUEVO.");
      }

/* DATOS QUE CAMBIAN EN CADA INSTALACI�N DE LA APLICACI�N. */
      $usuario = "root";
      $clave = "1234";
      $servidor = "localhost";
      $baseDeDatos = "inventory";
/* AQU� TERMINAN LOS DATOS QUE CAMBIAN EN CADA INSTALACI�N DE LA APLICACI�N. */
/* Se conecta con la base de datos elegida. */
      $conexion = mysql_connect($servidor,$usuario,$clave) or die(mysql_error());
      @mysql_select_db($baseDeDatos,$conexion);

/* Una vez subido el fichero al servidor, se abre para su lectura, l�nea a linea. */
      $manejadorDeFichero=fopen ("ficheroParaRestaurar.sql", "r");
/* Se inicializa una variable que se usar� para almacenar las consultas antes de
ejecutarlas sobre la base de datos. */
      $consultaSQL="";
/* Mediante un bucle se va a leer el fichero hasta encontrar el final del mismo. */ 
      while (!feof($manejadorDeFichero)){
/* Se almacena el contenido, l�nea a l�nea. */
        $lectura=fgets($manejadorDeFichero);
/* A continuaci�n se comprueba si la l�nea empieza por "# ". Esto indica que se trata de
un comentario. En ese caso se pasa a la siguiente iteraci�n, ignorando toda esa l�nea
reci�n leida. Tambi�n se pasa a la siguiente l�nea si la que estamos leyendo no tiene m�s
contenido que el salto de l�nea.*/
        if (substr ($lectura,0,2)=="# " || $lectura=="\n") continue;
/* Se determina la longitud de la l�nea restando el car�cter de salto. */
		$longitudLeida=strlen ($lectura)-1;
/* Se elimina el car�cter de salto de l�nea */
        $lectura=chop($lectura);
/* Llegados a este punto, la l�nea leida es parte de una consuilta SQL,
por lo que se incorpora a la variable que contendr� la misma para su
posterior ejecuci�n. */
        $consultaSQL.=$lectura;
/* A continuaci�n se comprueba si el �ltimo car�cter de la �nea es un punto y coma,
lo que determina el final de una consulta SQL. Dado el formato que ha recibido el fichero,
el �ltimo car�cter puede no ser un caracter v�lido, por lo que se comprueba si el punto y coma
el �ltimo o el pen�ltimo. */
        if (substr($lectura, $longitudLeida-2, 1)==";" || substr($lectura, $longitudLeida-1, 1)==";"){
/* Llegados aqui, ya tenemos la consulta SQL lista para su ejecuci�n. */
          mysql_query($consultaSQL,$conexion);
          if (mysql_errno()!=0){ // Si se produce alg�n error, a pesar de todo.
            $mensajeDeError="SE HA PRODUCIDO EL ERROR SIGUIENTE<br>";
            $mensajeDeError.=mysql_errno()."***".mysql_error()."<br>";
            $mensajeDeError.="NO SE HA PODIDO COMPLETAR LA OPERACI�N.";
            die ($mensajeDeError);
          }
/* Ahora e limpia la variable donde se almacena la consulta SQL, para empezar con la siguiente. */
          $consultaSQL="";
        }
      }
      fclose ($manejadorDeFichero); // Se cierra el fichero.
/* Se elimina el fichero del servidor. */
	  unlink ("ficheroParaRestaurar.sql");
    }
  ?>

</center>

      </section>
<footer>
      Sistema de Control de Inventario Realizado por Ricardo Luna Santos © 2013
</footer>
   
</body>
</html>
