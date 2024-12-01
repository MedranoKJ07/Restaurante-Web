<?php
#[\AllowDynamicProperties]
class UsuarioModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // <--------------------------Hacer Registros-------------------------->
    public function registrarUSuario($Rol, $nombres, $Apellido, $User, $password, $Correo)
    {


        $data = array(
            'Id_Roles' => $Rol,
            'Usuario' => $User,
            'Contraseña' => md5($password), // encriptacion
            'Nombres' => $nombres,
            'Apellidos' => $Apellido,
            'Correo' => $Correo,
            'Estado' => true,
        );

        $this->db->insert('usuarios', $data);

        $id_User = $this->db->insert_id();
        $this->resgistrarCliente($nombres, $Apellido, $id_User, $Correo);
    }
    public function resgistrarCliente($nombres, $Apellido, $id_User, $Correo)
    {
        $data = array(
            'Nombres' => $nombres,
            'Apellidos' => $Apellido,
            'Correo_Electronico' => $Correo,
            'Id_usuario' => $id_User,
        );
        $this->db->insert('clientes', $data);
    }

    // <--------------------------Hacer Registros-------------------------->
}
