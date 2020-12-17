<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MX_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in()) {
            redirect('admin/auth/login');
        }

        $this->load->model('prime_model', 'prime');
        $this->load->model('gallery_model', 'gallery');
    }

    public function index() {

        $this->load->view('common/backend_header');
        $this->load->view('courses/index');
        $this->load->view('common/backend_footer');
    }

    public function location() {
        $where = array(
            'category' => "location",
        );
        $data['location'] = $this->prime->get_data('gallery', '', $where);
//        print_r($data['location']);
//        exit;
        $this->load->view('common/backend_header');
        $this->load->view('gallery/location', $data);
        $this->load->view('common/backend_footer');
    }

    function update_location() {
        $where = array(
            'gallery_id' => $this->input->post('gallery_id'),
        );
        $c = $this->input->post('content_right');

        $data = array(
            'content_left' => $this->input->post('content_left'),
            'content_right' => $c,
        );


        $result = $this->prime->updater($where, 'gallery', $data);
        $this->session->set_flashdata('msg', 'Successfully updated');
        redirect('admin/gallery/location');
    }

    public function campus() {
        $where = array(
            'category' => "campus",
            'content_right!=' =>NULL,
        );
        $data['campus'] = $this->prime->get_data('gallery', '', $where);
//        print_r($data['location']);
//        exit;
        $this->load->view('common/backend_header');
        $this->load->view('gallery/campus', $data);
        $this->load->view('common/backend_footer');
    }

    public function campus_post_ajax_list() {
         $where = array(
            'category' => "campus",
            'content_right' => NULL,
        );
        $list = $this->gallery->get_datatables($where);

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $campus) {
            $no++;
            $row = array();
            $base = base_url();
            $image = '<img style="width:100px" src="' . $base . 'assets/frontend/images/' . $campus->image . '">';
            $row[] = '<input type="checkbox" class="data-check" value="' . $campus->gallery_id . '">';
            $row[] = $image;
            $row[] = $campus->img_text;


            $row[] = '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_slide(' . "'" . $campus->gallery_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_slide(' . "'" . $campus->gallery_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->gallery->count_all($where),
            "recordsFiltered" => $this->gallery->count_filtered($where),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function campus_post_ajax_edit($id) {
        $data = $this->gallery->get_by_id($id);
        echo json_encode($data);
    }

    public function campus_post_ajax_add() {
        $this->_campus_post_validate();
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
                'img_text' => $this->input->post('img_text'),
                'category' => "campus",
                'image' => $file_name,
            );
        } else {
            $data = array(
                'img_text' => $this->input->post('img_text'),
                'category' => "campus",
            );
        }

        $insert = $this->gallery->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function campus_post_ajax_update() {

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
                'img_text' => $this->input->post('img_text'),
                'category' => "campus",
                'image' => $file_name,
            );
        } else {
            $data = array(
                'img_text' => $this->input->post('img_text'),
                'category' => "campus",
            );
        }

        $this->gallery->update(array('gallery_id' => $this->input->post('gallery_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function campus_post_ajax_delete($id) {
        $this->gallery->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function campus_post_bulk_delete() {
        $list_id = $this->input->post('gallery_id');
        foreach ($list_id as $id) {
            $this->gallery->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _campus_post_validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('img_text') == '') {
            $data['inputerror'][] = 'img_text';
            $data['error_string'][] = 'Image text is required';
            $data['status'] = FALSE;
        }





        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    function update_campus_details() {
        $where = array(
            'gallery_id' => $this->input->post('gallery_id'),
        );
        $c = $this->input->post('content_right');

        $data = array(
            'content_right' => $c,
        );


        $result = $this->prime->updater($where, 'gallery', $data);
        $this->session->set_flashdata('msg', 'Successfully updated');
        redirect('admin/gallery/campus');
    }

    public function faculties() {
        $where = array(
            'category' => "faculty",
            'video_url!=' => "",
        );
        $data['faculties'] = $this->prime->get_data('gallery', '', $where);
//        print_r($data['location']);
//        exit;
        $this->load->view('common/backend_header');
        $this->load->view('gallery/faculties', $data);
        $this->load->view('common/backend_footer');
    }
 
     public function faculty_post_ajax_list() {
         $where=array(
             'category'=>'faculty',
             'video_url'=>NULL
         );
        $list = $this->gallery->get_datatables($where);

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $campus) {
            $no++;
            $row = array();
            $base = base_url();
            $image = '<img style="width:100px" src="' . $base . 'assets/frontend/images/' . $campus->image . '">';
            $row[] = '<input type="checkbox" class="data-check" value="' . $campus->gallery_id . '">';
            $row[] = $image;
            $row[] = $campus->img_text;


            $row[] = '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_slide(' . "'" . $campus->gallery_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_slide(' . "'" . $campus->gallery_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->gallery->count_all($where),
            "recordsFiltered" => $this->gallery->count_filtered($where),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function faculty_post_ajax_edit($id) {
        $data = $this->gallery->get_by_id($id);
        echo json_encode($data);
    }

    public function faculty_post_ajax_add() {
        $this->_faculty_post_validate();
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
                'img_text' => $this->input->post('img_text'),
                'category' => "faculty",
                'image' => $file_name,
            );
        } else {
            $data = array(
                'img_text' => $this->input->post('img_text'),
                'category' => "faculty",
            );
        }

        $insert = $this->gallery->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function faculty_post_ajax_update() {

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
                'img_text' => $this->input->post('img_text'),
                'category' => "faculty",
                'image' => $file_name,
            );
        } else {
            $data = array(
                'img_text' => $this->input->post('img_text'),
                'category' => "faculty",
            );
        }

        $this->gallery->update(array('gallery_id' => $this->input->post('gallery_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function faculty_post_ajax_delete($id) {
        $this->gallery->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function faculty_post_bulk_delete() {
        $list_id = $this->input->post('gallery_id');
        foreach ($list_id as $id) {
            $this->gallery->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _faculty_post_validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('img_text') == '') {
            $data['inputerror'][] = 'img_text';
            $data['error_string'][] = 'Image text is required';
            $data['status'] = FALSE;
        }





        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    function update_faculty_video() {
        $where = array(
            'gallery_id' => $this->input->post('gallery_id'),
        );
        $c = $this->input->post('video_url');

        $data = array(
            'video_url' => $c,
        );


        $result = $this->prime->updater($where, 'gallery', $data);
        $this->session->set_flashdata('msg', 'Successfully updated');
        redirect('admin/gallery/faculties');
    }
    
    
    public function convocation() {
        $where = array(
            'category' => "convocation",
        );
        $data['convocation'] = $this->prime->get_data('gallery', '', $where);
//        print_r($data['location']);
//        exit;
        $this->load->view('common/backend_header');
        $this->load->view('gallery/convocation', $data);
        $this->load->view('common/backend_footer');
    }

    function update_convocation() {
        $where = array(
            'gallery_id' => $this->input->post('gallery_id'),
        );
        $c = $this->input->post('content_right');

        $data = array(
            'video_url' => $this->input->post('video_url'),
            'content_right' => $c,
        );


        $result = $this->prime->updater($where, 'gallery', $data);
        $this->session->set_flashdata('msg', 'Successfully updated');
        redirect('admin/gallery/convocation');
    }
        public function club() {
        $where = array(
            'category' => "club",
            'content_right!=' => NULL,
        );
        $data['campus'] = $this->prime->get_data('gallery', '', $where);
//        print_r($data['location']);
//        exit;
        $this->load->view('common/backend_header');
        $this->load->view('gallery/club', $data);
        $this->load->view('common/backend_footer');
    }
    public function club_post_ajax_list() {
         $where = array(
            'category' => "club",
            'content_right' =>NULL,
        );
        $list = $this->gallery->get_datatables($where);

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $campus) {
            $no++;
            $row = array();
            $base = base_url();
            $image = '<img style="width:100px" src="' . $base . 'assets/frontend/images/' . $campus->image . '">';
            $row[] = '<input type="checkbox" class="data-check" value="' . $campus->gallery_id . '">';
            $row[] = $image;
            $row[] = $campus->img_text;


            $row[] = '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_slide(' . "'" . $campus->gallery_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_slide(' . "'" . $campus->gallery_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->gallery->count_all($where),
            "recordsFiltered" => $this->gallery->count_filtered($where),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function club_post_ajax_edit($id) {
        $data = $this->gallery->get_by_id($id);
        echo json_encode($data);
    }

    public function club_post_ajax_add() {
        $this->_campus_post_validate();
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
                'img_text' => $this->input->post('img_text'),
                'category' => "club",
                'image' => $file_name,
            );
        } else {
            $data = array(
                'img_text' => $this->input->post('img_text'),
                'category' => "club",
            );
        }

        $insert = $this->gallery->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function club_post_ajax_update() {

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
                'img_text' => $this->input->post('img_text'),
                'category' => "club",
                'image' => $file_name,
            );
        } else {
            $data = array(
                'img_text' => $this->input->post('img_text'),
                'category' => "club",
            );
        }

        $this->gallery->update(array('gallery_id' => $this->input->post('gallery_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function club_post_ajax_delete($id) {
        $this->gallery->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function club_post_bulk_delete() {
        $list_id = $this->input->post('gallery_id');
        foreach ($list_id as $id) {
            $this->gallery->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _club_post_validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('img_text') == '') {
            $data['inputerror'][] = 'img_text';
            $data['error_string'][] = 'Image text is required';
            $data['status'] = FALSE;
        }





        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

    function update_club_details() {
        $where = array(
            'gallery_id' => $this->input->post('gallery_id'),
        );
        $c = $this->input->post('content_right');

        $data = array(
            'content_right' => $c,
        );


        $result = $this->prime->updater($where, 'gallery', $data);
        $this->session->set_flashdata('msg', 'Successfully updated');
        redirect('admin/gallery/club');
    }
}
