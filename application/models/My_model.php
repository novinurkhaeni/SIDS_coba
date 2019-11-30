<?php
defined('BASEPATH') or exit('No direct script access allowed');
class My_model extends CI_Model
{

    public function masuk($data)
    {
        $query = $this->db->get_where('user', $data);
        return $query;
    }

    public function masuk_admin($data)
    {
        $query = $this->db->get_where('admin', $data);
        return $query;
    }
}
