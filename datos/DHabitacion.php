    <?php
    include_once('conexion.php');
class DHabitacion{
    private $id;
    private $galeria;
    private $estado;
    private $descripcion;
    private $fecha_h;
    private $id_plan;
    private $id_categoria;

    private $pdo;

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
        $stm=$this->pdo->prepare("SELECT * FROM habitaciones");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
       } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

 public function create(){
     try {
         $stm = $this->pdo->prepare("INSERT INTO habitaciones (galeria,estado,descripcion,id_plan,id_categoria) VALUES (?,?,?,?,?)");
     $stm->execute(array($this->galeria,$this->estado,$this->descripcion,$this->id_plan,$this->id_categoria));
     } catch (PDOException $e) {
         echo $e->getMessage();
     }
    }


 public function modificar(){
    try {
        $stm = $this->pdo->prepare("UPDATE habitaciones SET galeria=?,estado=?,descripcion=?,id_plan=?,id_categoria=? WHERE id=?");
        $stm->execute(array($this->galeria,$this->estado,$this->descripcion,$this->id_plan,$this->id_categoria,$this->id));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }

 public function eliminar(){
   try {
    $stm=$this->pdo->prepare("DELETE FROM habitaciones WHERE id=?");
    $stm->execute(array($this->id));
   } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
}

