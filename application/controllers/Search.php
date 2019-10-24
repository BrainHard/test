<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('profiles_model');
        $this->load->helper('form');
        $this->load->helper('text');

    }

    public function searching ($needle) {
      
    }

  }
