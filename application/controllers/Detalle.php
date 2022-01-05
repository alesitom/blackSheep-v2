<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalle extends CI_Controller {

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
	public function index($id)
	{   
    $this->load->model("productosModel");
	$resultados = $this->productosModel->getById($id);
	$parametros["titulo"] = "Detalle de producto";
	$parametros["contenido"] = $this->load->view("detalle",array("producto"=>$resultados[0]),true);
	$this->load->view('layouts/layout.php',$parametros);
	}
}
