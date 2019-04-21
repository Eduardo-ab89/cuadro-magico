<?php

$conexion=mysqli_connect("localhost", "root", "", "base1") or die("Problemas en la conexión" .mysqli_error());

$sql="select * from libros where id <> 2;";

mysqli_query($conexion, $sql) or die("problemas en la consulta," .mysqli_error());

?> 