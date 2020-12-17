<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends MX_Controller {

    public function __construct() {

        parent::__construct();

    $this->load->library('ion_auth');
     
      if(!$this->ion_auth->logged_in())
      {
        redirect('admin/auth/login');
      }

        $this->load->model('category_model', 'cat');
        $this->load->model('course_model', 'course');
    }

    public function index() {

        $this->load->view('common/backend_header');
        $this->load->view('courses/index');
        $this->load->view('common/backend_footer');
    }

    public function course_ajax_list() {
        $list = $this->course->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $course) {
            $no++;
            $row = array();
            $image = '<img style="width:100px" src="' . '../' . 'assets/frontend/images/' . $course->image . '">';
            $row[] = '<input type="checkbox" class="data-check" value="' . $course->course_id . '">';
            $row[] = $image;
            $row[] = $course->course_title;
            $row[] = $course->cat_title;
            $row[] = $course->start_date;

            $row[] =  '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_course(' . "'" . $course->course_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_course(' . "'" . $course->course_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->course->count_all(),
            "recordsFiltered" => $this->course->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function course_ajax_edit($id) {
        $data = $this->course->get_by_id($id);
        echo json_encode($data);
    }

    public function course_ajax_add() {
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
                'course_title' => $this->input->post('course_title'),
                'start_date' => $this->input->post('start_date'),
                'cat_id' => $this->input->post('cat_id'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'course_title' => $this->input->post('course_title'),
                'start_date' => $this->input->post('start_date'),
                'cat_id' => $this->input->post('cat_id'),
            );
        }

        $insert = $this->course->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function course_ajax_update() {

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
                'course_title' => $this->input->post('course_title'),
                'start_date' => $this->input->post('start_date'),
                'cat_id' => $this->input->post('cat_id'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'course_title' => $this->input->post('course_title'),
                'start_date' => $this->input->post('start_date'),
                'cat_id' => $this->input->post('cat_id'),
            );
        }


        $this->course->update(array('course_id' => $this->input->post('course_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function course_ajax_delete($id) {
        $this->course->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function course_bulk_delete() {
        $list_id = $this->input->post('course_id');
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

        if ($this->input->post('course_title') == '') {
            $data['inputerror'][] = 'course_title';
            $data['error_string'][] = 'Course Title is required';
            $data['status'] = FALSE;
        }





        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    function ajax_category_show() {
        $where = array(
            'type' => 'course',
        );
        $data = $this->course->get_data('categories', '', $where);
        foreach ($data as $row) {
            echo '<option value="' . $row['category_id'] . '">' . $row['cat_title'] . '</option>';
        }
    }

}
