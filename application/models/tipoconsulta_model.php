<?php  
class tipoconsulta_model extends CI_Model
{
	public function gettipoconsulta()
	{
	    $this->db->order_by('id_tipoconsulta', 'ASC');
		$resultado = $this->db->get("tipo_consulta");//SELECT * FROM tipo consulta ORDER BY id_tipoconsulta ASC
		if($resultado->num_rows() > 0){
			return $resultado->result();
		}else{
			return false;
		}
		
	}
}