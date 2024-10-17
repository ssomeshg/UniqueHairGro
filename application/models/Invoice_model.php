<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model {

    public function getinvoice($id = NULL) {
      
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_invoice')->row();
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_invoice')->result();
    }
	
	public function get_invoices($user_id){
		
		
		
	}

    public function data_filtered($start_date, $end_date, $branch) {
        $this->db->select('*');
        $this->db->from('tbl_invoice');
        $this->db->where('created_at >=', $start_date);
        $this->db->where('created_at <=', $end_date);
        if ($branch) {
            $this->db->where('branch', $branch);
        }
        $query = $this->db->get(); 
    
        return $query->result_array();
    }
    

   
}
?>