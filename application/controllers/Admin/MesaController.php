<?php

defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class   MesaController extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/MesasModel');
        $this->load->model('Admin/CategoriaMesasModel');
        $this->load->library('session');  // libreria para guarda la session del usuario
    }
    public function index(){

    }
    // <--------------------------Cargar Vistas-------------------------->
    public function mesas()
    {
        $data['mesas'] = $this->MesasModel->cargarMesas();
        $this->load->view("Admin/header/header");
        $this->load->view("Admin/header/menu");
        $this->load->view("Admin/Opciones/mesas", $data);
        $this->load->view("Admin/footer/footer");
    }
    // <--------------------------Cargar Vistas-------------------------->
    // <--------------------------Hacer Registros-------------------------->
    public function RegistrarMesas()
    {
        $this->form_validation->set_rules("Descripcion", "Descripcion", "required");
        $this->form_validation->set_rules("Categorias", "Categorias", "required");
        $this->form_validation->set_rules("Estado", "Estado", "required");
        $this->form_validation->set_rules("numeroMesa", "numeroMesa", "required");
        $this->form_validation->set_rules("Capacidad_Personas", "Capacidad_Personas", "required");


        if ($this->form_validation->run() == FALSE) {
            redirect("mesas");
        } else {
            $descripcion = $this->input->get_post("Descripcion");
            $Categorias = $this->input->get_post("Categorias");
            $estado = $this->input->get_post("Estado");
            $numeroMesa = $this->input->get_post("numeroMesa");
            $Capacidad_Personas = $this->input->get_post("Capacidad_Personas");
            $valor = $this->MesasModel->DevolverValorCategoriaMesa($Categorias);
            if ($estado == "1") {
                $status = 1;
            } else {
                $status = 0;
            }

            $this->MesasModel->registrarMesa($descripcion, $Categorias, $status, $numeroMesa, $Capacidad_Personas,$valor);
            redirect("mesas");
        }
    }
    // <--------------------------Hacer Registros-------------------------->
}