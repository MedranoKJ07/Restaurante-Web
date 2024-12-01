<?php
#[\AllowDynamicProperties]
class   CategoriaMesasModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // <--------------------------Hacer Registros-------------------------->
    public function registrarCategoria($Descripcion, $Estado, $valor)
    {
        $data = array(
            'Descripción' => $Descripcion,
            'Estado' => $Estado,
            'Valor_Agregado' => $valor
        );
        $this->db->insert('categorias_mesa', $data);
    }
    // <--------------------------Hacer Registros-------------------------->
    // <--------------------------Leer Registros Para Mostrar En Tablas-------------------------->
    public function cargarCategoria()
    {
        $query = $this->db->query("SELECT * FROM categorias_mesa");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    // <--------------------------Leer Registros Para Mostrar En Tablas-------------------------->
    // <--------------------------Retornar Registros para utilizar-------------------------->
    public function cargarCategoriaParaMesa()
    {
        $query = $this->db->query("SELECT * FROM categorias_mesa WHERE Estado = 1");

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function DevolverCategoria($Categorias_mesa)
    {
        $query = $this->db->query("SELECT Descripción FROM categorias_mesa  WHERE Id_Categoria = " . $Categorias_mesa);
        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->Descripción;
        }
        return 0;
    }
    // <--------------------------Retornar Registros para utilizar-------------------------->
    // <--------------------------Retornar Registros para utilizar en Reservacion-------------------------->
    public function DevolverDescripcionCategoriaMesa($Id_Rol)
    {
        $query = $this->db->query("SELECT Descripción FROM categorias_mesa WHERE Id_Categoria = " . $Id_Rol);
        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->Descripción;
        }
        return 0;
    }
    // <--------------------------Retornar Registros para utilizar en Reservacion-------------------------->
}
