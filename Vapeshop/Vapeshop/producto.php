<?php
header('Content-Type: text/html; charset=UTF-8');   
require_once("templates/header.php"); ?>

<?php

require_once( "datos.php" );
$id = $_GET['id'];
$sql = "Select * from productos where id_Producto ='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_assoc($resultado)) {

  ?>


  <div class="container">
    <div class="row">
      <div class="row">
        <div class="col-12">
          <h1 class="page-header"><?php echo $mostrar['nombre'] ?></h1>

        </div>
        <div class="col-lg-6 mb-4">
          <div class="">
            <div class="main-product-image">
              <img src="<?php echo $mostrar['imagen'] ?>" alt="<?php echo $mostrar['imagen'] ?>" class="img-fluid" height="1200" width="900">
            </div>
            <div class="form-group price_elem row">
              <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Price:</label>
              <div class="col-sm-8 col-md-9">
                <span class="product-form-price" id="product-form-price"><?php echo $mostrar['precio'] ?></span>
              </div>
              <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Categoria:</label>
              <div class="col-sm-8 col-md-9">
                <span class="product-form-price" id="product-form-price"><?php echo $mostrar['categoria'] ?></span>
              </div>
              <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Descripcion:</label>
              <div class="col-sm-8 col-md-9">
                <span class="product-form-price" id="product-form-price"><?php echo $mostrar['descripcion'] ?></span>
              </div>
              <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Comprar:</label>
              <div class="col-sm-8 col-md-9">
                <span class="product-form-price" id="product-form-price"> <button type="button" class="btn btn-warning">
                    <a href="carrito.php?id=<?php echo $mostrar['id_Producto'] ?>">Añadir al carrito</a>
                  </button></span>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>

  <?php } ?>


</div>
</div>
<?php require_once("templates/footer.php"); ?>