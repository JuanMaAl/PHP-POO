<?php
//definimos una clase
class Usuario{
    //propiedades (atributos)
    private $nombre;
    private $edad;
    //constructor llamado cada vez que un objeto es creado
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    //getters
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    //setter
    public function setNombre($nombre){
        $this->nombre =  $nombre;
    }
    //__get Metodo magico
    public function __get($propiedad){
        if (property_exists($this,$propiedad)){
            return $this->$propiedad;
        }
    }
    //__set Metodo magico
    public function __set($propiedad, $valor){
        if (property_exists($this, $propiedad)){
            $this->$propiedad = $valor;
        }
        return $this;
    }
}

$usuario1 = new Usuario('Juan', 40);
echo 'El nombre es privado y no se puede obtener así: $usuario1->nombre';
echo '<br>';
echo 'La edad es privada y no se puede obtener así: $usuario1->edad';
echo '<br><br>';
echo 'Nombre pasado al constructor: '.$usuario1->getNombre(); // con el getter obtengo el nombre
echo '<br>';
echo 'Edad pasada al constructor: '.$usuario1->getEdad(); //con el getter obtengo la edad
echo '<br><br>';
$usuario1->setNombre('José'); //con el setter modifico el nombre
echo 'Nombre modificado con un setter: '.$usuario1->getNombre(); //obtengo el nombre con un getter
echo '<br><br>';
//setter y getter dinamicos
$usuario1->__set('edad', 45); //set magico
echo 'La edad con setter y getter dinámicos: '.$usuario1->__get('edad').' años'; //get magico