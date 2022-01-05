<!doctype html>
<html lang="es">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- Own CSS -->
<link rel="stylesheet" href="<?php echo base_url()?>public/assets/css/stylesheet.css">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<title> Verificacion de email</title>
</head>
<body class="bg-light">
<!--HEADER-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"><img src="https://img.icons8.com/ios-filled/50/000000/sheep2.png"/> BLACK SHEEP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          FUNCIONALIDADES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="<?php echo base_url()?>"><i class="fas fa-home"></i> Home</a>
          <a class="dropdown-item" href="<?php echo base_url()?>auth"><i class="fas fa-sign-in-alt"></i> INGRESO</a>
          <a class="dropdown-item" href="<?php echo base_url()?>register"><i class="fas fa-user-plus"></i> REGISTRO</a>
          <a class="dropdown-item" href="<?php echo base_url()?>productos"><i class="fas fa-shopping-cart"></i> PRODUCTOS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-code"></i> Log releases</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log releases</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-unstyled">
          <li><strong>v2.0</strong>
            <ul><small>
              <li>Migración a framework <a href="https://codeigniter.com/userguide3/index.html" target="_blank">CodeIgniter 3.1.11</a></li>
              <li>Se agrega envío de email para confirmar casilla de correo para futuras funcionalidades</li>
              <li>Se habilita sección de Productos y Detalle de Producto</li>
              <li>Se agregan validaciones en servidor para el registro y logueo de usuarios con librerías de CI</li>
              <li>Se agregan validaciones del lado del cliente con HTML5 y JS</li>
              <li>Se agrega información en dashboard de IP, SO, Browser y Broser Version</li>
              <li>Mejoras en UI para vista mobile</li>
              <li>Mejoras en backend</li></small>
            </ul>
          </li>
          <li><strong>v1.0</strong>
            <ul><small>
              <li>Registro de usuarios</li>
              <li>Login de usuarios</li>
              <li>Dashboard con info del usuario logueado</li></small>
            </ul>
          </li>
        </ul>
      </div>
      <div class="modal-footer mx-auto">
        <p class="text-center text-muted">Gracias por leer.</p>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="row pt-5 pb-5">
  <div class="col-md-12 col-lg-8 mx-auto pt-3 pb-5">
  <h1 class="text-center">Proceso de validación de email</h1>
  </div>
  <div class="col-md-12 col-lg-8 mx-auto pt-3 pb-5">
    <!--CONTENIDO DE LA VISTA-->
<h4 class="text-center"><?php echo $message; ?></h3>
<!--CONTENIDO DE LA VISTA-->



    </div>
    </div>
</div>


<!--Footer-->
<div class="container-fluid  pt-2 pb-2 mt-5 my_violet_background" style="color: #e3f2fd; font-weight:700;">
<div class="row">
<div class="col-12 mx-auto text-center" style="font-weight:500;">UTN.BA | Professional Backend Developer | Trabajo práctico módulo 2</div><div class="col-12 mx-auto text-center">Desarrollado por: Alejandro Mendoza</div>
</div>
</div>
<!--JS Libraries-->
    <!--jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--jQuery fallback-->
    <script src="<?php echo base_url()?>public/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>public/assets/js/bootstrap-show-password.js"></script>
</body>
</html>