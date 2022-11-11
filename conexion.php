<?php
function Conectarse()
{
   if (!($link=mysql_connect("localhost","root","unitec2020")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("inventory",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
$link=Conectarse();
//mysql_close($link);
?>