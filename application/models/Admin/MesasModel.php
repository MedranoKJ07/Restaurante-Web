<?php
#[\AllowDynamicProperties]
class   MesasModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // <--------------------------Hacer Registros-------------------------->
    public function registrarMesa($Descripcion, $Categorias, $Estado, $Numero, $Capacidad, $Valor)
    {
        $data = array(
            'Descripcion' => $Descripcion,
            'Id_Categorias_mesa' => $Categorias,
            'Estado' => $Estado,
            'Numero' => $Numero,
            'Capacidad' => $Capacidad,
            'Valor_Agregado' => $Valor

        );
        $this->db->insert('mesas', $data);
    }
    // <--------------------------Hacer Registros-------------------------->
    // <--------------------------Retornar Registros para utilizar-------------------------->
    public function cargarMesas()
    {
        $query = $this->db->query("SELECT * FROM mesas");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    public function DevolverValorCategoriaMesa($Id_Rol)
    {
        $query = $this->db->query("SELECT Valor_Agregado FROM categorias_mesa WHERE Id_Categoria = " . $Id_Rol);
        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->Valor_Agregado;
        }
        return 0;
    }
    // <--------------------------Retornar Registros para utilizar-------------------------->

    public function CargarUltimoNumeroMesa()
    {
        $query = $this->db->query("SELECT Numero FROM mesas ORDER BY Id_Mesa DESC LIMIT 1");
        if ($query->num_rows() > 0) {
            $result = $query->row_array(); // Obtiene una sola fila como array asociativo
            return $result['Numero']; // Retorna solo el valor del campo 'Numero'
        }
        return 0;
    }
    
}
