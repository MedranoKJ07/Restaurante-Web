<?php

defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class   DashBoardController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/DashBoardModel');
        $this->load->library('session');  // libreria para guarda la session del usuario
    }


    public function index()
    {
    }
    // <--------------------------Cargar Vistas-------------------------->
    public function DashBoard()
    {
        $this->load->view("Admin/header/header");
        $this->load->view("Admin/header/menu");
        $this->load->view("Admin/Opciones/DashBoard");
        $this->load->view("Admin/footer/footer");
    }
    // <--------------------------Cargar Vistas-------------------------->

}