<?php

class SerieModel extends CI_Model
{

    public $name;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($id)
    {
        if (!$id) {
            return $this->createEmptyObject();
        }
        $query = $this->db->query("SELECT * FROM series WHERE id = $id");
        return $query->row();
    }

    public function get_all($pesquisar = null)
    {
        if ($pesquisar) {
            $this->db->select('*');
            $this->db->from('series');
            $this->db->like("name", $pesquisar);
            $query = $this->db->get();
        } else {
            $query = $this->db->get('series');
        }

        return $query->result();
    }

    public function insert($id)
    {
        $this->name = $this->input->post('name');
        if ($id) {
            $this->update($id);
            $this->upload($id);
            return;
        }
        $this->db->insert('series', $this);
        $this->upload($this->db->insert_id());
    }

    public function update($id)
    {
        $this->db->update('series', $this, array('id' => $id));
    }

    public function delete($id)
    {
        $this->db->delete('series', array('id' => $id));
    }

    public function upload($filename)
    {
        $config['upload_path']          = './uploads/series/';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $config['file_name']            = $filename;
        $config['overwrite']            = TRUE;

        $this->load->library('upload', $config);

        $this->upload->do_upload('image');
    }

    public function createEmptyObject()
    {
        $obj = new stdClass();
        foreach (array_keys(get_object_vars($this)) as $property) {
            $obj->$property = null;
        }
        $obj->id = null;
        return $obj;
    }
}
