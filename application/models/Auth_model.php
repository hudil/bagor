<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    
    protected $table = 'users';
    protected $where = 'username';

	public function get_user($username)
    {
        return $this->db->get_where($this->table, [$this->where => $username])->row_array();
    }

}
