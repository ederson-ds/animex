<?php

class PersonaModel extends CI_Model
{

    public $name;
    public $age;
    public $series_id;
    public $gender;
    public $species;
    public $rarity;
    public $origin_series_id;
    const GENDER_MALE = 1, GENDER_FEMALE = 2;
    const SPECIES_HUMAN = 1, SPECIES_MONSTER = 2, SPECIES_FAUN = 3;
    const RARITY_VERY_RARE = 0, RARITY_EPIC = 1, RARITY_LEGENDARY = 2, RARITY_COMMON = 3,
        RARITY_RARE = 4,
        RARITY_EMPYREAN = 5,
        RARITY_TRUE_DIVINITY = 6,
        RARITY_VOID_TIER = 7,
        RARITY_GOD = 8;
    public static $genderType = [
        self::GENDER_MALE => 'Male',
        self::GENDER_FEMALE => 'Female',
    ];
    public static $speciesType = [
        self::SPECIES_HUMAN => 'Human',
        self::SPECIES_MONSTER => 'Monster',
        self::SPECIES_FAUN => 'Faun',
    ];
    public static $rarityType = [
        self::RARITY_VERY_RARE => 'Very Rare',
        self::RARITY_EPIC => 'Epic',
        self::RARITY_LEGENDARY => 'Legendary',
        self::RARITY_COMMON => 'Common',
        self::RARITY_RARE => 'Rare',
        self::RARITY_EMPYREAN => 'Empyrean',
        self::RARITY_TRUE_DIVINITY => 'True Divinity',
        self::RARITY_VOID_TIER => 'Void Tier',
        self::RARITY_GOD => 'God',
    ];
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($id)
    {
        $id = str_replace('_', ' ', strtolower($id));
        if (!$id) {
            return $this->createEmptyObject();
        }
        $query = $this->db->query("SELECT * FROM persona WHERE persona.name = '$id'");
        return $query->row();
    }

    public function get_all($pesquisar = null)
    {
        if ($pesquisar) {
            $this->db->select('*');
            $this->db->from('persona');
            $this->db->like("name", $pesquisar);
            $query = $this->db->get();
        } else {
            $query = $this->db->get('persona');
        }

        return $query->result();
    }

    public function get_by_serie($series_id)
    {
        $this->db->select('*');
        $this->db->from('persona');
        $this->db->where('series_id', $series_id);
        $query = $this->db->get();

        return $query->result();
    }

    public function insert($id)
    {
        $this->name = $this->input->post('name');
        $this->age = $this->input->post('age');
        $this->series_id = $this->input->post('series_id');
        $this->gender = $this->input->post('gender');
        $this->species = $this->input->post('species');
        $this->rarity = $this->input->post('rarity');

        $this->load->model('SerieModel');
        $series = $this->serieModel->get($this->input->post('origin_series_id'));
        $this->origin_series_id = $series->id;

        if ($id) {
            $this->update($id);
            $this->upload($id);
            return;
        }
        $this->db->insert('persona', $this);
        $this->upload($this->db->insert_id());
    }

    public function upload($filename)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $config['file_name']            = $filename;
        $config['overwrite']            = TRUE;

        $this->load->library('upload', $config);

        $this->upload->do_upload('image');
    }

    public function update($id)
    {
        $this->db->update('persona', $this, array('id' => $id));
    }

    public function delete($id)
    {
        $this->db->delete('persona', array('id' => $id));
    }

    public static function getRarity($rarity)
    {
        if ($rarity == self::RARITY_VERY_RARE) {
            return 'very-rare';
        } else if ($rarity == self::RARITY_EPIC) {
            return 'epic';
        } else if ($rarity == self::RARITY_LEGENDARY) {
            return 'legendary';
        } else if ($rarity == self::RARITY_COMMON) {
            return 'common';
        } else if ($rarity == self::RARITY_RARE) {
            return 'rare';
        } else if ($rarity == self::RARITY_EMPYREAN) {
            return 'empyrean';
        } else if ($rarity == self::RARITY_TRUE_DIVINITY) {
            return 'true-divinity';
        } else if ($rarity == self::RARITY_VOID_TIER) {
            return 'void-tier';
        } else if ($rarity == self::RARITY_GOD) {
            return 'god';
        }
        return '';
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
