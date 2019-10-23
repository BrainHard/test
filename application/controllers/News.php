<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
    }

    public function index() {
      $data['title'] = 'Все новости';
      $data['news'] = $this->news_model->getNews();

      $this->load->view('templates/header', $data);
      $this->load->view('news/index', $data);
      $this->load->view('templates/footer');
    }

    public function view($slug = NULL) {
      $data['single'] = $this->news_model->getNews($slug);

      if(empty($data['single'])) {
        show_404();
      }

      $data['title'] = $data['single']['title'];
      $data['content'] = $data['single']['text'];

      $this->load->view('templates/header', $data);
      $this->load->view('news/view', $data);
      $this->load->view('templates/footer');
    }

  }
