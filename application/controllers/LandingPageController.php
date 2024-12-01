<?php
defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class LandingPageController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login-SignUp/LoginModel');
        $this->load->model('LandingPageModel');
        $this->load->library('session');
    }
    public function index()
    {
    }
    public function landingPage()
    {
        $data['mesas'] = $this->LandingPageModel->cargarMesa();
        $this->load->view("landingPage", $data);
    }
}
