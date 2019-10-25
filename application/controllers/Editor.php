<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Editor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('profiles_model');
        $this->load->helper('form');
        $this->load->helper('text');
        $this->load->library('image_lib');

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
      $slug = strtolower(convert_accented_characters($post['surname']));
      $slug = $this->profiles_model->slugUnique($slug);

      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 100;
      $config['max_width']            = 1500;
      $config['max_height']           = 1500;
      $config['file_name']            = $slug;

      $this->load->library('upload', $config);

      $image = '/uploads/' . $slug . '.png';

      if ( ! $this->upload->do_upload('avatar'))
      {
              $this->profiles_model->editProfile($post, $slug);
              $this->load->view('add_success');
      }
      else
      {
              $image_data =   $this->upload->data();

              $configer =  array(
                'image_library'   => 'gd2',
                'source_image'    =>  $image_data['full_path'],
                'maintain_ratio'  =>  TRUE,
                'width'           =>  350,
                'height'          =>  500,
              );
              $this->image_lib->clear();
              $this->image_lib->initialize($configer);
              $this->image_lib->resize();
              $this->profiles_model->editProfile($post, $slug, $image);
              $this->load->view('add_success');
      }
    }

    public function edit_user($slug = NULL)
    {
      $post = $this->input->post();

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1500;
            $config['max_height']           = 1500;
            $config['file_name']            = $slug;

            $this->load->library('upload', $config);

            $image = '/uploads/' . $slug . '.png';

            if ( ! $this->upload->do_upload('avatar'))
            {
                    $this->profiles_model->editProfile($post, $slug);
                    $this->load->view('edit_success');
            }
            else
            {
                    $image_data =   $this->upload->data();

                    $configer =  array(
                      'image_library'   => 'gd2',
                      'source_image'    =>  $image_data['full_path'],
                      'maintain_ratio'  =>  TRUE,
                      'width'           =>  350,
                      'height'          =>  500,
                    );
                    $this->image_lib->clear();
                    $this->image_lib->initialize($configer);
                    $this->image_lib->resize();
                    $this->profiles_model->editProfile($post, $slug, $image);
                    $this->load->view('edit_success');
            }
    }
  }
