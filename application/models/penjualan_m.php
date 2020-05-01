<?php class penjualan_m extends CI_Model
{ 
	
    public function tampil_penjualan()
	{
		return $this->db->get('penjualan');
	}
	public function input_data($data)
    {
        $this->db->insert('penjualan', $data);
    }
}




