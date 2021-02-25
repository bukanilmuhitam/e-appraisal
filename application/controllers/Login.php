<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index()
	{
		$this->load->view('auth/login');
	}

    public function in(){

       $username = $this->input->post('username');
       $password = $this->input->post('password');
        
      $getuser = $this->user->getUserByUsername($username);
        //   echo "<pre>";
        //   print_r($getuser);
      if(!empty($getuser)){

        if(password_verify($password , $getuser->password)){
            $nama_user = $getuser->nama_user;
            $session = [
                'loggen_in' => TRUE,
                'profile' => $getuser,
            ];
            $output = [
                'type' => 'info',
                'message' => "Hello $nama_user ,Selamat anda berhasil login!",
            ];
            $this->session->set_flashdata($output);
            $this->session->set_userdata($session);
            redirect('/home');

        }else{
            $output = [
                'type' => 'error',
                'message' => 'Password Salah',
            ];
            $this->session->set_flashdata($output);
            redirect('/login');
        }

      }else{
        $output = [
            'type' => 'error',
            'message' => 'Username tidak ditemukan',
        ];
        $this->session->set_flashdata($output);
        redirect('/login');
      }

    }

    public function out(){
        $this->session->sess_destroy();
        redirect('/login');
    }

}