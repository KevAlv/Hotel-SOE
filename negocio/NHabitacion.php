<?php
    include_once('../datos/DHabitacion.php');
    class NHabitacion{
        private $habitacion;
        
        public function __construct(){
            $this->habitacion = new DHabitacion();
        }

        public function getAll(){
           return $this->habitacion->getAll();
        }

        public function create($galeria,$estado,$descripcion,$id_plan,$id_categoria){
            $this->habitacion->set('galeria',$galeria);
            $this->habitacion->set('estado',$estado);
            $this->habitacion->set('descripcion',$descripcion);
            $this->habitacion->set('id_plan',$id_plan);
            $this->habitacion->set('id_categoria',$id_categoria);
            $this->habitacion->create();
         }

        public function modificar($id,$galeria,$estado,$descripcion,$id_plan,$id_categoria){
            $this->habitacion->set('id',$id);
            $this->habitacion->set('id',$galeria);
            $this->habitacion->set('id',$estado);
            $this->habitacion->set('id',$descripcion);
            $this->habitacion->set('id',$id_plan);
            $this->habitacion->set('id',$id_categoria);
            $this->habitacion->modificar();
         }

         public function eliminar($id){
            $this->habitacion->set('id',$id);
            $this->habitacion->eliminar();
         }
        
    }


?>