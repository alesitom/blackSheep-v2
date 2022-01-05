<div class="container">
<div class="row pt-5 pb-5">
  <div class="col-md-12 col-lg-6 mx-auto pt-3 pb-2">
  <h1 class="text-center">Login de usuarios</h1>
  <form action="<?php echo base_url('index.php/auth/post_login') ?>" method="post" accept-charset="utf-8">
    <div class="form-group">
    <label for="email" class="h4 pl-1 my_blue">Email</label>
    <input type="email" class="form-control" name="email" id="email" required placeholder="ejemplo@ejemplo.com">
    <div class="error_form pt-1"><?php echo form_error('email'); ?></div>
    </div>
    <div class="form-group">
    <label for="clave" class="h4 pl-1 my_blue">Password</label>
    <div class="input-group mono">
    <input type="password" class="form-control" data-toggle="password" required minlength="10" maxlength="64" name="password" id="password">
    <div class="input-group-append">
      <div class="input-group-text"><i class="fa fa-eye"></i>
    </div>
    </div>
    </div>
    <div class="error_form pt-1"><?php echo form_error('password'); ?></div>
    </div>
    <div class=" mx-auto pt-3">
    <button type="submit" class="btn btn-outline-dark btn-lg btn-block mytextbold"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
    </form>
  </div>
  <div class="row">
  <div class="col mx-auto pt-5">
  <div class="mx-auto">
  <h4 class="text-center">Si todavía no tenes usuario <a href="<?php echo base_url()?>register">registrate acá</a></h5></div>
  </div>
  </div>
</div>
</div>
</div>