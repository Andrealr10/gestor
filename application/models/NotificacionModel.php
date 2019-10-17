<?php

class NotificacionModel extends CI_Model
{

    function __construct()
    {
        $this->tabla = "solicitud";
        $this->id = "id_solicitud";
    }

    public function getAll()
    {
        // return $this->db->get($this->tabla)->result();
        $this->db->select('solicitud.*,usuario.username, tipo_solicitud.nombre as tipo');
        $this->db->join('usuario', 'usuario.id_usuario = solicitud.id_usuario');
        $this->db->join('tipo_solicitud', 'tipo_solicitud.id_tipo_solicitud = solicitud.id_tipo_solicitud');
        $this->db->where("solicitud.id_tipo_solicitud = '1'");
        $this->db->where('solicitud.estado', 1);
        return $this->db->get($this->tabla)->result();
    }

    public function insert($datos)
    {
        $this->db->insert($this->tabla, $datos);
    }

    public function getByTipo($tipo)
    {
        $this->db->select('solicitud.*,usuario.username, tipo_solicitud.nombre as tipo');
        $this->db->join('usuario', 'usuario.id_usuario = solicitud.id_usuario');
        $this->db->join('tipo_solicitud', 'tipo_solicitud.id_tipo_solicitud = solicitud.id_tipo_solicitud');
        $this->db->where('solicitud.id_tipo_solicitud', $tipo);
        $this->db->where('solicitud.estado', 1);
        return $this->db->get($this->tabla)->result();
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
