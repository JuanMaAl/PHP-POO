<?php
    abstract class Usuario{
            abstract public function asignarRol();
    }
    
    class Administrador extends Usuario {
        public function asignarRol(){
            return 'Al usuario: '.__CLASS__.' le doy el rol de: ADMIN';
        }
    }

    class Invitado extends Usuario {
        public function asignarRol(){
            return 'Al usuario: '.__CLASS__.' le doy el rol de: INVITADO';
        }     
    }
    function verRol(Usuario $usuario){
        echo $usuario->asignarRol();
        echo '<br><br>';
    }

    //prueba de los objetos y las funciones
    $usuarioAdmin = new Administrador();
    $usuarioInvitado = new Invitado();

    verRol($usuarioAdmin);
    verRol($usuarioInvitado);