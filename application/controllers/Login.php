<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $data['error'] = null;
        if ($this->form_validation->run()) {
            //valida login database
            $this->load->model('sign_model');
            $rows = $this->sign_model->validateLogin();
            if ($rows->count == 0) {
                $data['error'] = "User don't exist";
            } else {
                $this->session->name = $this->input->post('name');
                redirect('persona');
            }
        }
        $data["username"] = $this->session->name;

        $this->load->view('navbar', $data);
        $this->load->view("login/login", $data);
    }

    public function signUp()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('repeat-password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run()) {
            $this->load->model('sign_model');
            //cadastra usuário
            $this->sign_model->signUp();
            redirect('persona');
        }

        $this->load->library('session');
        $data["username"] = $this->session->name;

        $this->load->view('navbar', $data);
        $this->load->view("login/signup");
    }
}
