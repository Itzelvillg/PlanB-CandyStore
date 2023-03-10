<?php

require_once "crud.php";
require_once "config-db.php";

class Productos implements CRUD{
    //atributo = columna tabla Autor

    public $id;
    public $nombre;
    public $precio;
    public $descripcion;
   
    public $foto;
    public $estatus;
    

    public function create(){
        //Crear conexion
        $conexion = new ConfigDb();
        $conexion->conectar();
       // try{
        $conn = $conexion->get_conn();

        $stmt = $conn->prepare("INSERT INTO productos (id, nombre,precio,foto,descripcion, estatus)
        VALUES ( :id, :nombre, :precio,  :foto, :descripcion, :estatus)");
       $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':precio', $this->precio);
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':estatus', $this->estatus);

        $result=$stmt->execute();

        $conexion->desconectar();
        if($result){
            return 1;
        }else{
            return 0;
        }
}
    //Obtener unicamente el Id_Autor y el Nombre para los formularios de LIBRO
    public function update(){
        $conexion = new ConfigDb();
        $conexion->conectar();

        $conn = $conexion->get_conn();

         // prepare sql and bind parameters
        $stmt = $conn->prepare("UPDATE productos SET id=:id, nombre=:nombre,precio=:precio,foto=:foto, descripcion=:descripcion, estatus=:estatus WHERE id=:id");
       
       $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':precio', $this->precio);
  
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':estatus', $this->estatus);
       
        
        $result=$stmt->execute();

        //terminar conexion
        $conexion->desconectar();

        if($result){
            return 1;
        }else{
            return 0;
        }
        
    }

    public function delete(){
        //Crear conexion
        $conexion=new ConfigDB();
        $conexion->conectar();
        $conn=$conexion->get_conn();
        // prepare sql and bind parameters
        $stmt = $conn->prepare("DELETE FROM productos WHERE id=:id");
        $stmt->bindParam(':id', $this->id);
        $result=$stmt->execute();

        $conexion->desconectar();
        if($result){
            return 1;
        }else{
            return 0;
        }
    }
    
    public function read_by_id(){
        $conexion=new ConfigDB();
        $conexion->conectar();
        $conn=$conexion->get_conn();
        // prepare sql and bind parameters
        $stmt = $conn->prepare(" SELECT * FROM productos WHERE id=:id");
        $stmt->bindParam(':id', $this->id);
        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();
    }

    //devuelve un solo registro
    public function read_all(){
        $conexion=new ConfigDB();
        $conexion->conectar();
        $conn=$conexion->get_conn();
        // prepare sql and bind parameters
        $stmt = $conn->prepare(" SELECT * FROM productos ");

        $stmt->setFetchMode(PDO::FETCH_OBJ);

        $stmt->execute();

        $conexion->desconectar();

        return $stmt->fetchAll();
    }
    
    //devuelve todos los registros
    public function read_by_column(){
       
    }
}

?>