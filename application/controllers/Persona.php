<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persona extends CI_Controller
{

    public function index($data = null)
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->load->model('serieModel');
        $searchText = $data["searchText"];
        if ($searchText) {
            if ($data["type"] == 'serie') {
                $data['series'] = $this->serieModel->get_all_limit($searchText);
            } else if ($data["type"] == 'character') {
                $data['personas'] = $this->personaModel->get_all($searchText);
                $data['series'] = $this->serieModel->get_serie_by_personas($data['personas']);
            }
        } else {
            $data['personas'] = $this->personaModel->get_all();
            $data['series'] = $this->serieModel->get_all_limit();
        }
        $data['num_series'] = $this->serieModel->get_num_series();

        $this->load->library('session');
        $data["username"] = $this->session->name;



        $this->load->view('navbar', $data);
        $this->load->view('persona/persona', $data);
        $this->load->view('persona/footer', $data);
    }

    public function page($n_page)
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->load->model('serieModel');

        $data['num_series'] = $this->serieModel->get_num_series();
        $data['series'] = $this->serieModel->get_all_limit(null, $n_page);

        $this->load->library('session');
        $data["username"] = $this->session->name;

        $this->load->view('navbar', $data);
        $this->load->view('persona/persona', $data);
        $this->load->view('persona/footer', $data);
    }

    public function create($id = null, $origin_series = null)
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->load->model('serieModel');
        $data['id'] = $id;
        $data['persona'] = $this->personaModel->get($id, $origin_series);
        $data['series'] = $this->serieModel->get_all();
        $data['gender'] = PersonaModel::$genderType;
        $data['species'] = PersonaModel::$speciesType;
        $data['rarities'] = PersonaModel::$rarityType;

        if ($this->input->post()) {
            $this->personaModel->insert($id);
            redirect('persona', 'refresh');
        }

        $this->load->library('session');
        $data["username"] = $this->session->name;

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

    public function wiki($id, $origin_series)
    {
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->load->model('serieModel');
        $data['persona'] = $this->personaModel->get($id, $origin_series);
        $data['origin_series_name'] = $this->serieModel->get($data['persona']->origin_series_id)->name;

        $this->load->library('session');
        $data["username"] = $this->session->name;

        $this->load->view('navbar', $data);
        $this->load->view('persona/wiki', $data);
    }

    public function edit($id, $origin_series)
    {
        $data['description'] = true;
        $this->load->helper('url');
        $this->load->model('personaModel');
        $this->load->model('serieModel');
        $data['persona'] = $this->personaModel->get($id, $origin_series);
        $data['origin_series_name'] = $this->serieModel->get($data['persona']->origin_series_id)->name;

        if ($this->input->post()) {
            $this->load->helper('url');
            $this->personaModel->insert_description($data['persona']->id);
            redirect(base_url() . 'persona/wiki/' . str_replace(' ', '_', $data['persona']->personaname) . '/' . str_replace("'", '-', str_replace(' ', '_', $data['origin_series_name'])), 'refresh');
        }
        $this->load->library('session');
        $data["username"] = $this->session->name;

        $this->load->view('navbar', $data);
        $this->load->view('persona/wiki', $data);
    }

    public function search()
    {
        $data["type"] = $this->input->get("type");
        $data["searchText"] = $this->input->get("searchText");
        $this->index($data);
    }
}
