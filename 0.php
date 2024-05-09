<?php
$nombre = 'Juan';
$nombre2 = 'José';
function saluda($nombre){
    return $nombre.' dice hola';
}
echo $nombre.'<br>';
echo saluda($nombre);
echo '<br>';
echo '<br>';
echo $nombre2.'<br>';
echo saluda($nombre2);
echo "<br><br>{$nombre} es amigo de {$nombre2}";
?>