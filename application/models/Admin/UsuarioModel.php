<?php
#[\AllowDynamicProperties]
class   UsuarioModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // <--------------------------Hacer Registros-------------------------->
    public function CrearUsuario($Rol, $nombres, $Apellido, $User, $password, $Correo, $Estado)
    {
        $data = array(
            'Id_Roles' => $Rol,
            'Usuario' => $User,
            'Contraseña' => md5($password), // encriptacion
            'Nombres' => $nombres,
            'Apellidos' => $Apellido,
            'Correo' => $Correo,
            'Estado' => $Estado,
        );
        $this->db->insert('usuarios', $data);
    }
    // <--------------------------Hacer Registros-------------------------->
    // <--------------------------Leer Registros Para Mostrar En Tablas-------------------------->
    public function cargarUsuario()
    {
        $query = $this->db->query("SELECT * FROM usuarios");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
    // <--------------------------Leer Registros Para Mostrar En Tablas-------------------------->
    // <--------------------------Retornar Registros para utilizar-------------------------->
    public function cargarRolesParaUsuario()
    {
        $query = $this->db->query("SELECT * FROM roles WHERE Id_Roles IN (1,2,3)");

        if ($query->num_rows() > 0) {

            return $query->result_array();
        }
        return 0;
    }
    public function DevolverRol($Id_Rol)
    {
        $query = $this->db->query("SELECT Descripcion FROM roles WHERE Id_Roles = " . $Id_Rol);
        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->Descripcion;
        }
        return 0;
    }
    // <--------------------------Retornar Registros para utilizar-------------------------->

}