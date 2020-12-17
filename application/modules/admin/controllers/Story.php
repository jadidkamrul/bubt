<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends MX_Controller {

    public function __construct() {

        parent::__construct();

    $this->load->library('ion_auth');
     
      if(!$this->ion_auth->logged_in())
      {
        redirect('admin/auth/login');
      }

        $this->load->model('story_model', 'story');
    }

    public function index() {

        $this->load->view('common/backend_header');
        $this->load->view('story/index');
        $this->load->view('common/backend_footer');
    }

    public function ajax_list() {
        $list = $this->story->get_datatables();

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $story) {
            $no++;
            $row = array();
         
            $row[] = $story->video_link;
          

            //add html for action
            $row[] = '<a class="btn btn-sm btn-info" href="javascript:void(0)" title="Hapus" onclick="view_details(' . "'" . $story->story_id . "'" . ')"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>' . '&nbsp;' .
                    '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_story(' . "'" . $story->story_id . "'" . ')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  ';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->story->count_all(),
            "recordsFiltered" => $this->story->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
 public function ajax_edit($id) {
        $data = $this->story->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_update() {

      
        $data = array(
            'video_link' => $this->input->post('video_link'),
           
        );
     
     $this->story->update(array('story_id' => $this->input->post('story_id')), $data);
   
       echo json_encode(array("status" => TRUE));
    }

}
