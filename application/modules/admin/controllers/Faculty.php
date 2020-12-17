<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends MX_Controller {

    public function __construct() {
        parent::__construct();


        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in()) {
            redirect('admin/auth/login');
        }
        $this->load->model('prime_model', 'prime');
        $this->load->model('achievement_model', 'acheive');
        $this->load->model('hmenu_model', 'hmenu');
        $this->load->model('member_model', 'member');
        $this->load->model('department_menu', 'department');
    }

    public function edit() {
        $slug = $this->uri->segment(4);
        $this->header();
        $where = array(
            'slug' => $slug,
        );
        $data['fac_data'] = $this->prime->get_data('faculties', '', $where);
        $this->load->view('faculty/index', $data);
        $this->load->view('common/backend_footer');
    }

    function update_faculty_info() {
        $where = array(
            'faculty_id' => $this->input->post('faculty_id')
        );
        $this->prime->updater($where, 'faculties', $this->input->post());
        echo json_encode(array("status" => TRUE));
    }

    function update_department_info() {
        $where = array(
            'department_id' => $this->input->post('department_id')
        );
        $this->prime->updater($where, 'departments', $this->input->post());
        echo json_encode(array("status" => TRUE));
    }

    function add_department() {
        $data = $this->input->post();
        $this->prime->inserter('departments', $data);
        echo json_encode(array("status" => TRUE));
    }

    function departments() {
        $departments = $this->prime->get_data('departments');
        foreach ($departments as $row) {
            echo '<tr><td>' . $row['department_title'] . '</td><td> <a href="' . site_url('admin/faculty/edit_department/' . $row['department_id']) . '" id="" class="btn btn-primary btn-sm">Edit Information</a><button type="button" id="" class="btn btn-danger btn-sm">Delete</button></td></tr>';
        }
    }

    function header() {
        $data['faculties'] = $this->prime->get_data('faculties');
        $this->load->view('common/backend_header', $data);
    }

    function edit_department() {


        $slug = $this->uri->segment(4);
        $this->header();

        $where = array(
            'department_id' => $slug,
        );
        $data['depart_data'] = $this->prime->get_data('departments', '', $where);
        $this->load->view('faculty/edit_department', $data);
        $this->load->view('common/backend_footer');
    }

    public function achievement_ajax_list() {

        $list = $this->acheive->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $campus) {
            $no++;
            $row = array();
            $base = base_url();
            $image = '<img style="width:100px" src="' . $base . 'assets/frontend/images/' . $campus->image . '">';
            $row[] = '<input type="checkbox" class="data-check" value="' . $campus->id . '">';
            $row[] = $image;
            $row[] = $campus->img_text;


            $row[] = '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_achievement(' . "'" . $campus->id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_achievement(' . "'" . $campus->id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->acheive->count_all(),
            "recordsFiltered" => $this->acheive->count_filtered(),
            "data" => $data,
        );

        echo json_encode($output);
    }


    public function member_ajax_list() {

        $list = $this->member->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $campus) {
            $no++;
            $row = array();
            $base = base_url();
            $image = '<img style="width:100px" src="' . $base . 'assets/frontend/images/' . $campus->member_image . '">';
            $row[] = '<input type="checkbox" class="data-check" value="' . $campus->member_id . '">';
            $row[] = $image;
            $row[] = $campus->member_name;
            $row[] = $campus->member_post;


            $row[] = '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_member(' . "'" . $campus->member_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_member(' . "'" . $campus->member_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->member->count_all(),
            "recordsFiltered" => $this->member->count_filtered(),
            "data" => $data,
        );

        echo json_encode($output);
    }




    public function achievement_ajax_edit($id) {
        $data = $this->acheive->get_by_id($id);
        echo json_encode($data);
    }

    public function member_ajax_edit($id) {
        $data = $this->member->get_by_id($id);
        echo json_encode($data);
    }

    public function achievement_ajax_add() {

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
                'department_id' => $this->input->post('department_id'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'img_text' => $this->input->post('img_text'),
                'department_id' => $this->input->post('department_id'),
            );
        }

        $insert = $this->acheive->save($data);
        echo json_encode(array("status" => TRUE));
    }






    public function member_ajax_add() {

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
                'member_name' => $this->input->post('member_name'),
                'department_id' => $this->input->post('department_id'),
                'member_image' => $file_name,
                'member_post' => $this->input->post('member_post')
            );
        } else {
            $data = array(
              'member_name' => $this->input->post('member_name'),
              'department_id' => $this->input->post('department_id'),
              'member_post' => $this->input->post('member_post')
            );
        }

        $insert = $this->member->save($data);
        echo json_encode(array("status" => TRUE));
    }








    public function menu_ajax_add() {

            $data = array(
                'title' => $this->input->post('title'),
                'department_id' => $this->input->post('department_id'),
                'menu_name' => $this->input->post('menu_name'),
                'description' => $this->input->post('menu_description')
            );


        $insert = $this->hmenu->save($data);
        echo json_encode(array("status" => TRUE));
    }



    public function achievement_ajax_update() {

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
                'department_id' => $this->input->post('department_id'),
                'image' => $file_name,
            );
        } else {
            $data = array(
                'img_text' => $this->input->post('img_text'),
                'department_id' => $this->input->post('department_id'),
            );
        }

        $this->acheive->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }


    public function member_ajax_update() {

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
              'member_name' => $this->input->post('member_name'),
              'department_id' => $this->input->post('department_id'),
              'member_image' => $file_name,
              'member_post' => $this->input->post('member_post')
            );
        } else {
            $data = array(
              'member_name' => $this->input->post('member_name'),
              'department_id' => $this->input->post('department_id'),
              'member_post' => $this->input->post('member_post')
            );
        }

        $this->member->update(array('member_id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }



    public function achievement_ajax_delete($id) {
        $this->acheive->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function member_ajax_delete($id) {
        $this->member->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function menu_ajax_delete($id) {
        $this->hmenu->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function faculty_post_bulk_delete() {
        $list_id = $this->input->post('id');
        foreach ($list_id as $id) {
            $this->acheive->delete_by_id($id);
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


    public function menu_ajax_edit($id) {
        $data = $this->hmenu->get_by_id($id);
        echo json_encode($data);
    }


    public function menu_ajax_update() {
      $data = array(
          'title' => $this->input->post('title'),
          'department_id' => $this->input->post('department_id'),
          'menu_name' => $this->input->post('menu_name'),
          'description' => $this->input->post('menu_description')
      );


        $this->hmenu->update(array('menu_id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }




    public function menu_ajax_list() {

        $list = $this->department->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $menu) {
            $no++;
            $row = array();
            $row[] = '<input type="checkbox" class="data-check" value="' . $menu->menu_id . '">';
            $row[] = $menu->menu_name;

            $row[] = $menu->title;
            $row[] = $menu->description;
            $row[] = '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_menu(' . "'" . $menu->menu_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_menu(' . "'" . $menu->menu_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->department->count_all(),
            "recordsFiltered" => $this->department->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function add_page() {
        $this->load->view('common/backend_header');
        $this->load->view('add-page');
        $this->load->view('common/backend_footer');
    }

    public function page_list() {
        $this->load->view('common/backend_header');
        $this->load->view('page-list');
        $this->load->view('common/backend_footer');
    }

    public function menus() {
        $this->load->view('common/backend_header');
        $this->load->view('menu');
        $this->load->view('common/backend_footer');
    }

}
