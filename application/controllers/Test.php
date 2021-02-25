<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

        public function index(){
            $this->load->view('index');
        }

        public function handle_post(){
            $data = json_decode(file_get_contents("php://input"));
            print_r($data->username);
        }
	
}
