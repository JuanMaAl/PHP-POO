<?php

//definimos una clase
class Usuario {
    //propiedades (atributos)
    public $nombre;
    public $edad;

    //constructor llamado cada vez que un objeto es creado
    public function __construct($nombre, $edad) {
        echo 'Clase'.__CLASS__.' inicializada <br>';
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    //métodos(Funciones)
    public function saluda(){
        return $this->nombre.' dice hola<br>';
    }

    //destructor->Se llama cuando no hay otras referencias
    // a un objeto determinado, para limpiar, cerrar conexiones, etc.
    public function __destruct() {
        echo '<br>destructor corrió';
    }
}

$usuario1 = new Usuario('Juan', 28);
echo $usuario1->nombre.' tiene '.$usuario1->edad.' años';
echo '<br>';
echo $usuario1->saluda();
echo '<br><br>';

$usuario2 = new Usuario('Norma', 24);
echo $usuario2->nombre.' tiene '.$usuario2->edad.' años';
echo '<br>';
echo $usuario2->saluda();