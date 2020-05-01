<?php class supplier_m extends CI_Model
{ 
	
    public function tampil_supplier()
	{
		return $this->db->get('supplier');
	}
	public function input_data($data)
    {
        $this->db->insert('supplier', $data);
    }
}




