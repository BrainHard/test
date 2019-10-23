<?php

  class News_model extends CI_model {

    public function __construct() {
      $this->load->database();
    }

    public function getNews($slug = FALSE) {
      if($slug === FALSE) {
        $query = $this->db->get('news');
        return $query->result_array();
      }

      $query = $this->db->get_where('news', array('slug' => $slug));
      return $query->row_array();
    }

  }
