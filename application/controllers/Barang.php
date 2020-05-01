<?php class Barang extends CI_Controller {


	 function __construct() { 
	 	parent::__construct(); $this->load->model('barang_m');	
    }
 
    function index()
    {
        
        $data['barang'] = $this->barang_m->tampil_barang()->result();

        $this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view("barang_v",$data);
		$this->load->view('template/js');


    }



    	
		public function tambah_barang(){
		$kd_barang 	= $this->input->post('kd_barang');
		$nm_barang	= $this->input->post('nm_barang');
		$harga		= $this->input->post('harga');
		$stok 		= $this->input->post('stok');
		
		$data = array(
			'kd_barang'	=> $kd_barang,
			'nm_barang' => $nm_barang,
			'harga'		=> $harga,
			'stok'		=> $stok,
			
		);

		$this->barang_m->input_data($data, 'barang');
		redirect ('Barang/index');
	}


}


