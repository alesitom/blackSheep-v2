<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
      
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct(){
    parent::__construct();
    if($this->session->userdata('user_id')){
    redirect('dashboard');
    }
    $this->load->library('form_validation');
    $this->load->library('encryption');
    //$this->load->library('encrypt');
    $this->load->model('Register_model');
}
    function index(){
    $param["titulo"] = "Registro de usuarios";
	  $param["contenido"] = $this->load->view("register",array(),true);
	  $this->load->view('layouts/layout.php',$param);

    //$this->load->view('register');
}
    public function validation(){
    $this->form_validation->set_rules('user_name', 'Name', 'required|trim|min_length[4]',array('min_length' => '<i class="fas fa-exclamation-triangle"></i> Pss! Cargá tu nombre completo'));
    $this->form_validation->set_rules('user_surname', 'Surname', 'required|trim|min_length[4]',array('min_length' => '<i class="fas fa-exclamation-triangle"></i> Pss! Cargá tu apellido completo'));
    $this->form_validation->set_rules('user_telephone', 'Telefono', 'required|trim|numeric|exact_length[10]',array('numeric' => '<i class="fas fa-exclamation-triangle"></i> Pss! Ingresá sólo números','exact_lenght'=>'<i class="fas fa-exclamation-triangle"></i> Pss! Ingresá tu número en formato de 10 dígitos'));
    $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]',array('is_unique' => '<i class="fas fa-exclamation-triangle"></i> Pss! El email ingresado ya existe en la base de datos, hacé <a href="'.base_url().'auth">click aquí</a> para loguearte.'));
    /*$this->form_validation->set_rules('user_password', 'Password', 'required');*/
    $this->form_validation->set_rules('user_password', 'Password', 'required|min_length[10]|max_length[64]',array('min_length' => '<i class="fas fa-exclamation-triangle"></i> Pss! El campo %s es debe tener al menos 10 dígitos','max_length' => '<i class="fas fa-exclamation-triangle"></i> Pss! El campo %s no debe superar los 64 dígitos'));
    if($this->form_validation->run())
    {
    $verification_key = md5(rand());
    /*$encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));*/
    $data = array(
	    'name'  => $this->input->post('user_name'),
	    'surname'  => $this->input->post('user_surname'),
	    'telephone' => $this->input->post('user_telephone'),
      'email'  => $this->input->post('user_email'),
      //'password' => $encrypted_password,
      'password' => $this->input->post('user_password'),
      'verification_key' => $verification_key);
    $id = $this->Register_model->insert($data);
    if($id > 0){
    $subject = "BLACK SHEEP -.- Verificacion de email";
    $message = "
    <p> Hola ".$this->input->post('user_name')."</p>
    <p>Este es un email para verificar que tu casilla de correo exista realmente. Para completar el proceso de registro, por favor hace <a href='".base_url()."register/verify_email/".$verification_key."'>click aqui</a>.</p>
    <p>De no funcionar, podes copiar esta URL y pegarla en tu navegador</p>
    <p>".base_url()."register/verify_email/".$verification_key."</p>
    <p>Gracias</p>";
    $config = array(
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_port' => 465,
      'smtp_user'  => 'blacksheep.utnproject@gmail.com', 
      'smtp_pass'  => 'FaA53N^L$&Er#MfdVs^TcC37nEGNNRZq', 
      'mailtype'  => 'html',
      'charset'    => 'utf-8',
      'wordwrap'   => TRUE);
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('blacksheep.utnproject@gmail.com');
    $this->email->to($this->input->post('user_email'));
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send()){
    $this->session->set_flashdata('message', '<i class="fas fa-check-circle"></i> Tu usuario se creó correctamente, ya podés <a href="'.base_url().'auth">ingresar en el sistema</a>. Recordá verificar tu casilla de email.');
    redirect('register');
    }
    }
    }else{
    $this->index();
    }
}
    function verify_email(){
    if($this->uri->segment(3)){
    $verification_key = $this->uri->segment(3);
    if($this->Register_model->verify_email($verification_key)){
    $data['message'] = 'Tu email fue verificado correctamente.
    <br>
    <br>
    Hace <a href="'.base_url().'auth">click aquí para loguearte</a>';
    }else{
    $data['message'] = 'Este link caducó o ya fue utilizado.
    <br>
    <br>
    Hace <a href="'.base_url().'auth">click aquí para loguearte</a>';
    }
    $this->load->view('email_verification', $data);
    }
    }
}
?>