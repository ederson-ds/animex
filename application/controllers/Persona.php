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
        $this->load->view('navbar', $data);
        $this->load->view('persona/persona', $data);
    }

    public function create($id = null)
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->load->model('serieModel');
        $data['id'] = $id;
        $data['persona'] = $this->personaModel->get($id);
        $data['series'] = $this->serieModel->get_all();
        $data['gender'] = PersonaModel::$genderType;
        $data['species'] = PersonaModel::$speciesType;
        $data['rarities'] = PersonaModel::$rarityType;

        if ($this->input->post()) {
            $this->personaModel->insert($id);
            redirect('persona', 'refresh');
        }

        $this->load->view('navbar', $data);
        $this->load->view('persona/personaadd', $data);
    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->personaModel->delete($id);
        redirect('persona', 'refresh');
    }

    public function wiki($id)
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $data['persona'] = $this->personaModel->get($id);

        $this->load->view('navbar', $data);
        $this->load->view('persona/wiki', $data);
    }
}
