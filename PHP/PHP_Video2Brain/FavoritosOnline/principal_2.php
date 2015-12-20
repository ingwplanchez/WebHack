<?php
session_start();

echo "Tu usuario es: ".$_SESSION['usuario']."<br/> Tu Contraseña es:".$_SESSION['contrasena'];

// Crear conexion
$conexion = sqlite_open("favoritos.db");

// Establecer una consulta
$consulta = "SELECT * FROM favoritos WHERE usuario='jocarsa' AND contrasena='jocarsa';";

// Ejecutar la consulta
$resultado = sqlite_query($conexion,$consulta);


echo "
<table border = 1 width=100%>
<tr>
	<td>Titulo</td>
	<td>Direccion</td>
	<td>Categoria</td>
	<td>Comentario</td>
	<td>Valoracion</td>
</tr>
";

// Imprimir la consulta
while($fila = sqlite_fetch_array($resultado)){
echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td></tr>";

}
echo "</table>";
// cerrar la conexion
sqlite_close($conexion);
?>