<?php

  class Search_model extends CI_model {

    public function __construct() {
      $this->load->database();
      $this->load->helper('text');
    }

    public function searchResults ($needle) {
      $query = $this->db->get_where('profiles', array('slug' => $slug));
    }

  }
