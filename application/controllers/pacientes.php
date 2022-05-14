<?php
class pacientes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('paciente_model');
		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data = array('query' => $this->paciente_model->getpacientenino(),);
		$data['hospital'] = $this->paciente_model->gethospital();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("paciente/listarN", $data);
	}

	public function list_J()
	{
		$data2 = array('query2' => $this->paciente_model->getpacientejoven(),);
		$data2['hospital'] = $this->paciente_model->gethospital();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("paciente/listarJ", $data2);
	}

	public function list_A()
	{
		$data3 = array('query3' => $this->paciente_model->getpacienteanciano(),);
		$data3['hospital'] = $this->paciente_model->gethospital();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("paciente/listarA", $data3);
	}

	public function list_riesgo()
	{
		$data4 = array('query4' => $this->paciente_model->getpacienteriesgo(),);
		$data4['hospital'] = $this->paciente_model->gethospital();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("paciente/listarriesgo", $data4);
	}

	public function list_fum()
	{
		$data5 = array('query5' => $this->paciente_model->getpacientefum(),);
		$data5['hospital'] = $this->paciente_model->gethospital();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("paciente/listarfum", $data5);
	}

	public function addnino()
	{
		$data['hospital'] = $this->paciente_model->gethospital();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("paciente/crearN", $data); //ir al formulario
	}

	public function storenino()
	{
		//FUNCION PARA GUARDAR PACIENTE --> NIÑO
		$id_hospital = $this->input->post("id_hospital");
		$nombre = $this->input->post("nombre");
		$edad = $this->input->post("edad");
		$num_historiaclinica = $this->input->post("num_historiaclinica");
		$relacion_pesoestatura = $this->input->post("relacion_pesoestatura");
		$prioridad = $this->input->post("prioridad");
		$riesgo = $this->input->post("riesgo");

		$this->form_validation->set_rules("nombre", "nombre", "trim|required");
		$this->form_validation->set_rules("edad", "edad", "trim|required|numeric|less_than_equal_to[15]|greater_than_equal_to[1]");
		$this->form_validation->set_rules("relacion_pesoestatura", "relacion peso estatura", "trim|required|numeric|less_than_equal_to[4]|greater_than_equal_to[1]");
		$this->form_validation->set_rules("prioridad", "Prioridad", "required|numeric");
		$this->form_validation->set_rules("riesgo", "Riesgo", "required|numeric");

		if ($this->form_validation->run()) {
			$data = array(
				'id_hospital' => $id_hospital,
				'nombre' => $nombre,
				'edad' => $edad,
				'num_historiaclinica' => $num_historiaclinica,
				'relacion_pesoestatura' => $relacion_pesoestatura,
				'prioridad' => $prioridad,
				'riesgo' => $riesgo
			);

			if ($this->paciente_model->guardar($data)) {
				//guarda con exito y manda a la tabla con la lista de los hospitales
				redirect(base_url() . "pacientes");
			} else {
				//error al guardar
				redirect(base_url() . "paciente/crearN");
			}
		} else {
			$this->addnino();
		}
	}
	///////////////////////////////////////////////////////////////////////////////////////////
	public function addjoven()
	{
		$data['hospital'] = $this->paciente_model->gethospital();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("paciente/crearJ", $data);
	}

	public function storejoven()
	{
		//FUNCION PARA GUARDAR PACIENTE --> JOVEN
		$id_hospital = $this->input->post("id_hospital");
		$nombre = $this->input->post("nombre");
		$edad = $this->input->post("edad");
		$num_historiaclinica = $this->input->post("num_historiaclinica");
		$fumador = $this->input->post("fumador");
		$años_fumador = $this->input->post("años_fumador");
		$prioridad = $this->input->post("prioridad");
		$riesgo = $this->input->post("riesgo");

		$this->form_validation->set_rules("nombre", "nombre", "trim|required");
		$this->form_validation->set_rules("edad", "edad", "trim|required|numeric|less_than_equal_to[40]|greater_than_equal_to[6]");
		$this->form_validation->set_rules("años_fumador", "Años fumador", "required|numeric|greater_than_equal_to[0]");
		$this->form_validation->set_rules("prioridad", "Prioridad", "required|numeric");
		if ($this->form_validation->run()) {
			$data = array(
				'id_hospital' => $id_hospital,
				'nombre' => $nombre,
				'edad' => $edad,
				'num_historiaclinica' => $num_historiaclinica,
				'fumador' => $fumador,
				'años_fumador' => $años_fumador,
				'prioridad' => $prioridad,
				'riesgo' => $riesgo
			);

			if ($this->paciente_model->guardar($data)) {
				//guarda con exito y manda a la tabla con la lista de los hospitales
				redirect(base_url() . "pacientes/list_J");
			} else {
				//error al guardar
				redirect(base_url() . "paciente/crearJ");
			}
		} else {
			$this->addjoven();
		}
	}
	////////////////////////////////////////////////////////////////////////////////////
	public function addanciano()
	{
		$data['hospital'] = $this->paciente_model->gethospital();
		$this->load->view("template/header");
		$this->load->view("template/footer");
		$this->load->view("paciente/crearA", $data);
	}

	public function storeanciano()
	{
		//FUNCION GUARDAR PACIENTE --> ANCIANO
		$id_hospital = $this->input->post("id_hospital");
		$nombre = $this->input->post("nombre");
		$edad = $this->input->post("edad");
		$num_historiaclinica = $this->input->post("num_historiaclinica");
		$tiene_dieta = $this->input->post("tiene_dieta");
		$prioridad = $this->input->post("prioridad");
		$riesgo = $this->input->post("riesgo");

		$this->form_validation->set_rules("nombre", "nombre", "trim|required");
		$this->form_validation->set_rules("edad", "edad", "trim|required|numeric|less_than_equal_to[99]|greater_than_equal_to[41]");
		$this->form_validation->set_rules("prioridad", "Prioridad", "required|numeric");
		$this->form_validation->set_rules("riesgo", "Riesgo", "required|numeric");
		if ($this->form_validation->run()) {
			$data = array(
				'id_hospital' => $id_hospital,
				'nombre' => $nombre,
				'edad' => $edad,
				'num_historiaclinica' => $num_historiaclinica,
				'tiene_dieta' => $tiene_dieta,
				'prioridad' => $prioridad,
				'riesgo' => $riesgo
			);

			if ($this->paciente_model->guardar($data)) {
				//guarda con exito y manda a la tabla con la lista de los pacientes ancianos
				redirect(base_url() . "pacientes/list_A");
			} else {
				//error al guardar
				redirect(base_url() . "paciente/crearA");
			}
		} else {
			$this->addanciano();
		}
	}
}