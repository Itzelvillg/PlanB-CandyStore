<?php

require_once "../modelos/usuario_admin.php";
print_r($_REQUEST);

if(isset($_REQUEST['email']) && isset($_REQUEST['pass'])){
$usuarios= new usuarios();
$usuarios->email=$_REQUEST['email'];   
$usuarios->pass=$_REQUEST['pass'];    
$usuarios=$usuarios->acceso();  
print_r($usuarios);

if(!empty($usuarios)){
    
    $usuarios=$usuarios[0];  
    session_start();
    $_SESSION['id']=$usuarios->id;
    $_SESSION['nombre']=$usuarios->nombre;
    $_SESSION['apellido']=$usuarios->apellido;
    $_SESSION['foto']=$usuarios->foto;
    $_SESSION['tipo']=$usuarios->tipo;
    
    header("Location: ../../../../../webdulceria/frontend/vistas/privado/dashboard/admin/index.php");

}else{
    session_unset();
    session_destroy();
    header("Location: ../../../../../webdulceria/frontend/vistas/privado/sing-in/index_cliente.php?mensaje=datos_incorrectos");

}
}

if(isset($_REQUEST['out'])){
    session_unset();
    session_destroy();
    header("Location: ../../../../../webdulceria/frontend/vistas/privado/sing-in/index_cliente.php");
}

?>