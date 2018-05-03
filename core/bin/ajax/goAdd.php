<?php

$db = new Conexion();

$pais = $db->real_escape_string($_POST['pais']);
$grupo = $db->real_escape_string($_POST['grupo']);
$flag = $db->real_escape_string($_POST['flag']);

$sql = $db->query("INSERT INTO paises (pais,grupo,flag) VALUES ('$pais','$grupo','$flag');");

echo 1;

$db->close();
?>