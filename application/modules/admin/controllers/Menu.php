<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MX_Controller {

    public function __construct() {

        parent::__construct();


        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in()) {
            redirect('admin/auth/login');
        }
        $this->load->model('category_model', 'cat');
        $this->load->model('menu_model', 'menu');
    }

    public function index() {

        $this->load->view('common/backend_header');
        $this->load->view('menu/index');
        $this->load->view('common/backend_footer');
    }

    public function menu_ajax_list() {
        $list = $this->menu->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $menu) {
            $no++;
            $row = array();
            $row[] = '<input type="checkbox" class="data-check" value="' . $menu->id . '">';
            $row[] = $menu->id;
            $row[] = $menu->label;
            $row[] = $menu->link;

            $row[] = $menu->parent;
            $row[] = $menu->sort;
            $row[] = '<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_menu(' . "'" . $menu->id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_menu(' . "'" . $menu->id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->menu->count_all(),
            "recordsFiltered" => $this->menu->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function menu_ajax_edit($id) {
        $data = $this->menu->get_by_id($id);
        echo json_encode($data);
    }

    public function menu_ajax_add() {


        $data = array(
            'label' => $this->input->post('label'),
            'link' => $this->input->post('link'),
            'parent' => $this->input->post('parent'),
            'sort' => $this->input->post('sort'),
        );





        $insert = $this->menu->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function menu_ajax_update() {


        
            $data = array(
                'label' => $this->input->post('label'),
                'link' => $this->input->post('link'),
                'parent' => $this->input->post('parent'),
                'sort' => $this->input->post('sort'),
            );
        

        $this->menu->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function menu_ajax_delete($id) {
        $this->menu->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_bulk_delete() {
        $list_id = $this->input->post('id');
        foreach ($list_id as $id) {
            $this->menu->delete_by_id($id);
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

    function ajax_menu_show() {

        $data = $this->menu->get_data('menu');
        echo '<option value="">Select Parent</option>';
        foreach ($data as $row) {

            echo '<option value="' . $row['id'] . '">' . $row['label'] . '</option>';
        }
    }

}
