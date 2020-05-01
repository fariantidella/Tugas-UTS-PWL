<?php class pembelian_m extends CI_Model
{ 
	
    public function tampil_pembelian()
	{
		return $this->db->get('pembelian');
	}
	public function input_data($data)
    {
        $this->db->insert('pembelian', $data);
    }
}




