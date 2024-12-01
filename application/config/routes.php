<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'LandingPageController/landingPage'; //_____
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["landingPage"] = "LandingPageController/landingPage";

$route["signIn"] = "Login-SignUp/LoginController";
$route["signUp"] = "Login-SignUp/LoginController/signUp";
$route["login"] = "Login-SignUp/LoginController/loginIn";
$route["logout"] = "Login-SignUp/LoginController/logout";
$route["Registrarse"] = "Login-SignUp/LoginController/Registrarse";
//hacer los controladores de admin, recep, mesero

$route["categoria"] = "Admin/CategoriaMesaController/categoria";
$route["RegistrarCategoria"] = "Admin/CategoriaMesaController/RegistrarCategoria";

$route["categoria_platillos"] = "Admin/CategoriaPlatilloController/categoria_platillos";
$route["Registrarcategoria_platillos"] = "Admin/CategoriaPlatilloController/Registrarcategoria_platillos";

$route["mesas"] = "Admin/MesaController/mesas";
$route["RegistrarMesas"] = "Admin/MesaController/RegistrarMesas";

$route["platillos"] = "Admin/PlatilloController/platillos";
$route["RegistrarPlatillos"] = "Admin/PlatilloController/RegistrarPlatillos";

$route["usuarios"] = "Admin/UsuarioController/usuario";
$route["CrearUsuario"] = "Admin/UsuarioController/RegistrarUSuario";
$route["DashBoard"] = "Admin/DashBoardController/DashBoard";

$route["reservar/(:any)"] = "Client/ReservationController/cargarMesaSelecciona/$1"; 
//                          /tipo de datos/                                   /cantidad de parametros/
$route["Pagar/(:any)"] = "Client/ReservationController/Pagar/$1";
$route["Validar"] = "Client/ReservationController/ValidarPago";
$route["confirmacion"] = "Client/ReservationController/ConfirmacionReservacion";
$route["PageConfirmar"] = "Client/ReservationController/PageConfirmar";




