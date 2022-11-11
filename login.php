<?php
session_start();

include 'conexion.php';
$username=$_POST['nick'];
$password=$_POST['password'];

if ($password=="" or $nick=="") {
	echo "<h2 class='error'>Introduce usuario y password</h2>";
	include 'index.html';
	}else{
		$query = mysql_query("SELECT nick,password FROM usuarios WHERE nick = '$nick'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		if($data['password'] != $password) {
			echo "<h2 class='error'>Password incorrecto</h2>";
			include 'index.html';
		}else{
			$query = mysql_query("SELECT nick,password,tipo FROM usuarios WHERE nick = '$nick'") or die(mysql_error());
			$row = mysql_fetch_array($query);
			if ($row['nick']==$username and $row['tipo']=="Administrador")
			{
				$_SESSION["s_nick"] = $row['nick'];
				header("Location: menu.html");
			}else if ($row['nick']==$username and $row['tipo']=="Cajero"){
    			$_SESSION["s_nick"] = $row['nick'];
				header("Location: menu2.html");
			}else{
				echo "<h2 class='error'>Error desconocido</h2>";
				include 'index.html';
			}
		}
	}

?> 