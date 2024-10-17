<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Before_after_model extends CI_Model
{
    public function getbeforeafter($id = NULL) {
		
        $this->db->where('status', 0);
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_before_after')->row();
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_before_after')->result();
    }

    public function list_before_after(){
		
        $query = $this->db->query("SELECT * FROM tbl_before_after WHERE status = 0 ORDER BY id DESC limit 3");
        return $query->result();
    }

    public function getbanner($id = NULL) {
		
        $this->db->where('status', 0);
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_banner')->row();
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_banner')->result();
    }

    public function list_banner(){
		
        $query = $this->db->query("SELECT * FROM tbl_banner WHERE status = 0");
        return $query->result();
    }

    public function edit_video($id)
    {
        $query = $this->db->get_where('tbl_video', array('id' => $id));
        return $query->row();
    }

}