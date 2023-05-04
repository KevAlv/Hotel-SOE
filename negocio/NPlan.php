<?php
    include_once('../datos/DPlan.php');
    include_once('upload_image.php');
    if (isset($_POST['tipo'])){
        uploadImage($_FILES);
        $target_file = $target_dir . basename($FILES["fileToUpload"]["name"]);
        $plan = new Nplan;
        $plan->create($_POST['tipo'],$_POST['$target_file']);
       header("Location: ../presentacion/planes.php");
        die();
    }

    class NPlan{
        private $plan;
        
        public function __construct(){
            $this->plan = new DPlan();
        }

        public function getAll(){
           return $this->plan->getAll();
        }

        public function create($tipo){
            $this->plan->set('tipo',$tipo);
            $this->plan->create();
         }

        public function modificar($id,$tipo){
            $this->plan->set('id',$id);
            $this->plan->set('tipo',$tipo);
            $this->plan->modificar();
         }

         public function eliminar($id){
            $this->plan->set('id',$id);
            $this->plan->eliminar();
         }
        
    }


?>