<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Course_model extends CI_model {

    var $table = 'courses';
    var $column_order = array('course_id', 'course_title', 'cat_id', 'start_date');
    var $column_search = array('course_title'); 
    var $order = array('course_id' => 'desc'); 

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query() {

        $this->db->from($this->table);
        $this->db->join('categories', 'categories.category_id = courses.cat_id');
        $i = 0;

        foreach ($this->column_search as $item) { // loop column 
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables() {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($id) {
        $this->db->from($this->table);
        $this->db->where('course_id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function save($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id) {
        $this->db->where('course_id', $id);
        $this->db->delete($this->table);
    }

    public function inserter($table, $data) {

        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
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
