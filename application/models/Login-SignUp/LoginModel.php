<?php
#[\AllowDynamicProperties]
class LoginModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // <--------------------------Validaciones de Credenciales-------------------------->
    public function login($User, $password)
    {
        if ($User != False && $password != false) {
            $query = $this->db->query("SELECT * FROM usuarios WHERE usuario = '" . $User . "' AND contraseña = '" . $password . "'");

            if ($query->num_rows() == 1) {
                return $query->result_array();
            }
            return 0;
        }
    }
    // <--------------------------Validaciones De Credenciales-------------------------->


}
