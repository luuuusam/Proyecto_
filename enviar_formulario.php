<?php

echo "Mensaje recibido!";

$nombre = $_POST['nombre'];
$nombre = $_POST['correo'];
$nombre = $_POST['telefono'];
$nombre = $_POST['asunto'];
$nombre = $_POST['mensaje'];

echo "Gracias, " , $nombre . " Pronto nos comunicaremos con usted.";

?>