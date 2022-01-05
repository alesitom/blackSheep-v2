<div class="container">
  <div class="row">
  <div class="col-md-12 col-lg-6 mx-auto pt-5 h1 text-center">
  Productos
  </div>
  </div>
</div>
<div class="container">
  <div class="row pt-5">
  <div class="col-md-12 col-lg-6 mx-auto">
  <?php
    foreach($productos as $k => $v){?>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
  <div class="col-md-4">
  <img src="<?php echo base_url()?>public/assets/img/products/<?php echo $v["first_img"]?>" class="card-img" alt="<?php echo $v["description"]?>">
  </div>
  <div class="col-md-8">
  <div class="card-body">
  <h5 class="card-title"><?php echo $v["product"]?>
  <p class="card-text"><?php echo $v["description"]?></p>
  <p class="card-text"><small class="text-muted">Precio: $<?php echo $v["price"]?></small></p>
  <p class="card-text"><small class="text-muted">SKU: <?php echo $v["sku_id"]?></small></p>
  <a class="btn  btn-block btn-dark" href="<?php echo base_url()?>Detalle/index/<?php echo $v["id"]?>/<?php echo $v["sku_id"]?>/<?php echo md5(rand());?>" target="_blank" role="button">Ver detalles</a>
  </div>
  </div>
  </div>
</div>
<?php
  }
?>
</div>
</div>
</div>