<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct() {

        parent::__construct();


      
        $this->load->model('prime_model', 'prime');
    }

    public function index() {
        $this->load->view('frontend_header');
        $this->load->view('home');
        $this->load->view('frontend_footer');
    }
    function info(){
        $data= $this->prime->get_data('settings');
        foreach($data as $row){
           $row[]=$row;
        }
       echo  json_encode($row);
    }

}
