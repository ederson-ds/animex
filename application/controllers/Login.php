<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('navbar');
        $this->load->view("login/login");
    }
}
