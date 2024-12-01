<?php
defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class ReservationController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login-SignUp/LoginModel');
        $this->load->model('Admin/CategoriaMesasModel');
        $this->load->model('Client/ReservationModel');
        $this->load->model('LandingPageModel');
        $this->load->library('session');
    }
    public function index()
    {
    }

    // <--------------------------Cargando datos para Usar-------------------------->

    public function cargarMesaSelecciona($Id_Mesa)
    { //

        $data['mesa'] = $this->ReservationModel->cargarMesaSelecciona($Id_Mesa);
        $sessiondata = array(
            'id' => $this->session->userdata('id'),
            'rol' => $this->session->userdata('rol'),
            'User' => $this->session->userdata('User'),
            'Password' => $this->session->userdata('Password'),
            'Nombre' => $this->session->userdata('Nombre'),
            'Apellido' => $this->session->userdata('Apellido'),
            'Correo' => $this->session->userdata('Correo'),
            'logged' => 1,
            'MesaConfirmacion' => $Id_Mesa
        );
        $this->session->set_userdata($sessiondata);

        $this->load->view("Client/Reservaciones", $data);
    }
    public function Pagar($V)
    {
        $data['VPago'] = $V;
        $this->load->view("Client/Pagar", $data);
    }
    public function ConfirmacionReservacion()
    {
       
        $MesaConfirmacion = $this->session->userdata('MesaConfirmacion');

        $Comentarios = $this->input->get_post("Comentario");
        $Id = $this->session->userdata('id');
        $fecha = date('Y-m-d H:i:s');
        $fechaReservada = $this->input->get_post("Fecha");
        $Id_Cliente = $this->ReservationModel->DevolverIdCliente($Id);
        $Nombre_Cliente = $this->session->userdata('Nombre');
        $Total = $this->ReservationModel->DevolverValorMesa($MesaConfirmacion);

        $this->ReservationModel->RegistrarReservación($Comentarios, $Id_Cliente, $Nombre_Cliente,$Total,$fecha,$fechaReservada,$MesaConfirmacion);
        $this->ReservationModel->ModicarEstadoMesa($MesaConfirmacion);
         
        
       
       redirect("PageConfirmar");
        
    }

    public function PageConfirmar(){
        $MesaConfirmacion = $this->session->userdata('MesaConfirmacion');
        $data['mesa'] = $this->ReservationModel->cargarMesaSelecciona($MesaConfirmacion);
        $this->load->view("Client/PageConfirmar", $data);
    }

    // <--------------------------Cargando datos para Usar-------------------------->


    public function ValidarPago()
    {
        $this->form_validation->set_rules("Tarjeta", "Tarjeta", "required");
        $this->form_validation->set_rules("Fecha", "Fecha", "required");
        $this->form_validation->set_rules("CVC", "CVC", "required");
        $this->form_validation->set_rules("nameCard", "nameCard", "required");

        if ($this->form_validation->run() == FALSE) {
            redirect("Pagar/0");
        } else {
            $Tarjeta = $this->input->post("Tarjeta");
            $Tarjeta = str_replace('-', '', $Tarjeta);
            $valida = $this->verificarTarjeta($Tarjeta);

            $fecha = $this->input->post("Fecha");
            $validaF = $this->esFechaExpiracionValida($fecha);

            $CVC = $this->input->post("CVC");
            $CVCV = $this->esCVCCorrecto($CVC);

            if ((!$valida) && ($validaF) && ($CVCV)) {
                redirect("Pagar/2");
            } else {
                redirect("Pagar/1");
            }
        }
    }
    /*
    Ejemplo : 4556-1611-4567-8908
                11/21   
                647
                KJ
    */
    function esFechaExpiracionValida($fecha)
    {
        return (bool) preg_match('/^(0[1-9]|1[0-2])\/\d{2}$/', $fecha);
    }
    function esCVCCorrecto($cvc)
    {
        return (bool) preg_match('/^\d{3,4}$/', $cvc);
    }

    function verificarTarjeta($tarjeta)
    {
        $total = 0;
        $multiplicar = false;

        // Mientras haya dígitos en la tarjeta
        while ($tarjeta > 0) {
            // Obtener el último dígito
            $digit = $tarjeta % 10;
            // Descartar el último dígito
            $tarjeta = (int)($tarjeta / 10);

            // Multiplicar números intercalados
            if ($multiplicar) {
                $digit *= 2;
                // Si el resultado es mayor que nueve, restar nueve
                if ($digit > 9) {
                    $digit -= 9;
                }
            }
            $multiplicar = !$multiplicar;
            // Sumar el dígito al total
            $total += $digit;
        }

        // Si el total es divisible por 10, la tarjeta es válida
        return ($total % 10 == 0);
    }
}
