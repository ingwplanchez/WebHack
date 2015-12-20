<?php
session_start();

echo "Tu usuario es: ".$_SESSION['usuario']."<br/> Tu Contraseña es:".$_SESSION['contrasena'];

/*
echo "Tu usuario es: ";
echo $_SESSION['usuario'] ;
echo "<br/>";
echo "Tu Contraseña es: ";
echo $_SESSION['contrasena'];
*/
?>