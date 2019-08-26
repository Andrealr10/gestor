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
        $this->db->select('*');
        $this->db->join('tipo_archivo', 'archivo.id_tipo_archivo = tipo_archivo.id_tipo_archivo');
        $this->db->join('usuario', 'usuario.id_usuario = archivo.id_usuario');
        $this->db->where('archivo.id_subcategoria', $id);
        // $this->db->where('archivo.estado', 1);
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
