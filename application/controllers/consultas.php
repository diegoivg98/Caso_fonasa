<?php
class consultas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('consulta_model');
		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data = array('query' => $this->consulta_model->getconsulta(),);
		$data['hospital'] = $this->consulta_model->gethospital();
		$data['tipo_consulta'] = $this->consulta_model->gettipoconsulta();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("consulta/listarC", $data);
	}

	public function addC()
	{
		$data['hospital'] = $this->consulta_model->gethospital();
		$data['tipo_consulta'] = $this->consulta_model->gettipoconsulta();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("consulta/crearC", $data);
	}

	public function storecons()
	{
		$id_hospital = $this->input->post("id_hospital");
		$cant_pacientes = $this->input->post("cant_pacientes");
		$nom_especialista = $this->input->post("nom_especialista");
		$id_tipoconsulta = $this->input->post("id_tipoconsulta");
		$estado = $this->input->post("estado");


		$this->form_validation->set_rules("id_hospital", "id_hospital", "required");
		$this->form_validation->set_rules("cant_pacientes", "cantidad pacientes", "required|numeric");
		$this->form_validation->set_rules("nom_especialista", "Especialista", "required|trim");

		if ($this->form_validation->run()) {
			$data = array(
				'id_hospital' => $id_hospital,
				'cant_pacientes' => $cant_pacientes,
				'nom_especialista' => $nom_especialista,
				'id_consulta' => $id_tipoconsulta,
				'estado' => $estado
			);

			if ($this->consulta_model->guardar($data)) {
				//guarda con exito y manda a la tabla con la lista de los hospitales
				redirect(base_url() . "consultas");
			} else {
				//error al guardar
				redirect(base_url() . "consulta/crearC");
			}
		} else {
			$this->addC();
		}
	}
}