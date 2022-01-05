<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Auth extends CI_Controller {
    
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
    $this->load->model('usuariosModel');
    $this->load->library(array('form_validation','session','user_agent'));
    $this->load->helper(array('url','html','form'));
    $this->user_id = $this->session->userdata('user_id');
    }
    public function index(){
    $parametros["titulo"] = "Login de usuarios";
	$parametros["contenido"] = $this->load->view("login",array(),true);
	$this->load->view('layouts/layout.php',$parametros);
    }
    public function post_login(){
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[10]');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_message('required', 'Por favor, ingresá %s');
    $this->form_validation->set_message('valid_email', 'Por favor, validá el formato de tu %s');
    $this->form_validation->set_message('min_length','El %s ingresado es muy corto');
    if ($this->form_validation->run() === FALSE){  
    $parametros["titulo"] = "Login de usuarios";
	$parametros["contenido"] = $this->load->view("login",array(),true);
	$this->load->view('layouts/layout.php',$parametros);
    }else{   
    $data = array(
    'email' => $this->input->post('email'),
    'password' => $this->input->post('password'),);
    $check = $this->usuariosModel->auth_check($data);
    if($check != false){
        $user = array(
        'user_id' => $check->id,
        'email' => $check->email,
        'name' => $check->name,
        'surname' => $check->surname,
        'telephone' => $check->telephone,
        'is_email_verified' => $check->is_email_verified,
        'user_creation_date' => $check->user_creation_date,
        'browser' => $this->agent->browser(),
        'browser_version'=> $this->agent->version(),
        'os' => $this->agent->platform(),
        'ip_address' => $this->input->ip_address(),);
        $this->session->set_userdata($user);
        redirect( base_url('index.php/auth/dashboard') ); 
    }
        $parametros["titulo"] = "Login";
        $parametros["contenido"] = $this->load->view("login",array(),true);
        $parametros["mensaje"] ="Error";
		$this->load->view('layouts/account.php',$parametros);
           //$this->load->view("login");
    }   
    }
    public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('index.php/auth'));
    }    
    public function dashboard(){
    if(empty($this->user_id)){
    redirect(base_url('index.php/auth'));
    }      
    $parametros["titulo"] = "Mi Cuenta";
    $parametros["contenido"] = $this->load->view("dashboard",array(),true);
    $this->load->view('layouts/account.php',$parametros); 
    }
}