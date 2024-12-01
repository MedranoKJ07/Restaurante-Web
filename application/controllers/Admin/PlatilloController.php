<?php

defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class   PlatilloController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/PlatillosModel');
        $this->load->model('Admin/CategoriaPLatillosModel');
        $this->load->library('session');  // libreria para guarda la session del usuario
    }
    public function index()
    {
    }
    // <--------------------------Cargar Vistas-------------------------->
    public function platillos()
    {
        $data['platillos'] = $this->PlatillosModel->cargarPlatillos();
        $this->load->view("Admin/header/header");
        $this->load->view("Admin/header/menu");
        $this->load->view("Admin/Opciones/platillos", $data);
        $this->load->view("Admin/footer/footer");
    }
    // <--------------------------Cargar Vistas-------------------------->
    // <--------------------------Hacer Registros-------------------------->
    public function RegistrarPlatillos()
    {
        $this->form_validation->set_rules("Descripcion", "Descripcion", "required");
        $this->form_validation->set_rules("Categorias", "Categorias", "required");
        $this->form_validation->set_rules("Estado", "Estado", "required");
        $this->form_validation->set_rules("Valor", "numeroMesa", "required");

        if ($this->form_validation->run() == FALSE) {
            redirect("platillos");
        } else {
            $descripcion = $this->input->get_post("Descripcion");
            $Categorias = $this->input->get_post("Categorias");
            $estado = $this->input->get_post("Estado");
            $Valor = $this->input->get_post("Valor");

            if ($estado == "1") {
                $status = 1;
            } else {
                $status = 0;
            }

            $this->PlatillosModel->registrarPlatillos($descripcion, $Categorias, $status, $Valor);
            redirect("platillos");
        }
    }
    // <--------------------------Hacer Registros-------------------------->
}
