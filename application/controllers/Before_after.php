<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Before_after extends CI_Controller {

    public function __construct() {
	    parent::__construct();

        if ($this->session->userdata('id') == '') {
            redirect(base_url() . 'Nirvakam');
        }

        $this->data['theme'] = 'Nirvakam';
        $this->data['module'] = 'before_after';
        $this->data['page'] = '';
        $this->data['base_url'] = base_url();

        $this->load->model('Common_model', 'Common');
        $this->load->model('Before_after_model', 'before_after');

    }

    public function index() {
		
        $this->data['page'] = 'before_after_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function before_after_list(){
        $this->data['before_after'] = $this->Common->get_records("tbl_before_after","*",array('status' => 0));
        $this->data['page'] = 'before_after_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function before_after_save() {
		
        $id = $where['id'] = $this->input->post('id');
        $values['name'] = $this->input->post('name');
        $values['text'] = $this->input->post('text');
        $values['alt_name'] = $this->input->post('alt_name');

        if (isset($_FILES['before_image']['name']) && !empty($_FILES['before_image']['name'])) {
            $config['upload_path'] = 'uploads/before_after';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('before_image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('before_after_create');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['before_image'] = $data['upload_data']['file_name'];
            }
        }

        if (isset($_FILES['after_image']['name']) && !empty($_FILES['after_image']['name'])) {
            $config['upload_path'] = 'uploads/before_after';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('after_image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('before_after_create');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['after_image'] = $data['upload_data']['file_name'];
            }
        }

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/before_after';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('before_after_create');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['image'] = $data['upload_data']['file_name'];
            }
        }
		if(!empty($id)){
			$insert_id = $this->Common->update('tbl_before_after',$values,$where);
			$this->session->set_flashdata('success', 'Before & After updated successfully.');
		}else{
			$insert_id = $this->Common->insert('tbl_before_after',$values);
			$this->session->set_flashdata('success', 'Before & After added successfully.');
		}
		
        redirect("before_after_list");
    }

    public function before_after_edit($id = NULL) {
		 
        $this->data['before_after'] = null;

		if ($id) {
            $this->data['before_after'] = $this->before_after->getbeforeafter($id);
        }
		
        $this->data['page'] = 'before_after_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function before_after_delete($id){

        $where['id'] = $id;
		$values['status'] = 1;
		$this->Common->update('tbl_before_after', $values, $where);
		$this->session->set_flashdata('success', 'Before & After deleted successfully');
		redirect("before_after_list");
	}

}