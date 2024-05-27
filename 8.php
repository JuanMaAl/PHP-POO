<?php
trait Autenticar {
    public function autenticoUsuario(){
        echo 'Logica de autenticación del usuario <br>';
    }
}

trait VerificarEmail {
    public function verificaEmail(){
        echo 'Logica de verificación de Email <br>';
    }
}

class Usuario {
    use VerificarEmail, Autenticar;

    public function registrarUsuario(){
        echo "Tomo los datos para el registro de usuario <br>";
        $this->verificaEmail();
        $this->autenticoUsuario();
    }
}
$usuario = new Usuario();
$usuario->registrarUsuario();