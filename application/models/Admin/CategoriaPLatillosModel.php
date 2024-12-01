<?php
#[\AllowDynamicProperties]
class   CategoriaPLatillosModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // <--------------------------Hacer Registros-------------------------->
    public function Registrarcategoria_platillos($Descripcion, $Estado)
    {
        $data = array(
            'Descripcion' => $Descripcion,
            'Estado' => $Estado,
        );
        $this->db->insert('categoria_platillos', $data);
    }
    // <--------------------------Hacer Registros-------------------------->
    // <--------------------------Leer Registros Para Mostrar En Tablas-------------------------->
    public function cargarcategoria_platillos()
    {
        $query = $this->db->query("SELECT * FROM categoria_platillos");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    // <--------------------------Leer Registros Para Mostrar En Tablas-------------------------->
    // <--------------------------Retornar Registros para utilizar-------------------------->
    public function cargarCategoriaParaPlatillo()
    {
        $query = $this->db->query("SELECT * FROM categoria_platillos WHERE Estado = 1");

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    // <--------------------------Retornar Registros para utilizar-------------------------->
}