<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

        public function index(){

            if($this->session->userdata('loggen_in') == FALSE){
                return redirect('/login');
            }

            $profile = $this->session->userdata('profile');
            //   echo "<pre>";
            //  print_r($profile);

            //  die();
            // $notify = [
            //     'type' => 'success',
            //     'message' => 'Testing',
            // ];
            // === CONTENT TEMPLATE
            $data = [
                'title' => 'Dashboard',
                'profile' => $profile,
            ];
            
            $content['content'] = $this->load->view('unitkantor/index' , $data , true);
            $this->load->view('template/template' , $content);
            
        }
	
}
