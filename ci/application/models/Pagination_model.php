<?php

class Pagination_model extends CI_Model {

    protected $table = 'produits';

    public function __construct() {
        parent::__construct();
    }

    public function get_counter() {
        return $this->db->count_all($this->table);
    }

    public function get_prod($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }
}