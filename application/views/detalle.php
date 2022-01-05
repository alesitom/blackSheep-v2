<div class="container pt-5">
  <div class="row">
    <div class="col-12">
      <h4>
    <?php echo $producto["product"]?> <?php echo $producto["description"]?> <?php echo $producto["brand"]?></h4>
    </div>
  </div>
</div>  
<div class="container pt-3 md-w-100 lg-w-50">
  <div class="row">
    <div class="col-md-12 col-lg-6 pr-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="<?php echo base_url()?>public/assets/img/products/<?php echo $producto["first_img"]?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="<?php echo base_url()?>public/assets/img/products/<?php echo $producto["second_img"]?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="<?php echo base_url()?>public/assets/img/products/<?php echo $producto["third_img"]?>" class="d-block w-100" alt="...">
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    <div class="col-md-12 pl-5 col-lg-5">
    <div class="card" >
    <div class="card-header">
    <strong>DETALLES DEL PRODUCTO</strong>
    </div>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Marca: <?php echo $producto["brand"]?></li>
    <li class="list-group-item">Producto: <?php echo $producto["product"]?> <?php echo $producto["description"]?></li>
    <li class="list-group-item">Disponible para compra: <?php echo $producto["is_available"]?></li>
    <li class="list-group-item">Stock disponible: <?php echo $producto["stock"]?></li>
    <li class="list-group-item">Precio: $<?php echo $producto["price"]?></li>
    <li class="list-group-item">SKU: <?php echo $producto["sku_id"]?></li>
    </ul>
    <div class="card-footer">
      
      <a class="btn btn-primary btn-sm btn-block disabled" href="#" role="button">COMPRAR</a>   
  </div>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>
