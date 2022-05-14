<?php 
class tipoconsulta extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model('tipoconsulta_model');
	}
	public function index()
	{
		$data = array('tipo_consulta' => $this->tipoconsulta_model->gettipoconsulta(), ); 
		$this->load->view("template/header");
		$this->load->view("template/footer");
        $this->load->view("tipoconsulta/listar",$data);

	}
}