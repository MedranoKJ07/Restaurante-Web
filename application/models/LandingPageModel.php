<?php
#[\AllowDynamicProperties]
class   LandingPageModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function cargarMesa()
    {
        $query = $this->db->query("SELECT * FROM mesas WHERE Estado = 1");

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }
}