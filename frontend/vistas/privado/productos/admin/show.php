<?php


    
   
  
if(isset($_REQUEST['id']) && isset($_REQUEST['borrar'])){
  $productos->id=$_REQUEST['id'];
  $resultado=$productos->read_by_id();
  $productos=$resultado[0];

?>

<form action="../../../../../backend/controlador/productos_controlador_admin.php" method="POST" name="Trabajador" enctype="multipart/form-data" class="needs-validation" novalidate>


<h2>Borrar</h2>
<input type="hidden" name="opcion"  value="3">

   <div class="form-row">
    <div class="col-md-4 mb-3">
              <label for="id">Clave del Producto</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                </div>
                <input type="number" class="form-control" name="id" id="id" value="<?php echo $productos->id ?>" placeholder="su id" >
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $productos->nombre ?>" required maxlength="20" disabled>
              <div class="valid-feedback">
                Se ve bien!
              </div>
              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="id">Precio</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">$</span>
                </div>
                <input type="number" class="form-control" name="precio" id="precio" value="<?php echo $productos->precio ?>" placeholder="Precio" >
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Email</label>
              <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $productos->descripcion ?>" placeholder="descripcion" disabled>
              <div class="valid-feedback">
                Se ve bien!
              </div>
              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>
            </div>
            

              <div class="col-md-12 mb-2">
              <img src="../../../../backend/img/productos/<?php echo $productos->foto; ?>" alt="<?php echo $productos->foto ?>" width="100px">
                <label for="foto">Foto del Producto <?php echo $productos->foto ?></label>
                
              </div>


              <div class="col-md-6 mb-3">
                <label for="inputPassword6">Estatus</label>
                <input type="text" name="estatus" id="estatus" value="<?php echo $productos->estatus ?>" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" disabled>
                <small id="pass" class="text-muted">
                  Debe contener de 8 a 20 caracteres.
                </small>
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>

            </div>
          </div>
         
          <div class="buttons_forms">
                <button type="submit" value="limpiar" class="btn btn-primary" style="float: right;">Enviar para borrar</button>
  
            </div> 

</form>
<script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>

<?php
}

?>