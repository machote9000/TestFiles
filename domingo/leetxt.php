<?php

// Leer los datos del usuario por ID
// Leer todos los datos
$data = file_get_contents($_SERVER['DOCUMENT_ROOT']."../"."/apellidos.txt");
// Dividir por saltos de linea
$data = explode("\n", $data);
// Leer la fila ID
$usuario = $data[0];
$usuario = explode("|", $usuario);

echo "<pre>";
print_r($usuario);
echo "</pre>";


$usuario = $data[1];
$usuario = explode("|", $usuario);

echo "<pre>";
print_r($usuario);
echo "</pre>";

