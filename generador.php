<?php
$cop = $_POST['co'];
//$cop="hola";
?>
<?php
// include Barcode39 class 
include "Barcode39.php"; 

// set Barcode39 object 
$bc = new Barcode39($cop); 

// display new barcode 
$bc->draw();
?>