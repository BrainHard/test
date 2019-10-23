<?php

  class Profiles_model extends CI_model {

    public function __construct() {
      $this->load->database();
    }

    public function getProfiles() {
      $query = $this->db->get('profiles');
      return $query->result_array();
    }

    public function getProfile($slug = NULL) {
      $query = $this->db->get_where('profiles', array('slug' => $slug));
      return $query->row_array();
    }

  }
