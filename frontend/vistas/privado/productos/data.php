<?php
$productos = new Productos();
   $registros=$productos->read_all();
   //print_r($registros);
   if(isset($_GET['estado'])){
?>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong> <?php  echo $_GET['estado'];   ?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php
      
   }
?>
<br>
<br>
<section class="col-10 " style="float:right ;">
<h2>Datos de Productos</h2>
<div class="table-responsive">
    <table class="table table-bordered table-dark">

      <thead>
        <tr>
          <th >ID</th>
          <th >Nombre del Producto</th>
          <th >Precio</th>
          <th >Descripcion</th>
          <th >Foto</th>
          <th >Estatus</th>
          <th></th>

        </tr>
      </thead>
      <tbody>
      <?php
            foreach ($registros as $productos) {
            ?>

        <tr>
          <td><?php echo $productos->id; ?></td>
          <td><?php echo $productos->nombre; ?></td>
          <td><?php echo $productos->precio; ?></td>
         
          <td><?php echo $productos->descripcion; ?></td>
        
          <td> <img src="../../../../backend/img/productos/<?php echo $productos->foto; ?>" alt="<?php echo $productos->foto; ?>" width="100px"></td>
          <td><?php echo $productos->estatus; ?></td>
          <td><a href="index_trabajador.php?editar&id=<?php echo $productos->id ?>">Editar</a></td>
        </tr>
        <?php
            }
            ?>
      </tbody>
    </table>
</section>

 


