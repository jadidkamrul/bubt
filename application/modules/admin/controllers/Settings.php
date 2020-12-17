<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller {

    public function __construct() {

    $this->load->library('ion_auth');
     
      if(!$this->ion_auth->logged_in())
      {
        redirect('admin/auth/login');
      }
        parent::__construct();
        $this->load->model('prime_model', 'prime');
    }

    function index() {

        $data['settings'] = $this->prime->get_data('settings');
        $data['widgets'] = $this->prime->get_data('widgets');
        $this->load->view('common/backend_header');
        $this->load->view('settings/index', $data);
        $this->load->view('common/backend_footer');
    }

    public function logoUpload() {
        $this->load->view('common/backend_header');
        $this->load->view('logo_upload');
        $this->load->view('common/backend_footer');
    }

    function update_logo() {



        $userfilename = $_FILES['userfile']['name'];
        if (!empty($userfilename)) {

            $file_name = preg_replace('/\s+/', '_', $_FILES['userfile']['name']);

            $path = './assets/images/' . $file_name;
            if (!file_exists($path)) {



                $config = array(
                    'upload_path' => "./assets/backend/img/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'file_name' => $file_name,
                );
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $file_data = $this->upload->data();
            }

            $imgdata = array(
                'logo' => $file_name,
            );
            $where = array(
                'settings_id' => 1,
            );

            $img_up_result = $this->prime->updater($where, 'settings', $imgdata);




            if ($img_up_result > 0) {
                $message = 'Logo  successfully updated';
            } else {
                $message = 'No updated data found';
            }
        }
        exit;
    }

    public function footer() {
        $this->load->view('common/backend_header');
        $this->load->view('footer_widget');
        $this->load->view('common/backend_footer');
    }

    public function social() {
        print_r($this->input->post());
        $where = array(
            'settings_id' => 1,
        );
        $this->prime->updater($where, 'settings', $this->input->post());
    }

    public function update() {

        $where = array(
            'settings_id' => 1,
        );
        $this->prime->updater($where, 'settings', $this->input->post());
        return true;
    }

    public function widget() {

        $id = $this->input->post('widget_id');
        $where = array(
            'widget_id' => $id,
        );
        $datas = array(
            'widget_title' => $this->input->post('widget_title')
        );
        $this->prime->updater($where, 'widgets', $datas);
        $this->prime->deleter('widget_id', $id, 'widget_meta');
        $datas = $this->input->post('data');
        $c = array_combine($datas['title'], $datas['url']);
        foreach ($c as $row => $v) {
            if ($row != '' && $v != '') {
                $data = array(
                    'link_title' => $row,
                    'url' => $v,
                    'widget_id' => $id,
                );

                $this->prime->inserter('widget_meta', $data);
            }
        }


        exit;
    }

    public function information() {
        $this->load->view('common/backend_header');
        $this->load->view('information');
        $this->load->view('common/backend_footer');
    }

}
