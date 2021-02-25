<?php 
class UserModel extends CI_Model {


    public function getUserByUsername($username){
        
        return $this->db->get_where('tb_user', array('username' => $username))->row();

    }


}