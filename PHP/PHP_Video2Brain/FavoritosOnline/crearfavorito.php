<?php

session_start();

//Crear variables

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

//Conexion

$conexion = sqlite_open('favoritos.db');

//Consulta

$consulta = 

<<<SQL

INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')

SQL;

//Ejecuto

$resultado = sqlite_exec($conexion,$consulta);

//Cierro
sqlite_close($conexion);

// Y vuelvo
echo '
<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=principal_5.php">
	</head>
</html>
';

?>
