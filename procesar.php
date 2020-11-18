<?php
$nombre = $_GET["nombre"];
$dire = $_GET["dire"];
$rfc = $_GET["rfc"];
$genero = $_GET["genero"];

echo "<h2>Informacion recibida</h2>";
echo "El nombre recibido es: " . $nombre . "<br/>";
echo "La dirección recibido es: " . $dire . "<br/>";
echo "El RFC recibido es: " . $rfc . "<br/>";
echo "El género es: " . $genero . "<br/>";
?>