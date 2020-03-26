<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {


  public function index(){
  
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    echo $username;

$user = $this->db->get_where('user', ['username' => $username])->row_array();

if ($password == $user['password']) {
echo "your password right";
$data = [
  'level'=> $user['level'],
  'username'=>  $user['username'],
  'nama'=>  $user['nama'],
  'email'=>  $user['email'],
  'jabatan'=>  $user['jabatan'],
  'divvv'=>  $user['divvv']
];
$this->session->set_userdata($data);
if ($user['level'] == "admin") {
    redirect('admin');
}else {
  redirect('user');
}
}
else{
  echo "your password wrong";
}

    //
    //   }
    //   else {
    //
    //     $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password Salah
    //     </div>');
    //     redirect('auth');
    //
    //   }

  }
}
