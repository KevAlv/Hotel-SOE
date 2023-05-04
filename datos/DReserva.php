<?php
    include_once('conexion.php');
class DReserva{
    private $id_reserva;
    private $id_habitacion;
    private $id_usuario;
    private $pago_reserva;
    private $codigo_reserva;
    private $descripcion_reserva;
    private $fecha_ingreso;
    private $fecha_salida;
    private $fecha_reserva;

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
        $stm=$this->pdo->prepare("SELECT * FROM reservas");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
       } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

 public function create(){
     try {
         $stm = $this->pdo->prepare("INSERT INTO reservas (id_habitacion,id_usuario,pago_reserva,codigo_reserva,descripcion_reserva,fecha_ingreso,fecha_salida,fecha_reserva) VALUES (?,?,?,?,?,?,?,?)");
     $stm->execute(array($this->id_habitacion,$this->id_usuario,$this->pago_reserva,$this->codigo_reserva,$this->descripcion_reserva,$this->fecha_ingreso,$this->fecha_salida,$this->fecha_reserva));
     } catch (PDOException $e) {
         echo $e->getMessage();
     }
    }

 public function modificar(){
    try {
        $stm = $this->pdo->prepare("UPDATE reservas SET id_habitacion=?,id_usuario=?,pago_reserva=?,codigo_reserva=?,descripcion_reserva=?,fecha_ingreso=?,fecha_salida=?,fecha_reserva=? WHERE id_reserva=?");
        $stm->execute(array($this->id_habitacion,$this->id_usuario,$this->pago_reserva,$this->codigo_reserva,$this->descripcion_reserva,$this->fecha_ingreso,$this->fecha_salida,$this->fecha_reserva,$this->id_reserva));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }

 public function eliminar(){
   try {
    $stm=$this->pdo->prepare("DELETE FROM reservas WHERE id_reserva=?");
    $stm->execute(array($this->id));
   } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
}

