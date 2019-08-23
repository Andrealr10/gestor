<?php

class ArchivoModel extends CI_Model
{

    function __construct()
    {
        $this->tabla = "archivo";
        $this->id = "id_archivo";
    }

    public function getAll()
    {
        return $this->db->get($this->tabla)->result();
    }

    public function getBySubCategoria($id)
    {
        $this->db->where('id_subcategoria', $id);
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

    public function update($data, $id)
    {
        $this->db->update($this->tabla, $data, [$this->id => $id]);
    }
}
