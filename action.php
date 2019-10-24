<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
mysql_connect("localhost","ignacio","123");// primero el host, segundo el user, tercero la contraseña
mysql_select_db("ignacio");// hay ke seleccionar la base de datos o si no nunca te va a guardar
mysql_query("INSERT INTO tabla(nombre,apellido) VALUES ('$nombre','$apellido')");
?>