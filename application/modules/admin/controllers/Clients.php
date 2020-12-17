<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MX_Controller {

    public function __construct() {

        parent::__construct();


    $this->load->library('ion_auth');
     
      if(!$this->ion_auth->logged_in())
      {
        redirect('admin/auth/login');
      }
   
        $this->load->model('client_model', 'client');
    }

    public function index() {

        $this->load->view('common/backend_header');
        $this->load->view('clients/index');
        $this->load->view('common/backend_footer');
    }

    public function client_ajax_list() {
        $list = $this->client->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $client) {
            $no++;
            $row = array();
             $base= base_url();
            $image = '<img style="width:100px" src="' .$base. 'assets/frontend/images/' . $client->logo . '">';

            $row[] = '<input type="checkbox" class="data-check" value="' . $client->clients_id . '">';
            $row[] = $image;
            $row[] = $client->url;     

            $row[] ='<a class="btn btn-sm btn-primary " href="javascript:void(0)" title="Edit" onclick="edit_client(' . "'" . $client->clients_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-sm btn-danger " href="javascript:void(0)" title="Hapus" onclick="delete_client(' . "'" . $client->clients_id . "'" . ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>&nbsp;';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->client->count_all(),
            "recordsFiltered" => $this->client->count_filtered(),
            "data" => $data,
        );
//output to json format
        echo json_encode($output);
    }

    public function client_ajax_edit($id) {
        $data = $this->client->get_by_id($id);
        echo json_encode($data);
    }

    public function client_ajax_add() {
        $this->_client_validate();
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
                'url' => $this->input->post('url'),
              
                'logo' => $file_name,
            );
        } else {
            $data = array(
                  'url' => $this->input->post('url'),
            );
        }


        $insert = $this->client->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function client_ajax_update() {


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
                'url' => $this->input->post('url'),
              
                'logo' => $file_name,
            );
        } else {
            $data = array(
                  'url' => $this->input->post('url'),
            );
        }
        $this->client->update(array('clients_id' => $this->input->post('clients_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function client_ajax_delete($id) {
        $this->client->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function client_bulk_delete() {
        $list_id = $this->input->post('clients_id');
        foreach ($list_id as $id) {
            $this->client->delete_by_id($id);
        }
        echo json_encode(array("status" => TRUE));
    }

    private function _client_validate() {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('url') == '') {
            $data['inputerror'][] = 'url';
            $data['error_string'][] = 'Url is required';
            $data['status'] = FALSE;
        }





        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }

 

}
