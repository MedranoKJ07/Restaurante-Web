<?php

defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class   UsuarioController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/UsuarioModel');
        $this->load->library('session');  // libreria para guarda la session del usuario
    }


    public function index()
    {
    }
    // <--------------------------Cargar Vistas-------------------------->
    public function usuario()
    {
        $data['usuarios'] = $this->UsuarioModel->cargarUsuario();
        $this->load->view("Admin/header/header");
        $this->load->view("Admin/header/menu");
        $this->load->view("Admin/Opciones/usuarios", $data);
        $this->load->view("Admin/footer/footer");
    }
    // <--------------------------Cargar Vistas-------------------------->
    // <--------------------------Hacer Registros-------------------------->
    public function RegistrarUSuario()
    {
        $this->form_validation->set_rules("Usuarios", "UserName", "required");
        $this->form_validation->set_rules("Nombres", "lastName", "required");
        $this->form_validation->set_rules("Apellidos", "email", "required");
        $this->form_validation->set_rules("Contraseña", "pass", "required");
        $this->form_validation->set_rules("Email", "email", "required");
        $this->form_validation->set_rules("Roles", "Roles", "required");
        $this->form_validation->set_rules("Estado", "Estado", "required");

        if ($this->form_validation->run() == FALSE) {
            redirect("usuario");
        } else {
            $User = $this->input->get_post("Usuarios");
            $nombres = $this->input->get_post("Nombres");
            $Apellido = $this->input->get_post("Apellidos");
            $password = $this->input->get_post("Contraseña");
            $email = $this->input->get_post("Email");
            $Rol = $this->input->get_post("Roles");
            $estado = $this->input->get_post("Estado");

            $this->UsuarioModel->CrearUsuario($Rol, $nombres, $Apellido, $User, $password, $email, $estado);
            redirect("usuarios");
        }
    }
    // <--------------------------Hacer Registros-------------------------->
}
