<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MX_Controller {

    public function __construct() {

        parent::__construct();

    $this->load->library('ion_auth');
     
      if(!$this->ion_auth->logged_in())
      {
        redirect('admin/auth/login');
      }

        $this->load->model('category_model', 'cat');
        $this->load->model('event_model', 'event');
    }

    public function index() {

        $this->load->view('common/backend_header');
        $this->load->view('event/events');
        $this->load->view('common/backend_footer');
    }

    public function category() {

        $this->load->view('common/backend_header');
        $this->load->view('event/category');
        $this->load->view('common/backend_footer');
    }

    public function category_ajax_list() {
        $list = $this->cat->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $category) {
            $no++;
            $row = array();
            $row[] = '<input type="checkbox" class="data-check" value="' . $category->category_id . '">';
            $row[] = $category->cat_title;


            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_category(' . "'" . $category->category_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_category(' . "'" . $category->category_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->cat->count_all(),
            "recordsFiltered" => $this->cat->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function category_ajax_edit($id) {
        $data = $this->cat->get_by_id($id);
        echo json_encode($data);
    }

    public function category_ajax_add() {

        $this->_cat_validate();
        $data = array(
            'cat_title' => $this->input->post('cat_title'),
            'type' => 'event',
        );
        $insert = $this->cat->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function category_ajax_update() {

        $this->_cat_validate();
        $data = array(
            'cat_title' => $this->input->post('cat_title'),
        );
        $this->cat->update(array('category_id' => $this->input->post('category_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function category_ajax_delete($id) {
        $this->cat->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_bulk_delete() {
        $list_id = $this->input->post('category_id');
        foreach ($list_id as $id) {
            $this->cat->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _cat_validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('cat_title') == '') {
            $data['inputerror'][] = 'cat_title';
            $data['error_string'][] = 'Category Title is required';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    public function event_ajax_list() {
        $list = $this->event->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $event) {

            $no++;
            $row = array();
            $base= base_url();
            $image = '<img style="width:100px" src="' .$base. 'assets/frontend/images/' . $event->image . '">';

            $row[] = '<input type="checkbox" class="data-check" value="' . $event->event_id . '">';
            $row[] = $image;
            $row[] = $event->event_title;
            $row[] = $event->event_date;
            $row[] = $event->cat_title;

//add html for action
            $row[] = '<a class="btn btn-sm btn-info " href="javascript:void(0)" title="View" onclick="view_details(' . "'" . $event->event_id . "'" . ')"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>' . '&nbsp;' .
                    '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_event(' . "'" . $event->event_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Delete" onclick="delete_event(' . "'" . $event->event_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->event->count_all(),
            "recordsFiltered" => $this->event->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function event_ajax_edit($id) {
        $data = $this->event->get_by_id($id);
        echo json_encode($data);
    }

    public function event_ajax_add() {
        $date = date("Y-m-d H:i:s");
        $this->_event_validate();
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
                'event_title' => $this->input->post('event_title'),
                'event_date' => $date,
                'cat_id' => $this->input->post('cat_id'),
                'event_desc' => $this->input->post('event_desc'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'event_title' => $this->input->post('event_title'),
                'event_date' => $date,
                'cat_id' => $this->input->post('cat_id'),
                'event_desc' => $this->input->post('event_desc'),
            );
        }

        $insert = $this->event->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function event_ajax_update() {

        $this->_event_validate();
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
                'event_title' => $this->input->post('event_title'),
                'event_date' => $this->input->post('event_date'),
                'cat_id' => $this->input->post('cat_id'),
                'event_desc' => $this->input->post('event_desc'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'event_title' => $this->input->post('event_title'),
                'event_date' => $this->input->post('event_date'),
                'cat_id' => $this->input->post('cat_id'),
                'event_desc' => $this->input->post('event_desc'),
            );
        }


        $this->event->update(array('event_id' => $this->input->post('event_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function event_ajax_delete($id) {
        $this->event->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function event_bulk_delete() {
        $list_id = $this->input->post('event_id');
        foreach ($list_id as $id) {
            $this->event->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _event_validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('event_title') == '') {
            $data['inputerror'][] = 'event_title';
            $data['error_string'][] = 'Event Title is required';
            $data['status'] = FALSE;
        }





        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    function ajax_category_show() {
        $where = array(
            'type' => 'event',
        );
        $data = $this->event->get_data('categories', $where, '');
        foreach ($data as $row) {
            echo '<option value="' . $row['category_id'] . '">' . $row['cat_title'] . '</option>';
        }
    }

}
