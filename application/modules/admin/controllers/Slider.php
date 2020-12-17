<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends MX_Controller {

    public function __construct() {

        parent::__construct();


    $this->load->library('ion_auth');
     
      if(!$this->ion_auth->logged_in())
      {
        redirect('admin/auth/login');
      }
        $this->load->model('prime_model');
    }

    public function index() {
         $data['sliders']= $this->prime_model->get_data('slider','slide_id');
        $this->load->view('common/backend_header');
        $this->load->view('slider',$data);
        $this->load->view('common/backend_footer');
    }

    public function add_new() {
       
        $this->load->view('common/backend_header');
        $this->load->view('add-slider',$data);
        $this->load->view('common/backend_footer');
    }

    function add_slider() {

     
        //processing image
        $file_name = preg_replace('/\s+/', '_', $_FILES['file']['name']);



        $config = array(
            'upload_path' => "./assets/frontend/images/slider/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'file_name' => $file_name,
        );


        $this->load->library('upload', $config);
        $this->upload->do_upload('file');
        $file_data = $this->upload->data();
        $file_name = $file_data['file_name'];

        $img_data = array(
            'slider_image' => $file_name,
        );
        $this->prime_model->inserter('slider', $img_data);
          $data['sliders']= $this->prime_model->get_data('slider','slide_id');
        $this->load->view('slider_tbl',$data);
    }

}
