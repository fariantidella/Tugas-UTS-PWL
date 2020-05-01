<?php class Supplier extends CI_Controller {


	 function __construct() { 
	 	parent::__construct(); $this->load->model('supplier_m');	
    }
 
    function index()
    {
        
        $data['supplier'] = $this->supplier_m->tampil_supplier()->result();

        $this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view("supplier_v",$data);	
		$this->load->view('template/js');


    }



    	
		public function tambah_supplier(){
		$kd_supplier 	= $this->input->post('kd_supplier');
		$nm_supplier	= $this->input->post('nm_supplier');
		$alamat		= $this->input->post('alamat');
		$notlp 		= $this->input->post('notlp');
		
		$data = array(
			'kd_supplier'	=> $kd_supplier,
			'nm_supplier' => $nm_supplier,
			'alamat'		=> $alamat,
			'notlp'		=> $notlp,
			
		);

		$this->supplier_m->input_data($data, 'supplier');
		redirect ('Supplier/index');
	}


}


