<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Profiles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('profiles_model');
    }

    public function index() {
      $data['title'] = 'Все анкеты';
      $data['profiles'] = $this->profiles_model->getProfiles();

      $this->load->view('templates/header', $data);
      $this->load->view('profiles/index', $data);
      $this->load->view('templates/footer');
    }

    public function profile($slug = NULL) {
      $data['profile'] = $this->profiles_model->getProfile($slug);

      if(empty($data['profile'])) {
        show_404();
      }
      $data['name'] = $data['profile']['name'];
      $data['surname'] = $data['profile']['surname'];
      $data['email'] = $data['profile']['email'];
      $data['avatar'] = $data['profile']['avatar'];
      $data['birth'] = $data['profile']['birth'];
      $data['address'] = $data['profile']['address'];
      $data['phone'] = $data['profile']['phone'];
      $data['age'] = date('Y', time()) - explode('-', $data['birth'])[0];
      $data['title'] =  $data['name'] . ' ' . $data['surname'];

      $this->load->view('templates/header', $data);
      $this->load->view('profiles/profile', $data);
      $this->load->view('templates/footer');
    }

  }
