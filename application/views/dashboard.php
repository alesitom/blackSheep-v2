<section class="pb-5">
<div class="container pb-5">
    <div class="row">
    <div class="col mx-auto pt-4">
    <h1 class="my_blue">Hola <?= $this->session->userdata('name')?> <?=$this->session->userdata('surname')?></h1>
    </div>
    </div>
</div>
<div class="container pt-4 pb-5">
    <div class="row pb-5">
    <div class="col-6 mx-auto">
    <h3 class="my_blue"><i class="fas fa-user-shield"></i> Tus datos registrados son:</h3>
    <ul class="my_dark_gray">
    <li>Nombre: <span class="mono"><?= $this->session->userdata('name')?><span></li>
    <li>Apellido: <span class="mono"><?= $this->session->userdata('surname')?><span></li>
    <li>Email registrado: <span class="mono"><?= $this->session->userdata('email')?><span></li>
    <li>Teléfono registrado: <span class="mono"><?= $this->session->userdata('telephone')?><span></li>
    <li>Sos miembro desde: <span class="mono"><?= $this->session->userdata('user_creation_date')?><span></li>
    <li>Email verificado: <span class="mono"><?= $this->session->userdata('is_email_verified')?><span></li>   
    </ul>
    </div>
    <div class="col-6 mx-auto">
    <h3 class="my_blue"><i class="fas fa-shield-alt"></i> Estás iniciando sesión desde:</h3>
    <ul class="my_dark_gray">
    <li>Direccion IP: <span class="mono"> <?= $this->session->userdata('ip_address')?> <span></li>
    <li>Sistema Operativo: <span class="mono"><?= $this->session->userdata('os')?><span></li>
    <li>Navegador: <span class="mono"><?= $this->session->userdata('browser')?><span></li>
    <li>Versión del navegador: <span class="mono"><?= $this->session->userdata('browser_version')?><span></li>
    </ul>
    </div>
    </div>
</div>
</section>