<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Serie extends CI_Controller
{

    public function create($id = null)
    {
        $this->load->helper('url');
        $this->load->model('serieModel');
        $data['serie'] = $this->serieModel->get($id);

        if ($this->input->post()) {
            $this->serieModel->insert($id);
            redirect('persona', 'refresh');
        }

        $this->load->view('navbar', $data);
        $this->load->view('serie/serieadd', $data);
    }

    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('serieModel');
        $this->serieModel->delete($id);
        redirect('persona', 'refresh');
    }
}
