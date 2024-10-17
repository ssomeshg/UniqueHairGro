<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branch_model extends CI_Model
{
    // Branch Model 
	
	public function get_branch_count(){
		
        $this->db->select_max('branch_id');
        $query = $this->db->get('tbl_branch');
        $result = $query->row();
        return $result->branch_id + 1;
    }
   
    public function getbranch($branch_id = NULL) {
		
        $this->db->where('status', 1);
        if ($branch_id) {
            $this->db->where('branch_id', $branch_id);
            return $this->db->get('tbl_branch')->row();
        }
        $this->db->order_by('branch_id', 'desc');
        return $this->db->get('tbl_branch')->result();
    }

    public function get_branch(){
		
        $query = $this->db->query("SELECT * FROM tbl_branch WHERE status = 1");
        return $query->result();
    }
	
	
	// User Model 

    public function get_user_count(){
		
        $this->db->select_max('user_id');
        $query = $this->db->get('tbl_users');
        $result = $query->row();
        return $result->user_id + 1;
    }
	
	public function getuser($user_id = NULL) {
		
        $this->db->where('status', 1);
        if ($user_id) {
            $this->db->where('user_id', $user_id);
            return $this->db->get('tbl_users')->row();
        }
        $this->db->order_by('user_id', 'desc');
        return $this->db->get('tbl_users')->result();
    }

    public function get_user(){

        $query = $this->db->query("SELECT * FROM tbl_users WHERE status = 1");
        return $query->result();
    }
	
	
}
