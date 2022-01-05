<div class="container">
  <div class="row pt-5 ">
  <div class="col-md-12 col-lg-6 mx-auto pt-3 pb-1">
  <h1 class="text-center">Registro de usuarios</h1>
</div>
</div>
<div class="row">
<div class="col-md-12 col-lg-6 mx-auto ">
  <?php if ($this->session->flashdata('message')){
    echo '<div class="alert alert-success text-center"> '.$this->session->flashdata("message").'</div>';
   }
  ?>
<form method="post" action="<?php echo base_url();?>register/validation">
  <div class="form-group">
  <label for="nombre" class="h4 pl-1 my_blue">Nombre</label>
  <input type="text" name="user_name" class="form-control" required minlength="4" placeholder="Tu nombre" value="<?php echo set_value('user_name'); ?>" >
  <span class="text-danger"><?php echo form_error('user_name');?></span>
  </div>
  <div class="form-group">
  <label for="apellido" class="h4 pl-1 my_blue">Apellido</label>
  <input type="text" name="user_surname" class="form-control" required minlength="4" placeholder="Tu apellido" value="<?php echo set_value('user_surname'); ?>" >
  <span class="text-danger"><?php echo form_error('user_surname'); ?></span>
  </div>
  <div class="form-group">
  <label for="telefono" class="h4 pl-1 my_blue">Teléfono</label>
  <input type="text" name="user_telephone" class="form-control" minlength="10" maxlength="10" required placeholder="Ej: 3414141414" value="<?php echo set_value('user_telephone'); ?>">
  <span class="text-danger"><?php echo form_error('user_telephone'); ?></span>
  </div>
  <div class="form-group">
  <label for="email" class="h4 pl-1 my_blue">Email</label>
  <input type="email" name="user_email" class="form-control" required placeholder="ejemplo@ejemplo.com" value="<?php echo set_value('user_email'); ?>">
  <span class="text-danger"><?php echo form_error('user_email'); ?></span>
  </div>
  <div class="form-group">
  <label for="password" class="h4 pl-1 my_blue">Contraseña</label>
  <div class="input-group">  
  <input type="password" name="user_password" class="form-control mono" data-toggle="password" id="password" required minlength="10" maxlength="64" value="<?php echo set_value('user_password'); ?>" placeholder="Mín. 10 dígitos alfanuméricos">
  <div class="input-group-append">
      <div class="input-group-text"><i class="fa fa-eye"></i>
    </div>
    </div>
  
  </div>
  <span class="text-danger"><?php echo form_error('user_password'); ?></span>
  </div>
  <div class="row pt-3">
  <div class="col-md-12 col-lg-8 mx-auto">
  <button type="submit" name="register" class="btn btn-outline-dark btn-lg btn-block mytextbold"><i class="fas fa-user-plus"></i> Registrarme</button>
  </div>
  </div>
</form>
</div>
</div>
<div class="row">
<div class="col mx-auto pt-4">
<h4 class="text-center">¿Ya tenés usuario? <a href="<?php echo base_url()?>auth">Ingresá acá</a></h5>
</div>
</div>
</div>