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

    public function getByCategoria($id)
    {
        $sql = "SELECT id_subcategoria, nombre, imagen, id_categoria,
        (SELECT COUNT(archivo.id_archivo) 
        from archivo WHERE archivo.id_subcategoria = subcategoria.id_subcategoria AND archivo.estado = 1) as cantidad 
        from subcategoria where id_categoria = ?";
        return $this->db->query($sql, $id)->result();
    }
    public function insert($datos)
    {
        $this->db->insert($this->tabla, $datos);
    }

    public function delete($id)
    {
        $this->db->delete($this->tabla, [$this->id => $id]);
    }

    public function getByName($name)
    {
        return $this->db->get_where($this->tabla, ['nombre' => $name])->row();
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
