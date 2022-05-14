<?php
class consulta_model extends CI_Model
{
  public function guardar($data)
  {
    return $this->db->insert('consulta', $data); //INSERT INTO consulta
  }

  public function gethospital()
  {
    $res = $this->db->get("hospital");
    return $res->result();
  }

  public function gettipoconsulta()
  {
    $res2 = $this->db->get("tipo_consulta");
    return $res2->result();
  }

  public function getconsulta()
  {
    $this->db->select('h.*,c.*,t.*');
    $this->db->from('hospital as h');
    $this->db->join('consulta as c', 'c.id_hospital=h.id_hospital');
    $this->db->join('tipo_consulta as t', 't.id_tipoconsulta=c.id_tipoconsulta');
    $query = $this->db->get();
    return $query->result();
  }
}