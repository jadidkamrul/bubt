<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_information extends CI_Model {

    public function user_login($user_name, $password) {
        $this->db->where('user_name', $user_name);
        $this->db->where('password', $password);
        $query = $this->db->get('users_info');
        return $query->result();
    }
}
