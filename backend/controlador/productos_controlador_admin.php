<?php

require_once "../modelos/producto.php";


if(isset($_REQUEST['opcion'])){
    $opcion = $_REQUEST['opcion'];
   
    switch($opcion){
        case 1: //create
            if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['precio']) && isset($_FILES['foto']) &&  isset($_REQUEST['descripcion']) && isset($_REQUEST['estatus'])){
                $productos=new Productos();
                $productos->id=$_REQUEST['id'];
                $productos->nombre=$_REQUEST['nombre'];
                $productos->precio=$_REQUEST['precio'];
                $productos->foto=$_FILES['foto']['name'];  
                $productos->descripcion=$_REQUEST['descripcion'];
                $productos->estatus=$_REQUEST['estatus'];   

                $resultado=$productos->create();
                echo  $resultado;

                

                if($resultado == 1){
                    include_once "file_upload_producto.php";
                   header("Location: ../../frontend/vistas/privado/productos/admin/index.php?estatus=registrado");

                }else{
                   header("Location: ../../frontend/vistas/privado/productos/admin/index.php?estatus=No_registrado");

                    
                }
            }else{
                
            }
            break;
        
        case 2: //update

            if((isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['precio'])
               &&  isset($_REQUEST['descripcion']) && isset($_REQUEST['estatus'])) || isset($_FILES['foto'])){
                $productos=new Productos();
                $productos->id=$_REQUEST['id'];
                $productos->nombre=$_REQUEST['nombre'];
                $productos->precio=$_REQUEST['precio'];
              
                 
                $productos->descripcion=$_REQUEST['descripcion'];
                $productos->estatus=$_REQUEST['estatus'];   

                if($_FILES['foto']['error']==0){
                    $productos->foto=$_FILES['foto']['name'];    

                }else{
                    $productos->foto=$_FILES['foto_actual'];    

                }

                $resultado=$productos->update();
                

                if($resultado==1){
                    include_once "file_upload_producto.php";
                    unlink("../img/productos/".$_REQUEST['foto_actual']);
                    header("Location: ../../frontend/vistas/privado/productos/admin/index.php?estatus=actualizado");
                }
            }else{
                header("Location: ../../frontend/vistas/privado/productos/admin/index.php?estatus=No_actualizado");
                }  
              break;

              
      
    
        case 3: //delete

            if (isset($_REQUEST['id'])) {
                $productos = new Productos();
                $productos->id=$_REQUEST["id"];

                $resultado=$productos->delete();

               

                if($resultado == 1){
                    
                    header("Location: ../../frontend/vistas/privado/productos/admin/index.php?estatus=borrado");
                }else{
                   // header("Location: ../../frontend/vistas/clientes/index.php?estatus=NoBorrado");
                   header("Location: ../../frontend/vistas/privado/productos/admin/index.php?estatus=No_borrado");

                }
            }else{
               echo "No viene el id necesario";
            }
    
            break;
    }    
} else {
  
}



?>