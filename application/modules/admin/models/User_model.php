<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_users()
    {
        return $this->db->order_by('user_date', 'DESC')->get('users')->result();
    }

    public function is_user_exist($id)
    {
        return ($this->db->where('id', $id)->get('users')->num_rows() > 0) ? TRUE : FALSE;
    }

    public function user_data($id)
    {
        return $this->db->where('id', $id)->get('users')->row();
    }

    public function set_status($id, $status)
    {
        return $this->db->where('id', $id)->update('users', array('status' => $status));
    }
}
?>