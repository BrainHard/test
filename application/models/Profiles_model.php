<?php

  class Profiles_model extends CI_model {

    public function __construct() {
      $this->load->database();
      $this->load->helper('text');
    }

    public function getProfiles($limit, $start) {
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('profiles', $limit, $start);
      return $query->result_array();
    }

    public function getProfile($slug = NULL) {
      $query = $this->db->get_where('profiles', array('slug' => $slug));
      return $query->row_array();
    }

    public function addProfile($data, $image = '/uploads/undefined.png') {
      $slug = strtolower(convert_accented_characters($data['surname']));

      $slug = $this->slugUnique($slug);

      $fields = array(
                  'name' => $data['name'],
                  'surname' => $data['surname'],
                  'email' => $data['email'],
                  'birth' => $data['birth'],
                  'address' => $data['address'],
                  'phone' => $data['phone'],
                  'slug' => $slug,
                  'avatar' => $image
      );
      $this->db->insert('profiles', $fields);
    }

    public function editProfile($data, $slug, $image = '/uploads/undefined.png') {
      $fields = array(
                  'name' => $data['name'],
                  'surname' => $data['surname'],
                  'email' => $data['email'],
                  'birth' => $data['birth'],
                  'address' => $data['address'],
                  'phone' => $data['phone'],
                  'slug' => $slug,
                  'avatar' => $image
      );
      $this->db->replace('profiles', $fields);
    }

    public function slugUnique($slug) {
      static $i;
      $i++;
      $new_slug = $slug . $i;
      if($this->db->get_where('profiles', array('slug' => $new_slug))->row_array() != NULL) {
        $new_slug = $this->slugUnique($slug);
      }
      return $new_slug;
    }

  }
