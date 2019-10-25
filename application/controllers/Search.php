<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('search_model');
        $this->load->helper('form');

    }

    public function searching () {
      $data['profiles'] = $this->search_model->searchResults($this->input->post()['search']);
      $data['title'] = 'Результаты поиска';


      $this->load->view('templates/header', $data);
      $this->load->view('search', $data);
      $this->load->view('templates/footer');
    }

  }
