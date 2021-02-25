<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taksasi extends MY_Controller {

	public function index()
	{
		
        if($this->session->userdata('loggen_in') == FALSE){
            return redirect('/login');
        }

        $profile = $this->session->userdata('profile');
        $getdata = $this->taksasi->getAlldata();
        $getcabang = $this->kantor->getAlldata();
        $wilayah = json_decode($this->wilayah->getLokasiAgunan('sumatera utara'));
        // echo "<pre>";
        // print_r($kabupaten->items);
        // exit;
      
        // === CONTENT TEMPLATE
        $data = [
            'title' => 'Taksasi',
            'profile' => $profile,
            'items' => $getdata,
            'cabangs' => $getcabang,
            'wilayah' => $wilayah->items,
        ];
        
        $content['content'] = $this->load->view('unitkantor/taksasi' , $data , true);
        $this->load->view('template/template' , $content);

	}

    public function simpan(){

        $calonnama = $this->input->post('nama_calondebitur');
        $data = array(
            'kode_unit_kantor' => $this->input->post('kantor_cabang'),
            'nama_calon_debitur' => $this->input->post('nama_calondebitur'),
            'nik_debitur' => $this->input->post('nik_debitur'),
            'plafond' => $this->input->post('plafond'),
            'no_hp' => $this->input->post('no_hp'),
            'nama_pemilik_agunan' => $this->input->post('nama_pemilik_agunan'),
            'lokasi_agunan' => $this->input->post('lokasi_agunan'),
            'tanggal_input' => date('Y-m-d'),
        );
        // echo "<pre>";
        // print_r($data);
        // exit;
       if($this->taksasi->save($data)){
            $output = [
                'type' => 'success',
                'message' => "Berhasil input agunan dari debitur $calonnama",
            ];
            $this->session->set_flashdata($output);
            redirect('/taksasi');
       }else{
             $output = [
                    'type' => 'error',
                    'message' => "Gagal input agunan dari debitur $calonnama",
                ];
                $this->session->set_flashdata($output);
                redirect('/taksasi');
       }
       

    }

}
