<?php

defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class   CategoriaMesaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/CategoriaMesasModel');
        $this->load->library('session');  // libreria para guarda la session del usuario
    }

    // <--------------------------Cargar Vistas-------------------------->
    public function categoria()
    {
        $data['categorias'] = $this->CategoriaMesasModel->cargarCategoria();
        $this->load->view("Admin/header/header");
        $this->load->view("Admin/header/menu");
        $this->load->view("Admin/Opciones/Categoria", $data);
        $this->load->view("Admin/footer/footer");
    }
    // <--------------------------Cargar Vistas-------------------------->
    // <--------------------------Hacer Registros-------------------------->
    public function RegistrarCategoria()
    {
        $this->form_validation->set_rules("Descripcion", "Descripcion", "required");
        $this->form_validation->set_rules("Estado", "Estaddo", "required");
        $this->form_validation->set_rules("Valor", "Valor", "required");
        if ($this->form_validation->run() == FALSE) {
            redirect("categoria");
        } else {
            $descripcion = $this->input->get_post("Descripcion");
            $estado = $this->input->get_post("Estado");
            $valor = $this->input->get_post("Valor");
            if ($estado == "1") {
                $status = 1;
            } else {
                $status = 0;
            }

            $this->CategoriaMesasModel->registrarCategoria($descripcion, $status,$valor);
            redirect("categoria");
        }
    }
    // <--------------------------Hacer Registros-------------------------->
}