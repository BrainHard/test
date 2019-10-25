<?php

  class Search_model extends CI_model {

    public function __construct() {
      $this->load->database();
      $this->load->helper('text');
    }

    public function searchResults ($needle = NULL) {
      $this->db->where('name =', $needle);
      $this->db->or_where('surname =', $needle);
      $this->db->or_where('email =', $needle);
      $this->db->or_where('address =', $needle);
      $this->db->or_where('phone =', $needle);
      $this->db->or_where('slug =', $needle);
      $query = $this->db->get('profiles');
      return $query->result_array();
    }

  }
