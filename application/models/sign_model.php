<?php

class Sign_model extends CI_Model
{

    public $name;
    public $email;
    public $password;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function validateLogin()
    {
        $this->db->select('count(1) as count');
        $this->db->from('users');
        $this->db->where('name', $this->input->post('name'));
        $this->db->where('password', $this->input->post('password'));
        $query = $this->db->get();

        return $query->row();
    }

    public function signUp()
    {
        $this->name = $this->input->post('name');
        $this->email = $this->input->post('email');
        $this->password = $this->input->post('password');
        $this->db->insert('users', $this);

        $this->load->library('session');
        $this->session->name = $this->name;
    }
}
