<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Editor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('profiles_model');
        $this->load->helper('form');
        $this->load->helper('text');

    }

    public function add() {
      $data['title'] = 'Add page';
      $data['error'] = '';

      $this->load->view('templates/header', $data);
      $this->load->view('add', $data);
      $this->load->view('templates/footer');
    }

    public function edit($slug = NULL) {
      $data['title'] = 'Edit page';
      $data['error'] = '';
      $data['profile'] = $this->profiles_model->getProfile($slug);
      $data['slug'] = $slug;
      if(empty($data['profile'])) {
        show_404();
      }

      $this->load->view('templates/header', $data);
      $this->load->view('edit', $data);
      $this->load->view('templates/footer');
    }

    public function add_user()
    {
      $post = $this->input->post();
      $this->profiles_model->addProfile($post);

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1500;
            $config['max_height']           = 1500;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('avatar'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('add', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    $this->load->view('add_success', $data);
            }
    }

    public function edit_user($slug = NULL)
    {
      $post = $this->input->post();
      $this->profiles_model->editProfile($post, $slug);

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1500;
            $config['max_height']           = 1500;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('avatar'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('edit', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    $this->load->view('edit_success', $data);
            }
    }
  }
