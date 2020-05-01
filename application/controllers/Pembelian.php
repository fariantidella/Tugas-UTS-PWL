<?php class Pembelian extends CI_Controller {


	 function __construct() { 
	 	parent::__construct(); $this->load->model('pembelian_m');	
    }
 
    function index()
    {
        
        $data['pembelian'] = $this->pembelian_m->tampil_pembelian()->result();

        $this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view("pembelian_v",$data);	
		$this->load->view('template/js');


    }



    	
		public function tambah_pembelian(){
		$kd_pembelian 	= $this->input->post('kd_pembelian');
		$nm_pembelian	= $this->input->post('nm_pembelian');
		$harga		= $this->input->post('harga');
		$stok 		= $this->input->post('stok');
		$stok 		= $this->input->post('stok');
		
		$data = array(
			'kd_pembelian'	=> $kd_pembelian,
			'nm_pembelian' => $nm_pembelian,
			'harga'		=> $harga,
			'stok'		=> $stok,
			'stok'		=> $stok,
			
		);

		$this->pembelian_m->input_data($data, 'pembelian');
		redirect ('Pembelian/index');
	}


}


