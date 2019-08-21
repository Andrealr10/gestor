<?php

class SubcategoriaModel extends CI_Model
{

    function __construct()
    {
        $this->tabla = "subcategoria";
        $this->id = "id_subcategoria";
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
        echo "esta aqui";
        return $this->db->get_where($this->tabla, [$this->id => $id])->row();
    }

    public function update($data, $id)
    {
        $this->db->update($this->tabla, $data, [$this->id => $id]);
    }
}
