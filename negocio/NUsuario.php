<?php
    include_once('../datos/DUsuario.php');

    if (isset($_GET['delete_id'])){
        $usuario = new NUsuario;
        $usuario->eliminar($_GET['delete_id']); 
        header("Location: ../presentacion/usuarios.php");
        die();
    }
    if (isset($_POST['id_edit'])){
        $usuario = new NUsuario;
        $usuario->modificar($_POST['id_edit'],$nombre,$password,$email); 
        header("Location: ../presentacion/usuarios.php");
        die();
    }
        if (isset($_POST['nombre'])){
        $usuario = new NUsuario;
        $usuario->create($_POST['nombre'],$_POST['password'],$_POST['email']);
       header("Location: ../presentacion/usuarios.php");
        die();
    }


    class NUsuario{
        private $usuario;
        
        public function __construct(){
            $this->usuario = new DUsuario();
        }

        public function getAll(){
           return $this->usuario->getAll();
        }


        public function create($nombre,$password,$email){
            $this->usuario->set('nombre',$nombre);
            $this->usuario->set('password',$password);
            $this->usuario->set('email',$email);
            $this->usuario->create();
         }

        public function modificar($id,$nombre,$password,$email){
            $this->usuario->set('id',$id);
            $this->usuario->set('nombre',$nombre);
            $this->usuario->set('password',$password);
            $this->usuario->set('email',$email);
            $this->usuario->modificar();
         }

         public function eliminar($id){
            $this->usuario->set('id',$id);
            $this->usuario->eliminar();
         }
        
    }


?>