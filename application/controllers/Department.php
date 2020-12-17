<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

    public function __construct() {

        parent::__construct();



        $this->load->model('prime_model', 'prime');
    }

    public function information() {


        $widget_data = $this->prime->get_data('widgets');
        $data['widgets'] = $this->prime->get_widget_data($widget_data);
        $data['clients'] = $this->prime->get_data('clients');
        $data['settings'] = $this->prime->get_data('settings');
        $main_menu = $this->prime->get_data('menu');
        $data['menus'] = $this->prime->ordered_menu($main_menu);
        $data['stories'] = $this->prime->get_data('success_story');
        $data['members'] = $this->prime->get_data('faculty_member');
        $data['posts'] = $this->prime->get_post_data();


        $where_department = array(
            'department_id' => $this->uri->segment(3),
        );
         $data['achievments'] = $this->prime->get_data('acheivements', '', $where_department);
          $data['department_menus'] = $this->prime->get_data('department_menu', '', $where_department);
        $data['departments'] = $this->prime->get_data('departments', '', $where_department);
        $this->load->view('frontend_header_page', $data);
        $this->load->view('faculty/department', $data);
        $this->load->view('frontend_footer', $data);
    }

    function message() {
        $notice_where = array(
            'type' => 'notice',
        );
        $course_where = array(
            'type' => 'course',
        );

        $chakti_where = array(
            'category' => 'faculty',
            'video_url' => NULL
        );
        $chakti_fac_video = array(
            'category' => 'faculty',
            'video_url!=' => NULL
        );
        $data['faculties'] = $this->prime->get_data('gallery', '', $chakti_where);
        $data['faculties_video'] = $this->prime->get_data('gallery', '', $chakti_fac_video);
        $notice_cat = $this->prime->get_data('categories', '', $notice_where);
        $course_cat = $this->prime->get_data('categories', '', $course_where);
        $data['notices'] = $this->prime->get_notice_data($notice_cat);
        $data['courses'] = $this->prime->get_course_data($course_cat);
        $data['events'] = $this->prime->get_events();
        $data['sliders'] = $this->prime->get_data('slider');
        $widget_data = $this->prime->get_data('widgets');
        $data['widgets'] = $this->prime->get_widget_data($widget_data);
        $data['clients'] = $this->prime->get_data('clients');
//    echo '<pre>';
//     print_r($data['widgets']);
//    echo '<pre>';
//      exit;
        $data['settings'] = $this->prime->get_data('settings');
        $main_menu = $this->prime->get_data('menu');
        $data['menus'] = $this->prime->ordered_menu($main_menu);
        $data['stories'] = $this->prime->get_data('success_story');
        $data['posts'] = $this->prime->get_post_data();
        $this->load->view('frontend_header', $data);
        $this->load->view('message', $data);
        $this->load->view('frontend_footer', $data);
    }

    function history() {
        $notice_where = array(
            'type' => 'notice',
        );
        $course_where = array(
            'type' => 'course',
        );

        $chakti_where = array(
            'category' => 'faculty',
            'video_url' => NULL
        );
        $chakti_fac_video = array(
            'category' => 'faculty',
            'video_url!=' => NULL
        );
        $data['faculties'] = $this->prime->get_data('gallery', '', $chakti_where);
        $data['faculties_video'] = $this->prime->get_data('gallery', '', $chakti_fac_video);
        $notice_cat = $this->prime->get_data('categories', '', $notice_where);
        $course_cat = $this->prime->get_data('categories', '', $course_where);
        $data['notices'] = $this->prime->get_notice_data($notice_cat);
        $data['courses'] = $this->prime->get_course_data($course_cat);
        $data['events'] = $this->prime->get_events();
        $data['sliders'] = $this->prime->get_data('slider');
        $widget_data = $this->prime->get_data('widgets');
        $data['widgets'] = $this->prime->get_widget_data($widget_data);
        $data['clients'] = $this->prime->get_data('clients');
//    echo '<pre>';
//     print_r($data['widgets']);
//    echo '<pre>';
//      exit;
        $data['settings'] = $this->prime->get_data('settings');
        $main_menu = $this->prime->get_data('menu');
        $data['menus'] = $this->prime->ordered_menu($main_menu);
        $data['stories'] = $this->prime->get_data('success_story');
        $data['posts'] = $this->prime->get_post_data();
        $this->load->view('frontend_header', $data);
        $this->load->view('history', $data);
        $this->load->view('frontend_footer', $data);
    }

    function get_sections($type) {
        if ($type == 'campus') {
            $where = array(
                'category' => "campus",
                'content_right!=' => NULL,
            );
            $data['campus'] = $this->prime->get_data('gallery', '', $where);
            $slider_where = array(
                'category' => "campus",
                'content_right' => NULL,
            );
            $data['sliders'] = $this->prime->get_data('gallery', '', $slider_where);
            $this->load->view('campus_ex', $data);
        }
        if ($type == 'location') {
            $where = array(
                'category' => "location",
            );
            $data['location'] = $this->prime->get_data('gallery', '', $where);
            $this->load->view('location_ex', $data);
        }
        if ($type == 'convocation') {
            $where = array(
                'category' => "convocation",
            );
            $data['convocation'] = $this->prime->get_data('gallery', '', $where);
            $this->load->view('convocation_ex', $data);
        }
        if ($type == 'faculty') {
            $chakti_where = array(
                'category' => 'faculty',
                'video_url' => NULL
            );
            $chakti_fac_video = array(
                'category' => 'faculty',
                'video_url!=' => NULL
            );
            $data['faculties'] = $this->prime->get_data('gallery', '', $chakti_where);
            $data['faculties_video'] = $this->prime->get_data('gallery', '', $chakti_fac_video);
            $this->load->view('faculty_ex', $data);
        }if ($type == 'credit') {
            $this->load->view('credit_transfer_ex');
        }
        if ($type == 'club') {
            $where = array(
                'category' => "club",
                'content_right!=' => NULL,
            );
            $where_slider = array(
                'category' => "club",
                'content_right' => NULL,
            );
            $data['club_slider'] = $this->prime->get_data('gallery', '', $where_slider);
            $data['club'] = $this->prime->get_data('gallery', '', $where);
            $this->load->view('club_ex', $data);
        }
    }

}
