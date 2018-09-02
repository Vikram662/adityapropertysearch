<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amenities extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //Do your magic here
          $this->load->library('auth');
        $this->auth->admin();
        $this->load->model('Admin_model');
    }
	public function index()
	{
		 $data['view'] = 'admin/amenities';
        $this->load->view('admin/layout', $data, FALSE);
	}

	public function add()
	{
		$post = $this->input->post();
		$q = $this->db->insert('amenities', $post);
		 if($q) 
        { $this->session->set_flashdata('msg', 'Amenities add Successfully');
           return redirect(base_url('admincp/amenities'),'refresh');
        }else{
            $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('admincp/amenities'),'refresh');
        }
	}
	public function delete($id="")
	{
		$q=$this->db->where('id',$id)->delete('amenities');
		 if($q) 
        { $this->session->set_flashdata('msg', 'Amenities delete Successfully');
           return redirect(base_url('admincp/amenities'),'refresh');
        }else{
            $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('admincp/amenities'),'refresh');
        }
	}
}

/* End of file Amenities.php */
/* Location: ./application/controllers/admincp/Amenities.php */