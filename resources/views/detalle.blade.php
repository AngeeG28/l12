<!-- PARA CREAR UNA NUEVA VISTA DEBE NOMBRARSE CON nombre.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del Producto</title>
</head>
<body>
    <h1>Detalle del Producto</h1>
    <p>Esta es la página de detalle del producto.</p> 
    <p>ID del Producto: {{ $id }}</p> <!-- Muestra el ID del producto pasado desde la ruta (http://localhost/laravel/unisarc/l12/public/detalle/11) a la vista-->  
    <div class="container my-5 custom-boxed-container">
    <div class="text-center"> 
       <h1 class="display-5 fw-bold text-body-emphasis" style="color: #02354bff"><?=$productos->nombre?></h1> 
        <br>
       <h2 style="color: #0280b6ff"><?=$productos->autor?></h2>
      <img class="d-block mx-auto mb-4" src="<?= base_url('imagenes/Stock/' . $sku . '.jpg') ?>" alt="" width="15%"> 
      <div class="col-lg-6 mx-auto"> 
        <h3 class="display-8 fw-bold text-body-emphasis" style="color: #0280b6ff">$<?=$productos->valor?></h3> 
        <br>
        <p class="lead mb-4"><?=$productos->descripcion?></p> 
        <br>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
         <?php if($productos->estado == 'inactivo'): ?>
            <a href="<?= base_url('/productos/activar/' . $sku) ?>" type="button" class="btn btn-primary btn-lg px-4 gap-3">Activar</a>
          <?php  else: ?>
            <a href="<?= base_url('/productos/inactivar/' . $sku) ?>" type="button" class="btn btn-primary btn-lg px-4 gap-3">Inactivar</a> 
            <?php endif; ?>
            <a href="<?= base_url('/productos') ?>" class="btn btn-outline-secondary btn-lg px-4" role="button">
              Regresar </a>
        </div> 
      </div> 
    </div>
</div>

</body>
</html>