<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persona extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->load->model('serieModel');
        $data['personas'] = $this->personaModel->get_all();
        $data['series'] = $this->serieModel->get_all();
        $this->load->view('persona/persona', $data);
    }

    public function create($id = null)
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->load->model('serieModel');
        $data['persona'] = $this->personaModel->get($id);
        $data['series'] = $this->serieModel->get_all();

        if ($this->input->post()) {
            $this->personaModel->insert($id);
            redirect('persona', 'refresh');
        }

        $this->load->view('persona/personaadd', $data);
    }
}
