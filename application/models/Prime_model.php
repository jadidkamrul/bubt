<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prime_model extends CI_model {

    public function inserter($table, $data) {

        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function ordered_menu($array, $parent_id = 0) {
        $temp_array = array();
        foreach ($array as $element) {
            if ($element['parent'] == $parent_id) {
                $element['subs'] = $this->ordered_menu($array, $element['id']);
                $temp_array[] = $element;
            }
        }
        return $temp_array;
    }

    function get_widget_data($array) {
        $temp_array = array();
        foreach ($array as $element) {
            $elemen[] = $element;
            $element['meta_data'] = $this->widget_meta($element['widget_id']);
            $temp_array[] = $element;
        }
        return $temp_array;
    }

    function widget_meta($widget_id) {
        $this->db->select('*');
        $this->db->from('widget_meta');
        $this->db->where('widget_id', $widget_id);
        $this->db->order_by('widget_meta_id', "DESC");

        $result = $this->db->get()->result_array();
        return $result;
    }

    function get_notice_data($array) {
        $temp_array = array();
        foreach ($array as $element) {
            $elemen[] = $element;
            $element['ndata'] = $this->notice_by_cat($element['category_id']);
            $temp_array[] = $element;
        }
        return $temp_array;
    }

    function notice_by_cat($cat_id) {
        $this->db->select('*');
        $this->db->from('notices');
        $this->db->where('cat_id', $cat_id);
        $this->db->order_by('notice_id', "DESC");
        $this->db->limit(5);
        $result = $this->db->get()->result_array();
        return $result;
    }

    function get_course_data($array) {
        $temp_array = array();
        foreach ($array as $element) {
            $elemen[] = $element;
            $element['ndata'] = $this->course_by_cat($element['category_id']);
            $temp_array[] = $element;
        }
        return $temp_array;
    }

    function course_by_cat($cat_id) {
        $this->db->select('*');
        $this->db->from('courses');
        $this->db->where('cat_id', $cat_id);
        $this->db->order_by('course_id', "DESC");
        $this->db->limit(5);
        $result = $this->db->get()->result_array();
        return $result;
    }

    function get_events() {
        $today = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('date(event_date)<', $today);
        $this->db->order_by('event_id', "DESC");
        $this->db->limit(6);
        $result = $this->db->get()->result_array();

        $elemen['upcoming'] = $this->get_upcoming_event();
        $elemen['recent'] = $this->get_recent_event();

        $elemen['previous'] = $result;
        return $elemen;
    }

    function get_recent_event() {
        $today = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('date(event_date)=', $today);
        $this->db->order_by('event_id', "DESC");
        $this->db->limit(6);
        $result = $this->db->get()->result_array();

        return $result;
    }

    function get_upcoming_event() {
        $today = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('date(event_date)>', $today);
        $this->db->order_by('event_id', "DESC");
        $this->db->limit(6);
        $result = $this->db->get()->result_array();

        return $result;
    }

    function deleter($field_name, $field_value, $table) {
        $result = $this->db->where($field_name, $field_value)->delete($table);
        return $this->db->affected_rows();
    }

    public function updater($where, $tbl_name, $data) {
        $this->db->where($where);
        $result = $this->db->update($tbl_name, $data);
        return $this->db->affected_rows();
    }

    public function get_data($table = NULL, $orderby = NULL, $where = NULL) {
        $this->db->select('*');
        $this->db->from($table);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, "DESC");
        }

        $result = $this->db->get()->result_array();
        return $result;
    }

    public function get_post_data() {
        $this->db->select('*');
        $this->db->from('posts');


        $this->db->order_by('id', "DESC");
        $this->db->limit(3);

        $result = $this->db->get()->result_array();
        return $result;
    }

    public function get_order_data($orderby = NULL, $where = NULL) {
        $this->db->select('*');
        $this->db->from('order_meta');
        $this->db->join('orders', 'order_meta.order_id=orders.order_id');
        $this->db->join('products', 'products.product_id=order_meta.product_id');
        if ($where != '') {
            $this->db->where($where);
        }
        if ($orderby != '') {
            $this->db->order_by($orderby, "DESC");
        }

        $result = $this->db->get()->result_array();
        return $result;
    }

    function check_exist($table = NULL, $where = NULL) {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $count = $query->num_rows();
        //print_r($count) ;
        //exit;
    }

    function check_table($table = NULL) {

        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $count = $query->num_rows();
        //print_r($count) ;
        //exit;
    }

    public function get_sub_cat($table = NULL) {
        $this->db->select('*');
        $this->db->from($table);

        $this->db->where("parent !=", '0');


        $result = $this->db->get()->result_array();
        return $result;
    }

    function get_product_data() {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('admin_id', $this->session->logged_in['id']);
        $this->db->join('categories', 'products.category_id = categories.cat_id');

        $query = $this->db->get()->result_array();
        return $query;
    }

    public function view_photos($id) {
        $this->db->where('product_id', $id);
        $query = $this->db->get('product_atribute');
        return $query->result();
    }

    public function merchant() {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function approve($id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update('users', $data);
        return $this->db->affected_rows();
    }

    public function agent_approve($id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update('users', $data);
        return $this->db->affected_rows();
    }

    public function shop_approve($id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update('users', $data);
        return $this->db->affected_rows();
    }

    public function agent_post() {
        $this->db->where('posted_by >', '0');
        $query = $this->db->get('products');
        return $query->result();
    }

    public function post_approve($id, $data) {
        $this->db->where('product_id', $id);
        $result = $this->db->update('products', $data);
        return $this->db->affected_rows();
    }

    public function merchant_post() {
        $this->db->where('merchant_id >', '0');
        $query = $this->db->get('products');
        return $query->result();
    }

    public function shop_post() {
        $this->db->where('shop_id >', '0');
        $query = $this->db->get('products');
        return $query->result();
    }

}
