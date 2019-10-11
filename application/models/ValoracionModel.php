<?php

class ValoracionModel extends CI_Model
{

    function __construct()
    {
        $this->tabla = "valoracion";
        $this->id = "id_valoracion";
    }

    public function getAll()
    {
        return $this->db->get($this->tabla)->result();
    }

    public function insert($datos)
    {
        $this->db->insert($this->tabla, $datos);
    }

    public function delete($id)
    {
        $this->db->delete($this->tabla, [$this->id => $id]);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->tabla, [$this->id => $id])->row();
    }

    public function getByUser($id, $arc)
    {
        $this->db->where('id_usuario', $id);
        $this->db->where('id_archivo', $arc);
        return $this->db->get($this->tabla)->row();
        // return $this->db->get_where($this->tabla, ['id_usuario' => $id,'id_archivo' => $arc])->row();
    }

    public function getByArchivo($id)
    {
        $this->db->select_sum('valoracion');
        $this->db->where('id_archivo', $id);
        return $this->db->get('valoracion');
        // return $this->db->get_where($this->tabla, [$this->id => $id])->row();
    }

    public function update($data, $id)
    {
        $this->db->update($this->tabla, $data, [$this->id => $id]);
    }
}
