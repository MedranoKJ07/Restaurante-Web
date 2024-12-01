<?php
#[\AllowDynamicProperties]
class   ReservationModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // <--------------------------Cargar Datos-------------------------->
    public function cargarMesa()
    {
        $query = $this->db->query("SELECT * FROM mesas WHERE Estado = 1");

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function cargarMesaSelecciona($Id_Mesa)
    {
        $query = $this->db->query("SELECT * FROM mesas WHERE Id_Mesa =" . $Id_Mesa);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    // <--------------------------Cargar Datos-------------------------->

    public function RegistrarReservación($Comentarios, $Id_Cliente, $Nombre_Cliente, $Total, $fecha, $Fecha_Reservada, $Id_Mesa)
    {
        $data = array(
            'Comentarios' => $Comentarios,
            'Id_Cliente' => $Id_Cliente,
            'Nombre_Cliente' => $Nombre_Cliente,
            'Fecha_Creada' => $fecha,
            'Fecha_Reservada' => $Fecha_Reservada,
            'Total' => $Total
        );
        $this->db->insert('reservas', $data);
        $id = $this->db->insert_id();
        $this->ReservationModel->RegistrarReservación_mesas($Id_Mesa, $id);
    }

    public function RegistrarReservación_mesas($Id_Mesa, $Id_reserva)
    //Id_Mesero => Usuario Mesero luego se actualiza
    {
        $data = array(
            'Id_Mesero' => null,
            'Id_Mesa' => $Id_Mesa,
            'Id_reserva' => $Id_reserva
        );
        $this->db->insert('reservas_mesas', $data);
    }
    public function DevolverValorMesa($Id)
    {
        $query = $this->db->query("SELECT Valor_Agregado FROM mesas WHERE Id_Mesa = " . $Id);
        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->Valor_Agregado;
        }
        return 0;
    }
    public function DevolverIdCliente($Id)
    {
        $query = $this->db->query("SELECT Id_Cliente FROM clientes WHERE Id_Usuario = " . $Id);
        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->Id_Cliente;
        }
        return 0;
    }
    public function DevolverFechaReservada($Id)
    {
        $query = $this->db->query("SELECT Fecha_Reservada FROM reservas WHERE Id_Cliente = " . intval($Id));
        if ($query->num_rows() == 1) {
            $result = $query->row();
            $fechaReservada = $result->Fecha_Reservada;

            // Convertir la fecha a un timestamp
            $timestamp = strtotime($fechaReservada);

            // Arrays con los nombres de los días y meses
            $dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
            $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

            // Obtener el día de la semana, el día del mes, el mes y el año
            $diaSemana = $dias[date("w", $timestamp)];
            $dia = date("d", $timestamp);
            $mes = $meses[date("n", $timestamp) - 1];
            $año = date("Y", $timestamp);
            $hora = date("H", $timestamp);
            $minutos = date("i", $timestamp);

            // Formatear la fecha en texto
            $fechaFormateada = "$diaSemana, $dia de $mes de $año a las $hora:$minutos";

            return $fechaFormateada;
        }
        return "No se encontró una fecha reservada.";
    }
    public function ModicarEstadoMesa($Id){
       $this->db->query("UPDATE mesas SET Estado = 2 WHERE Id_Mesa = " . $Id);
    }
}
