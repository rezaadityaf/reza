<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
  }
  public function index(){

        $data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['title'] = "Menu Management";

              $this->form_validation->set_rules('menu', 'Menu', 'required|trim');
      if ($this->form_validation->run() == false) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
      }
      else {

        echo "aaa";
        // $this->db->insert('user_menu', [])
      }


  }

}
