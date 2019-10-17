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
        $sql = "SELECT *, (select AVG(valoracion) from valoracion WHERE valoracion.id_archivo = archivo.id_archivo) as valoracion
        FROM archivo
        JOIN usuario on(usuario.id_usuario = archivo.id_usuario)
        WHERE archivo.id_subcategoria = ? AND archivo.estado_archivo = 1";
        return $this->db->query($sql, [$id])->result();
    }
    public function getPendientes($id)
    {
        if (isset($this->session->login) && $this->session->login->tipo_usuario == 1) {
            $sql = "SELECT *, (select AVG(valoracion) from valoracion WHERE valoracion.id_archivo = archivo.id_archivo) as valoracion
            FROM archivo
            JOIN usuario on(usuario.id_usuario = archivo.id_usuario)
            WHERE archivo.id_subcategoria = ? AND archivo.estado_archivo = 0";
            return $this->db->query($sql, [$id])->result();
        } else {
            $sql = "SELECT *, (select AVG(valoracion) from valoracion WHERE valoracion.id_archivo = archivo.id_archivo) as valoracion
            FROM archivo
            JOIN usuario on(usuario.id_usuario = archivo.id_usuario)
            WHERE archivo.id_subcategoria = ? AND archivo.estado_archivo = 0 and archivo.id_usuario = ".$this->session->login->id_usuario;
            return $this->db->query($sql, [$id])->result();
        }
    }
    public function getCancelados($id)
    {
        if (isset($this->session->login) && $this->session->login->tipo_usuario == 1) {
            $sql = "SELECT *, (select AVG(valoracion) from valoracion WHERE valoracion.id_archivo = archivo.id_archivo) as valoracion
            FROM archivo
            JOIN usuario on(usuario.id_usuario = archivo.id_usuario)
            WHERE archivo.id_subcategoria = ? AND archivo.estado_archivo = 2";
            return $this->db->query($sql, [$id])->result();
        } else {
            $sql = "SELECT *, (select AVG(valoracion) from valoracion WHERE valoracion.id_archivo = archivo.id_archivo) as valoracion
            FROM archivo
            JOIN usuario on(usuario.id_usuario = archivo.id_usuario)
            WHERE archivo.id_subcategoria = ? AND archivo.estado_archivo = 2 and archivo.id_usuario = ".$this->session->login->id_usuario;
            return $this->db->query($sql, [$id])->result();
        }
    }

    public function getByUsuario($subcategoria, $usuario)
    {
        $sql = "SELECT *, (select AVG(valoracion) from valoracion WHERE valoracion.id_archivo = archivo.id_archivo) as valoracion
        FROM archivo
        JOIN usuario on(usuario.id_usuario = archivo.id_usuario)
        WHERE archivo.id_subcategoria = ? and archivo.id_usuario = ?";
        return $this->db->query($sql, [$subcategoria, $usuario])->result();
    }

    public function countBySubcategoria($subcategoria)
    {
        $this->db->from('archivo');
        $this->db->where('id_subcategoria', $subcategoria);
        $this->db->where('estado_archivo', 1);
        return $this->db->count_all_results();
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
