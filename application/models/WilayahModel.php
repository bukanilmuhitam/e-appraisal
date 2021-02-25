<?php 
class WilayahModel extends CI_Model {

    public function getProvinsi(){
        
        $query = $this->db->query("SELECT * FROM pembagian_wilayah")->result();
        $output = array(
            "success" => false,
            "items" => array()
        );
        foreach($query as $dt){
            $kodewilayah  = $dt->kode_wilayah;
            if(strlen($kodewilayah) == 2){
                $output['items'][] = array(
                    'kode_wilayah' => $dt->kode_wilayah,
                    'wilayah' => $dt->nama_wilayah,
                  );
            }
        }
        $output['success'] = true; // if you want to update `status` as well
        return json_encode($output);

    }

    public function getLokasiAgunan($provinsi){
        $provinsi = strtolower($provinsi);
        // $kabupaten = strtolower($kabupaten);
        $query = $this->db->query("SELECT * FROM pembagian_wilayah where provinsi = '$provinsi'")->result();
        $output = array(
            "success" => false,
            "items" => array()
        );
        foreach($query as $dt){
            $kodewilayah  = $dt->kode_wilayah;
            if(strlen($kodewilayah) == 6){
                $output['items'][] = array(
                    'kode_wilayah' => $dt->kode_wilayah,
                    'wilayah' => $dt->nama_wilayah,
                  );
            }
        }
        $output['success'] = true; // if you want to update `status` as well
        return json_encode($output);
    }

}