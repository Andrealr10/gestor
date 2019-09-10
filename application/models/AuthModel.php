<?php

class AuthModel extends CI_Model
{

    function __construct()
    {
        $this->tabla = "auth";
        $this->id = "id_auth";
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

    public function getByHash($hash)
    {
        return $this->db->get_where($this->tabla, ['hash' => $hash])->row();
    }

    public function getByCode($code)
    {
        return $this->db->get_where($this->tabla, ['code' => $code])->row();
    }

    public function getByUsuario($id_usuario)
    {
        return $this->db->get_where($this->tabla, ['id_usuario' => $id_usuario,'state' => 1])->row();
    }

}
