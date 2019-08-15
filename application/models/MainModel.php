<?php

/**
 * Clase principal para generar las consultas de los modelos
 */
class MainModel extends CI_Model
{

    /**
     * Metodo para devolver todos los registros de la tabla indicada
     */
    public function getAll($tabla)
    {
        return $this->db->get($tabla)->result();
    }

    /**
     * Metodo para insertar un registro en la tabla
     */
    public function insert($tabla, $datos)
    {
        $campos = $valores = "";
        $data = [];
        foreach ($datos as $campo => $valor) {
            $campos = $campos . "$campo,";
            $valores = $valores . "?,";
            array_push($data, $valor);
        }
        $query = "INSERT INTO $tabla(" . substr($campos, 0, -1) . ") VALUES(" . substr($valores, 0, -1) . ")";

        $this->db->query($query, $data);
    }

    /**
     * Metodo para eliminar un registro de la tabla especificada
     */
    public function delete($tabla, $id)
    {
        $query = "DELETE FROM $tabla WHERE id_$tabla = ?";
        $this->db->query($query, $id);
    }

    /**
     * Metodo para obtener un registro de una tabla
     */
    public function findById($tabla, $id)
    {
        $query = "SELECT * FROM $tabla WHERE id_$tabla = ?";
        return $this->db->query($query, $id)->row();
    }


    /**
     * Metodo para actualizar un registro de la tabla
     */
    public function update($tabla, $datos)
    {
        $valores = "";
        $data = [];
        $id = "";
        foreach ($datos as $campo => $valor) {
            if (!($campo == "id_" . $tabla)) {
                $valores = $valores . "$campo = ?,";
                array_push($data, $valor);
            } else {
                $id = $valor;
            }
        }
        array_push($data, $id);
        $query = "UPDATE $tabla SET " . substr($valores, 0, -1) . " WHERE id_$tabla  = ?";
        $this->db->query($query, $data);
    }
}
