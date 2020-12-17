<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct() {
        parent::__construct();


        $this->load->library('ion_auth');

        if (!$this->ion_auth->logged_in()) {
            redirect('admin/auth/login');
        }
        $this->load->model('prime_model', 'prime');
    }

    public function index() {

        $this->header();
        $this->load->view('dashboard');
        $this->load->view('common/backend_footer');
    }

    function header() {
        $data['faculties'] = $this->prime->get_data('faculties');
        $this->load->view('common/backend_header', $data);
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
