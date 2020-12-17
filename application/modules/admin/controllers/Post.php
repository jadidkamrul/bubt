<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MX_Controller {

    public function __construct() {

        parent::__construct();


    $this->load->library('ion_auth');
     
      if(!$this->ion_auth->logged_in())
      {
        redirect('admin/auth/login');
      }
        $this->load->model('post_model');
    }

    public function index() {

        $this->load->view('common/backend_header');
        $this->load->view('blog/post');
        $this->load->view('common/backend_footer');
    }

    public function ajax_list() {
        $list = $this->post_model->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $person) {
            $no++;
            $row = array();
            $image = '<img style="width:100px" src="' . '../' . 'assets/frontend/images/' . $person->image . '">';
            $row[] = '<input type="checkbox" class="data-check" value="' . $person->id . '">';
            $row[] = $person->id;
            $row[] = $image;
            $row[] = $person->post_title;
            $row[] = $person->post_content;

            $row[] = $person->post_date;
            $row[] = $person->post_status;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-info" href="javascript:void(0)" title="Hapus" onclick="view_details(' . "'" . $person->id . "'" . ')"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>' . '&nbsp;' .
                    '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person(' . "'" . $person->id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_post(' . "'" . $person->id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->post_model->count_all(),
            "recordsFiltered" => $this->post_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id) {
        $data = $this->post_model->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add() {
        $date = date("Y-m-d H:i:s");
        $this->_validate();
        $userfilename = $_FILES['userfile']['name'];
        if (!empty($userfilename)) {

            $file_name = preg_replace('/\s+/', '_', $_FILES['userfile']['name']);

            $path = './assets/frontend/images/' . $file_name;
            if (!file_exists($path)) {



                $config = array(
                    'upload_path' => "./assets/frontend/images/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'file_name' => $file_name,
                );
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $file_data = $this->upload->data();
            }
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post_content' => $this->input->post('post_content'),
                'image' => $file_name,
                'post_date' => $date,
                'post_status' => $this->input->post('post_status'),
            );
        } else {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post_content' => $this->input->post('post_content'),
                'post_date' => $date,
                'post_status' => $this->input->post('post_status'),
            );
        }

        $insert = $this->post_model->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update() {

        $this->_validate();
        $userfilename = $_FILES['userfile']['name'];
        if (!empty($userfilename)) {

            $file_name = preg_replace('/\s+/', '_', $_FILES['userfile']['name']);

            $path = './assets/frontend/images/' . $file_name;
            if (!file_exists($path)) {



                $config = array(
                    'upload_path' => "./assets/frontend/images/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'file_name' => $file_name,
                );
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $file_data = $this->upload->data();
            }
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post_content' => $this->input->post('post_content'),
                'post_status' => $this->input->post('post_status'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post_content' => $this->input->post('post_content'),
                'post_status' => $this->input->post('post_status'),
            );
        }
     
        $this->post_model->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id) {
        $this->post_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_bulk_delete() {
        $list_id = $this->input->post('id');
        foreach ($list_id as $id) {
            $this->post_model->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('post_title') == '') {
            $data['inputerror'][] = 'post_title';
            $data['error_string'][] = 'Post Title is required';
            $data['status'] = FALSE;
        }

        if ($this->input->post('post_content') == '') {
            $data['inputerror'][] = 'post_content';
            $data['error_string'][] = 'LPost content is required';
            $data['status'] = FALSE;
        }



        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

}
