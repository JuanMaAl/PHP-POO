<?php
//definamos una clase
class Usuario{
    //propiedades (atributos)
    protected $nombre;
    protected $edad;
    //constructor llamado cada vez que un objeto es creado
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        echo 'Clase padre '.__CLASS__.' inicializada <br> <br>';     
    } 
}

class Cliente extends Usuario {
    private $monto;
    private $propina;
    //constructor, llamado cada vez que un objeto es creado
    public function __construct($nombre, $edad, $monto, $propina){

        parent::__construct($nombre,$edad); //si quiero heredar el constructor del padre
        $this->monto = $monto;
        $this->propina= $propina;
        echo 'Clase hija '.__CLASS__.' inicializada <br><br>';

    }

    //getters
    public function getNombre(){
        return $this->nombre;  
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getMonto(){
        return $this->monto;
    }

    public function getPropina(){
        return $this->propina;
    }

    //metodo para hacer pago
    public function pagar(){
        $total = $this->monto + $this->propina;
        return $this->nombre.' paga '.$total;
    }
}

$cliente = new Cliente('Juanito', 25, 50, 10);
echo 'Nombre del cliente: '.$cliente->getNombre().'<br>';
echo 'Edad del cliente: '.$cliente->getEdad().'<br>';
echo 'Cantidad que da el cliente: '.$cliente->getMonto().'€<br>';
echo 'Propina que da el cliente: '.$cliente->getPropina().'€<br><br>';
echo 'Cuenta: '.$cliente->pagar().'€ en total';
