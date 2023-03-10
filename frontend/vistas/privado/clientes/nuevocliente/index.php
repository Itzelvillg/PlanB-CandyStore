<?php


include_once "../../../../../backend/modelos/cliente.php";

$clientes = new Clientes();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Tu perfil</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  <!-- Bootstrap core CSS -->



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->

</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">SU CUENTA</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="../../../sing-in/index_cliente.php">Salir</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index_cliente.php">
              <span data-feather="home"></span>
              Principal <span class="sr-only"></span>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="../trabajadores/index_trabajador.php">
                <span data-feather="file"></span>
                Empleados
              </a>
            
            <li class="nav-item">
              <a class="nav-link" href="https://www.paypal.com/mx/home">
                <span data-feather="users"></span>
                Metodos de pago
              </a>
            </li>
        

          </ul>


        </div>
      </nav>
 
<h3>CLIENTES</h3>
   <?php include "edit.php" ?>
  
   <script src="../../../../vendor/js/dashboard.js"></script>
</body>
</html>
