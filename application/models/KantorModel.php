<?php 
class KantorModel extends CI_Model {

    public function getAlldata(){

        return $this->db->order_by('kd_cab' , 'ASC')->get('t_cabang')->result();

    }

}