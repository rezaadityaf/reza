<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function index(){
      $data ['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

      $data['title'] = "Dashboard";
      $this->load->view('templates/header-admin', $data);

      $this->load->view('admin/index', $data);

  }
  public function user(){

      $this->load->view('templates/header-admin');

      $this->load->view('admin/user');

  }

}
