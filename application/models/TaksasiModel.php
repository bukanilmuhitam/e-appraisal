<?php 
class TaksasiModel extends CI_Model {

    public function getAlldata(){

        return $this->db->order_by('tanggal_input' , 'DESC')->get('master_data_taksasi')->result();

    }

    public function save($data){
        return $this->db->insert('master_data_taksasi', $data); 
    }

}