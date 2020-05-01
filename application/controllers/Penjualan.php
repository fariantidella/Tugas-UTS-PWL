<?php class Penjualan extends CI_Controller {


	 function __construct() { 
	 	parent::__construct(); $this->load->model('penjualan_m');	
    }
 
    function index()
    {
        
        $data['penjualan'] = $this->penjualan_m->tampil_penjualan()->result();

        $this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view("penjualan_v",$data);	
		$this->load->view('template/js');


    }



    	
		public function tambah_anggota(){
		$kd_penjualan 	= $this->input->post('kd_penjualan');
		$nm_penjualan	= $this->input->post('nm_penjualan');
		$harga		= $this->input->post('harga');
		$stok 		= $this->input->post('stok');
		
		$data = array(
			'kd_penjualan'	=> $kd_penjualan,
			'nm_penjualan' => $nm_penjualan,
			'harga'		=> $harga,
			'stok'		=> $stok,
			
		);

		$this->penjualan_m->input_data($data, 'penjualan');
		redirect ('Penjualan/index');
	}


}


