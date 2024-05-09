<?php
//definimos una clase
class Usuario{
    //propiedades(atributos)
    public $nombre;

    //métodos (Funciones)
    public function saluda(){
        return $this->nombre.' dice hola';
    }
}

//Instanciación de un objeto usuario de la clase Usuario
$usuario1 = new Usuario();
$usuario1->nombre='Juan';
echo $usuario1->nombre;
echo '<br>';
echo $usuario1->saluda();

echo '<br>';
echo '<br>';

$usuario2 = new Usuario();
$usuario2->nombre='José';
echo $usuario2->nombre;
echo '<br>';
echo $usuario2->saluda();

echo "<br><br>{$usuario1->nombre} es amigo de {$usuario2->nombre}";