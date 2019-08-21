<?php

class CategoriaModel extends CI_Model
{

    function __construct()
    {
        $this->tabla = "categoria";
        $this->id = "id_categoria";
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

    public function update($data, $id)
    {
        $this->db->update($this->tabla, $data, [$this->id => $id]);
    }
}
