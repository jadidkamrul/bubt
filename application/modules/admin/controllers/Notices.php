<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Notices extends MX_Controller {

    public function __construct() {

        parent::__construct();


    $this->load->library('ion_auth');
     
      if(!$this->ion_auth->logged_in())
      {
        redirect('admin/auth/login');
      }
        $this->load->model('category_model', 'cat');
        $this->load->model('notice_model', 'notice');
    }

    public function index() {

        $this->load->view('common/backend_header');
        $this->load->view('notice/notice');
        $this->load->view('common/backend_footer');
    }

    public function notice_ajax_list() {
        $list = $this->notice->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $notice) {
            $no++;
            $row = array();
             $base= base_url();
            $image = '<img style="width:100px" src="' .$base. 'assets/frontend/images/' . $notice->image . '">';

            $row[] = '<input type="checkbox" class="data-check" value="' . $notice->notice_id . '">';
            $row[] = $image;
            $row[] = $notice->notice_title;
            $row[] = $notice->cat_title;
            $row[] = $notice->notice_date;

            $row[] = '<a class="btn btn-sm btn-info " href="javascript:void(0)" title="Hapus" onclick="view_details(' . "'" . $notice->notice_id . "'" . ')"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>' . '&nbsp;' .
                    '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_notice(' . "'" . $notice->notice_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_notice(' . "'" . $notice->notice_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->notice->count_all(),
            "recordsFiltered" => $this->notice->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function notice_ajax_edit($id) {
        $data = $this->notice->get_by_id($id);
        echo json_encode($data);
    }

    public function notice_ajax_add() {
        $this->_course_validate();
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
                'notice_title' => $this->input->post('notice_title'),
                'notice_desc' => $this->input->post('notice_desc'),
                'cat_id' => $this->input->post('cat_id'),
                'notice_date' => $this->input->post('notice_date'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'notice_title' => $this->input->post('notice_title'),
                'notice_desc' => $this->input->post('notice_desc'),
                'cat_id' => $this->input->post('cat_id'),
                'notice_date' => $this->input->post('notice_date'),
            );
        }


        $insert = $this->notice->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function notice_ajax_update() {


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
                'notice_title' => $this->input->post('notice_title'),
                'notice_desc' => $this->input->post('notice_desc'),
                'cat_id' => $this->input->post('cat_id'),
                'notice_date' => $this->input->post('notice_date'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'notice_title' => $this->input->post('notice_title'),
                'notice_desc' => $this->input->post('notice_desc'),
                'cat_id' => $this->input->post('cat_id'),
                'notice_date' => $this->input->post('notice_date'),
            );
        }

        $this->notice->update(array('notice_id' => $this->input->post('notice_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function notice_ajax_delete($id) {
        $this->notice->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function notice_bulk_delete() {
        $list_id = $this->input->post('notice_id');
        foreach ($list_id as $id) {
            $this->course->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _course_validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('notice_title') == '') {
            $data['inputerror'][] = 'notice_title';
            $data['error_string'][] = 'NOtice Title is required';
            $data['status'] = FALSE;
        }





        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    function ajax_category_show() {
        $where = array(
            'type' => 'notice',
        );
        $data = $this->notice->get_data('categories', '', $where);
        foreach ($data as $row) {
            echo '<option value="' . $row['category_id'] . '">' . $row['cat_title'] . '</option>';
        }
    }

}
