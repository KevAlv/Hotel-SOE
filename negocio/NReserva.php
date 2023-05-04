<?php
    include_once('../datos/DCliente.php');
    class NCliente{
        private $cliente;
        
        public function __construct(){
            $this->cliente = new DCliente();
        }

        public function getAll(){
           return $this->cliente->getAll();
        }

        public function create($nombre,$password,$email,$foto){
            $this->cliente->set('nombre',$nombre);
            $this->cliente->set('password',$password);
            $this->cliente->set('email',$email);
            $this->cliente->set('foto',$foto);
            $this->cliente->create();
         }

        public function modificar($id,$password,$email,$foto){
            $this->cliente->set('nombre',$nombre);
            $this->cliente->set('password',$password);
            $this->cliente->set('email',$email);
            $this->cliente->set('foto',$foto);
            $this->cliente->modificar();
         }

         public function eliminar($id){
            $this->cliente->set('id',$id);
            $this->cliente->eliminar();
         }
        
    }


?>