<?php

class UsuarioModel extends CI_Model
{

    function __construct()
    {
        $this->tabla = "usuario";
        $this->id = "id_usuario";
    }
    // obtener todos los datos de usuario desde base de datos
    public function getAll()
    {
        return $this->db->get($this->tabla)->result();
    }
    //ingresar usuario
    public function insert($datos)
    {
        $this->db->insert($this->tabla, $datos);
    }
    //eliminar usuario
    public function delete($id)
    {
        $this->db->delete($this->tabla, [$this->id => $id]);
    }
    // obtener un usuario especifico por medio de id
    public function getById($id)
    {
        return $this->db->get_where($this->tabla, [$this->id => $id])->row();
    }
    //actualizar usuario
    public function update($data, $id)
    {
        $this->db->update($this->tabla, $data, [$this->id => $id]);
    }
}
