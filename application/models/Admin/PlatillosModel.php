<?php
#[\AllowDynamicProperties]
class   PlatillosModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // <--------------------------Hacer Registros-------------------------->
    public function registrarPlatillos($Descripcion, $Categorias, $Estado, $Valor)
    {
        $data = array(
            'Id_CategoriaPlatillo' => $Categorias,
            'Descripción' => $Descripcion,
            'Valor' => $Valor,
            'Estado' => $Estado,
        );
        $this->db->insert('platillos', $data);
    }
    // <--------------------------Hacer Registros-------------------------->
    // <--------------------------Leer Registros Para Mostrar En Tablas-------------------------->
    public function cargarPlatillos()
    {
        $query = $this->db->query("SELECT * FROM platillos");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    // <--------------------------Leer Registros Para Mostrar En Tablas-------------------------->
    // <--------------------------Retornar Registros para utilizar-------------------------->
    public function DevolverCategoriaPlatillos($Categorias_Platillos)
    {
        $query = $this->db->query("SELECT Descripcion FROM categoria_platillos WHERE Id_CategoriaPlatillo = " . $Categorias_Platillos);
        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->Descripcion;
        }
        return 0;
    }
    // <--------------------------Retornar Registros para utilizar-------------------------->

}
