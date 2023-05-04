<?php
    include_once('conexion.php');
class DPlan{
    private $id;
    private $tipo;

    public $pdo;

 public function set($atributo,$valor){
        $this->$atributo = $valor;
 }
 public function get($atributo){
    return $this->$atributo;
 }

 public function __construct(){
        $this->pdo = Conexion::getInstance()->getConnection();
   }
   
 public function getAll(){
       try {
        $stm=$this->pdo->prepare("SELECT * FROM planes");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
       } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

 public function create(){
     try {
         $stm = $this->pdo->prepare("INSERT INTO planes (tipo) VALUES (?)");
     $stm->execute(array($this->tipo,$this->img));
     } catch (PDOException $e) {
         echo $e->getMessage();
     }
    }


 public function modificar(){
    try {
        $stm = $this->pdo->prepare("UPDATE planes SET tipo=? WHERE id=?");
        $stm->execute(array($this->tipo,$this->img,$this->id));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }

 public function eliminar(){
   try {
    $stm=$this->pdo->prepare("DELETE FROM planes WHERE id=?");
    $stm->execute(array($this->id));
   } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
}

