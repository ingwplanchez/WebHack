<?php
$conexion = sqlite_open('bibliotecacd.db');

$consulta =
<<<SQL

INSERT INTO Discos VALUES('U2','A','1989');
INSERT INTO Discos VALUES('U2','B','1990');
INSERT INTO Discos VALUES('U2','C','1991');

SQL;
$resultado = sqlite_exec($conexion,$consulta);
sqlite_close($conexion)
?>