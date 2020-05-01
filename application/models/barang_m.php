<?php class barang_m extends CI_Model
{ 
	
    public function tampil_barang()
	{
		return $this->db->get('barang');
	}
	public function input_data($data)
    {
        $this->db->insert('barang', $data);
    }
}




