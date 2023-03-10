<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../vendor/css/index.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

	<nav id="header" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="https://www.youtube.com/watch?v=k8nxe6UE1gY">
  <img src="../../../img/aaaaaa.png" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../publico/index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../privado/sing-in/index.php">Tu cuenta</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Productos 
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../../publico/secciones/productos/Azucarados.php">Azucarados</a>
          <a class="dropdown-item" href="../../publico/secciones/productos/Botanas.php">Botanas</a>
          <a class="dropdown-item" href="../../publico/secciones/productos/Reposteria.php">Reposteria</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../publico/secciones/candyblog.php"> CandyBLOG </a>
      </li>
    </ul>
  
  </div>
</nav>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> <b>Tu Cuenta</b> </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>¡Bienvenido!</h2>
								<p>¿No tienes cuenta?</p>
								<a href="nuevocliente.php" class="btn btn-white btn-outline-white">Crear cuenta</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">¡Hola!  </h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="../../../../backend/controlador/acceso_cliente.php" method="POST">
			      		<div class="form-group mb-3">
			      			<label for="inputEmail" class="sr-only" >Correo</label>
			      			<input type="email" name="email" class="form-control" placeholder="Correo Electronico" >
			      		</div>
		            <div class="form-group mb-3">
		            	<label for="inputPassword" class="sr-only">Password</label>
		              <input type="password"  name="pass" class="form-control" placeholder="Password" >
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Acceder</button>
		            </div>
		            
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
<!-- footer-->
<footer id=footer>

<div class="container">
<div class="row text-center">
  
    <div class="col-12 col-lg">
      <a href="https://goo.gl/maps/NKpX8LNgRJKYLRq87"><h5>Ubicación</h5></a>
    </div>
    <div class="col-12 col-lg">
      <a href="#"><h5><abbr data-toggle="tooltip" title="3315742819 PBcandystore@gmail.com">Contactanos</abbr></h5>
       
    
    </a>
    </div>
    <div class="col-12 col-lg">
      <a href="../../publico/secciones/nosotros.php"><h5>Sobre Nosotros</h5></a>
    </div>
	<div class="col-12 col-lg">
      <a href="index.php"><h5>Trabajador</h5></a>
    </div>

</div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="../../../vendor/js/index.js"></script>

	</body>
</html>

