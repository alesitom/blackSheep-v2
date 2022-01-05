<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	
	public function index(){       
	$parametros["titulo"] = "Black Sheep Home";
    $parametros["contenido"] = $this->load->view("home",array(),true);
    $this->load->view('layouts/layout.php',$parametros);
	}
}

//$this->load->model("productosModel");
        //$resultados = $this->productosModel->getAll();
        //var_dump($productos); exit;

        /*$this->load->view("home",array("productos"=>$resultados,"titulo"=>"CHome / Vhome"));*/
        //echo "hello world!";
		//$this->load->view('welcome_message');

		//$parametros["titulo"] = "Productos";
		//$parametros["contenido"] = $this->load->view("home",array("productos"=>$resultados),true);
		//$this->load->view('layouts/layout.php',$parametros);
