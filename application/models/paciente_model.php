<?php
class paciente_model extends CI_Model
{
  public function getpacientenino()
  {
    //consulta inner join entre hospital y niño
    $this->db->select('h.*,p.*');
    $this->db->from('hospital as h');
    $this->db->join('paciente as p', 'p.id_hospital=h.id_hospital');
    $this->db->where('p.edad <= 15'); //condicion edad "niño"(1-15)
    $query = $this->db->get();
    return $query->result();
  }

  public function getpacientejoven()
  {
    //consulta inner join entre hospital y paciente sea joven
    $this->db->select('h.*,p.*');
    $this->db->from('hospital as h');
    $this->db->join('paciente as p', 'p.id_hospital=h.id_hospital');
    $this->db->where('p.edad >= 16 and p.edad <=40'); //condicion edad "joven"(16-40)
    $query2 = $this->db->get();
    return $query2->result();
  }

  public function getpacienteanciano()
  {
    //consulta inner join entre hospital y paciente sea anciano
    $this->db->select('h.*,p.*');
    $this->db->from('hospital as h');
    $this->db->join('paciente as p', 'p.id_hospital=h.id_hospital');
    $this->db->where('p.edad >= 41'); //condicion edad "anciano"(41-100)
    $query3 = $this->db->get();
    return $query3->result();
  }

  public function getpacienteriesgo()
  {
    //consulta inner join entre hospital y paciente mayor riesgo
    $this->db->select('h.*,p.*');
    $this->db->from('hospital as h');
    $this->db->join('paciente as p', 'p.id_hospital = h.id_hospital');
    $this->db->order_by('p.riesgo', 'DESC');
    $query4 = $this->db->get();
    return $query4->result();
  }

  public function getpacientefum()
  {
    //consulta inner join entre hospital y paciente sea fumador
    $this->db->select('h.*,p.*');
    $this->db->from('hospital as h');
    $this->db->join('paciente as p', 'p.id_hospital = h.id_hospital');
    $this->db->where('p.fumador', 1);
    $query5 = $this->db->get();
    return $query5->result();
  }

  public function gethospital()
  {
    //obtener datos de hospital
    $res = $this->db->get("hospital");
    return $res->result();
  }

  public function guardar($data)
  {
    return $this->db->insert('paciente', $data); //INSERT INTO hospital
  }
}