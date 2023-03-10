<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../vendor/css/index.css">
    <title>Plan B Candy Store</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style> 

		body {
			font-family: "Open Sans", sans-serif;
		}
		h1 {
			color: rgb(145, 12, 12);
			font-size: 36px;
			font-weight: 300;
			text-align: center;
			text-transform: uppercase;
			position: relative;
			margin: 30px 0 80px;
		}
		h2 {
			color: #000;
			font-size: 26px;
			font-weight: 300;
			text-align: center;
			text-transform: uppercase;
			position: relative;
			margin: 30px 0 80px;
		}
		h2 b {
			color: #ffc000;
		}
		h2::after {
			content: "";
			width: 100px;
			position: absolute;
			margin: 0 auto;
			height: 4px;
			background: rgba(0, 0, 0, 0.2);
			left: 0;
			right: 0;
			bottom: -20px;
		}
		.carousel {
			margin: 50px auto;
			padding: 0 70px;
		}
		.carousel .item {
			min-height: 330px;
			text-align: center;
			overflow: hidden;
		}
		.carousel .item .img-box {
			height: 160px;
			width: 100%;
			position: relative;
		}
		.carousel .item img {	
			max-width: 100%;
			max-height: 100%;
			display: inline-block;
			position: absolute;
			bottom: 0;
			margin: 0 auto;
			left: 0;
			right: 0;
		}
		.carousel .item h4 {
			font-size: 18px;
			margin: 10px 0;
		}
		.carousel .item .btn {
			color: #333;
			border-radius: 0;
			font-size: 11px;
			text-transform: uppercase;
			font-weight: bold;
			background: none;
			border: 1px solid #ccc;
			padding: 5px 10px;
			margin-top: 5px;
			line-height: 16px;
		}
		.carousel .item .btn:hover, .carousel .item .btn:focus {
			color: #fff;
			background: #000;
			border-color: #000;
			box-shadow: none;
		}
		.carousel .item .btn i {
			font-size: 14px;
			font-weight: bold;
			margin-left: 5px;
		}
		.carousel .thumb-wrapper {
			text-align: center;
		}
		.carousel .thumb-content {
			padding: 15px;
		}
		.carousel .carousel-control {
			height: 100px;
			width: 40px;
			background: none;
			margin: auto 0;
			background: rgba(0, 0, 0, 0.2);
		}
		.carousel .carousel-control i {
			font-size: 30px;
			position: absolute;
			top: 50%;
			display: inline-block;
			margin: -16px 0 0 0;
			z-index: 5;
			left: 0;
			right: 0;
			color: rgba(0, 0, 0, 0.8);
			text-shadow: none;
			font-weight: bold;
		}
		.carousel .item-price {
			font-size: 13px;
			padding: 2px 0;
		}
		.carousel .item-price strike {
			color: #999;
			margin-right: 5px;
		}
		.carousel .item-price span {
			color: #86bd57;
			font-size: 110%;
		}
		.carousel .carousel-control.left i {
			margin-left: -3px;
		}
		.carousel .carousel-control.left i {
			margin-right: -3px;
		}
		.carousel .carousel-indicators {
			bottom: -50px;
		}
		.carousel-indicators li, .carousel-indicators li.active {
			width: 10px;
			height: 10px;
			margin: 4px;
			border-radius: 50%;
			border-color: transparent;
		}
		.carousel-indicators li {	
			background: rgba(0, 0, 0, 0.2);
		}
		.carousel-indicators li.active {	
			background: rgba(0, 0, 0, 0.6);
		}
		.star-rating li {
			padding: 0;
		}
		.star-rating i {
			font-size: 14px;
			color: #ffc000;
		}
		</style>

  </head>
  <body>
<!--Header-->
<nav id="header" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="https://www.youtube.com/watch?v=k8nxe6UE1gY">
  <img src="../../../../img/aaaaaa.png" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" style="float:right;">
      <li class="nav-item active">
        <a class="nav-link" href="../../index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../../privado/sing-in/index_cliente.php">Tu cuenta</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Productos 
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="Azucarados.php">Azucarados</a>
          <a class="dropdown-item" href="Botanas.php">Botanas</a>
          <a class="dropdown-item" href="Reposteria.php">Reposteria</a>
        
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../candyblog.php"> CandyBLOG </a>
      </li>
    </ul>
  
  </div>
</nav>

<section>
	    <h1>Utensilios de reposteria</h1>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2> <b>Reposteria</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../../../../img/productos/reposteria/paquete 3.PNG" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Paquete 3 utensilios </h4>
									<p class="item-price"><strike>$375.00</strike><span>$335.00</span> </p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="https://paypal.me/ikselo?country.x=MX&locale.x=es_XC" class="btn btn-primary">Comprar </a>

					</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../../../../img/productos/reposteria/Moldes.PNG" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Moldes de acero paquete 4</h4>
									<p class="item-price"><strike>$245.00</strike> <span>$230.50</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="https://paypal.me/ikselo?country.x=MX&locale.x=es_XC" class="btn btn-primary">Comprar </a>

				</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../../../../img/productos/reposteria/batidor.PNG" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Batidor manual</h4>
									<p class="item-price"><span>$60.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="https://paypal.me/ikselo?country.x=MX&locale.x=es_XC" class="btn btn-primary">Comprar </a>

						</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../../../../img/productos/reposteria/Mangas.PNG" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Mangas de decoración paquete</h4>
									<p class="item-price"><strike>$175.00</strike> <span>$165.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="https://paypal.me/ikselo?country.x=MX&locale.x=es_XC" class="btn btn-primary">Comprar </a>

							</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../../../../img/productos/reposteria/cucharasmed.jpg" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Cucharas medidoras</h4>
									<p class="item-price"><strike>$143.00</strike> <span>$133.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="https://paypal.me/ikselo?country.x=MX&locale.x=es_XC" class="btn btn-primary">Comprar </a>

							</div>						
							</div>
						</div>
						
                        
                        <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../../../../img/productos/reposteria/colorantes.jpg" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Colorantes alimenticios </h4>
									<p class="item-price"><strike>$175.00</strike><span>$150.00</span> </p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="https://paypal.me/ikselo?country.x=MX&locale.x=es_XC" class="btn btn-primary">Comprar </a>

								</div>						
							</div>
						</div>
                        <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../../../../img/productos/reposteria/saborizantes.jpg" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Saborizantes artificiales paquete </h4>
									<p class="item-price"><strike>$358.00</strike><span>$333.00</span> </p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="https://paypal.me/ikselo?country.x=MX&locale.x=es_XC" class="btn btn-primary">Comprar </a>

						</div>						
							</div>
						</div>
                        <div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../../../../img/productos/reposteria/recetario.png" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>PDF recetario Reposteria casera Trucos y consejos </h4>
									<p class="item-price"><strike>$175.00</strike><span>$155.00</span> </p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="https://paypal.me/ikselo?country.x=MX&locale.x=es_XC" class="btn btn-primary">Comprar </a>

							</div>						
							</div>
						</div>
										
					</div>
				</div>
				
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
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
		  <a href="../nosotros.php"><h5>Sobre Nosotros</h5></a>
		</div>
	
	</div>
	<br>
	<br>
	
	<br>
	
	<br>
	
	<br>
	
	<br>
	<br>
	<br>
	<br>
	
	
	</footer>
		<!-- Optional JavaScript; choose one of the two! -->
	
		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
		<script src="../../../../vendor/js/index.js"></script>
		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
		-->
	  </body>
	</html>