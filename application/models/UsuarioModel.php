<?php
class UsuarioModel extends MainModel
{

    function __construct()
    {
        $this->tabla = "usuario";
    }

    public function getAll()
    {
        return $this->getAll($this->tabla);
    }

    public function insert($datos)
    {
        $this->insert($this->tabla, $datos);
    }

    public function delete($id)
    {
        $this->delete($this->tabla, $id);
    }

    public function getById($id)
    {
        return $this->findById($this->tabla, $id);
    }

    public function update($data)
    {
        $this->update($this->tabla, $data);
    }
}
