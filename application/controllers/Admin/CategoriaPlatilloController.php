<?php

defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class   CategoriaPlatilloController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/CategoriaPLatillosModel');
        $this->load->library('session');  // libreria para guarda la session del usuario
    }
    // <--------------------------Cargar Vistas-------------------------->
    public function categoria_platillos()
    {
        $data['categorias'] = $this->CategoriaPLatillosModel->cargarcategoria_platillos();
        $this->load->view("Admin/header/header");
        $this->load->view("Admin/header/menu");
        $this->load->view("Admin/Opciones/categoria_platillos", $data);
        $this->load->view("Admin/footer/footer");
    }
    // <--------------------------Cargar Vistas-------------------------->
    // <--------------------------Hacer Registros-------------------------->
    public function Registrarcategoria_platillos()
    {
        $this->form_validation->set_rules("Descripcion", "Descripcion", "required");
        $this->form_validation->set_rules("Estado", "Estaddo", "required");
        if ($this->form_validation->run() == FALSE) {
            redirect("categoria_platillos");
        } else {
            $descripcion = $this->input->get_post("Descripcion");
            $estado = $this->input->get_post("Estado");
            if ($estado == "1") {
                $status = 1;
            } else {
                $status = 0;
            }

            $this->CategoriaPLatillosModel->Registrarcategoria_platillos($descripcion, $status);
            redirect("categoria_platillos");
        }
    }
    // <--------------------------Hacer Registros-------------------------->
}
