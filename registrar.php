<?php
// Configura los datos de tu cuenta
// Conexión a la base de datos
mysql_connect ("localhost", "root", "1234");
mysql_select_db("inventory") or die("Cannot select database");
// Preguntaremos si se han enviado ya las variables necesarias
if (isset($_POST["nick"])) {
$nick = $_POST["nick"];
$password = $_POST["password"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$tipo = $_POST["tipo"];

// Hay campos en blanco
if($nick==NULL|$email==NULL|$password==NULL|$nombre==NULL) {
echo "un campo está vacio.";
}else{
// ¿Coinciden las contraseñas?
if($password!=$password) {
echo "Las contraseñas no coinciden";
}else{
// Comprobamos si el nombre de usuario o la cuenta de correo ya existían
$checkuser = mysql_query("SELECT nick FROM usuarios WHERE nick='$nick'");
$username_exist = mysql_num_rows($checkuser);
$checkemail = mysql_query("SELECT email FROM usuarios WHERE email='$email'");
$email_exist = mysql_num_rows($checkemail);
if ($email_exist>0|$username_exist>0) {
echo "EL nombre de usuario o la cuenta de correo estan ya en uso";
}else{
//Todo parece correcto procedemos con la inserccion
$query = "INSERT INTO usuarios (nick,password, nombre, email,telefono,direccion,tipo) VALUES('$nick','$password', '$nombre', '$email','$telefono','$direccion','$tipo')";
mysql_query($query) or die(mysql_error());
}
}
}
}
?>
<SCRIPT LANGUAGE="javascript">
location.href = "usuarios.php";
</SCRIPT>