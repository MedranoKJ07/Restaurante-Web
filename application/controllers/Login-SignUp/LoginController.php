<?php
defined('BASEPATH') or exit('No direct script access allowed');

#[\AllowDynamicProperties]
class LoginController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login-SignUp/LoginModel');
		$this->load->model('Login-SignUp/UsuarioModel');
		$this->load->model('LandingPageModel');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('Login-SignUp/login');
	}

	public function signUp()
	{
		$this->load->view('Login-SignUp/signUp');
	}
	// <--------------------------Hacer Registros-------------------------->
	public function Registrarse()
	{
		$this->form_validation->set_rules("ClienteName", "name", "required");
		$this->form_validation->set_rules("ClienteApellido", "lastName", "required");
		$this->form_validation->set_rules("ClienteEmail", "email", "required");
		$this->form_validation->set_rules("ClienteContraseña", "pass", "required");

		if ($this->form_validation->run() == FALSE) {
			redirect("?error=1");
		} else {
			$name = $this->input->get_post("ClienteName");
			$lastName = $this->input->get_post("ClienteApellido");
			$email = $this->input->get_post("ClienteEmail");
			$password = $this->input->get_post("ClienteContraseña");
			$user = $this->input->get_post("ClienteUser");
			$Rol = 4;
			$this->UsuarioModel->registrarUSuario($Rol, $name, $lastName, $user, $password, $email);
			redirect("signIn");
		}
	}
	public function loginIn()
	{
		$this->form_validation->set_rules("UserName", "Name", "required");
		$this->form_validation->set_rules("password", "pass", "required");

		if ($this->form_validation->run() == FALSE) {
			redirect("?error=1");
		} else {
			$name = $this->input->get_post("UserName");
			$password = md5($this->input->get_post("password"));
			$data["user"] = $this->LoginModel->login($name, $password);
		}
		if ($data["user"] == "0") {
			redirect("?error == 2");
		} else {
			$sessiondata = array(
				'id' => $data['user'][0]['Id_Usuario'],
				'rol' => $data['user'][0]['Id_Roles'],
				'User' => $data['user'][0]['Usuario'],
				'Password' => $data['user'][0]['Contraseña'],
				'Nombre' => $data['user'][0]['Nombres'],
				'Apellido' => $data['user'][0]['Apellidos'],
				'Correo' => $data['user'][0]['Correo'],
				'logged' => 1,
				'MesaConfirmacion' => null

			);
			$this->session->set_userdata($sessiondata);
			if ($this->session->userdata) {
				$rol = $this->session->userdata('rol');
				if ($rol == 4) {
					redirect("landingPage");
				} else {


					redirect("DashBoard"); //Admin Page
				}
			}
		}
	}
	// <--------------------------CERRAR SESSION-------------------------->

	public function logout()
	{
		$this->session->sess_destroy();
		$sessiondata = array(
			'logged' => 0
		);
		redirect("landingPage");
	}
	// <--------------------------CERRAR SESSION-------------------------->


}
