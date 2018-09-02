<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	public function __construct(){
		parent::__construct();
		 $data = $this->session->userdata();
		 if($data['type']!='admin')
			{
				redirect('shop_admin/auth/login');
			}
		$this->load->model('admin/app_model', 'adverrtise');
	}
	public function index()
	{
		$data['all_ad'] =  $this->adverrtise->get_advertise();
		$data['view'] = 'admin/app/advertise';
			$this->load->view('admin/layout', $data);
	}
	public function add()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
			$this->form_validation->set_rules('end_date','End Date', 'trim|required');
			$this->form_validation->set_rules('amount', 'Amount', 'trim|required');
			$this->form_validation->set_rules('type', 'Position', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$data['view'] = 'admin/app/add_add';
				$this->load->view('admin/layout', $data);
			} else {
				$config['upload_path'] = './grubag/advertise_image/';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $this->load->library('upload', $config);  
                if(!$this->upload->do_upload('userfile'))  
                {  
                    $data['msg']= $this->upload->display_errors();  
                   	$data['view'] = 'admin/app/add_add';
					$this->load->view('admin/layout', $data);
                }  
                else  
                { 
                	 $data = $this->upload->data();  
                     $config['image_library'] = 'gd2';  
                     $config['source_image'] = './grubag/advertise_image/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '100%';  
                     $config['width'] = 360;  
                     $config['height'] = 240;  
                     $config['new_image'] = './grubag/advertise_image/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                     if($this->image_lib->resize())
                     {
                     	$post = $this->input->post();
						unset($post['submit']);
                        $post['image']=$data['file_name'];
                     	$post = $this->security->xss_clean($post);
						$result = $this->adverrtise->add_advertise($post);
						if($result){
							$this->session->set_flashdata('msg', 'Advertisement is Added Successfully!');
							redirect(base_url('admin/app'));
						}
                     }
                } 
			}
		}
		$data['view'] = 'admin/app/add_add';
		$this->load->view('admin/layout', $data);
	}
	
	public function status()
	{
		$st = $this->uri->segment(4);
		$id = $this->uri->segment(5);
		$this->db->where(['ad_id'=>$id])->update('advertise_app',['status'=>$st]);
		$this->session->set_flashdata('msg', 'Advertisement Successfully '.$st);
		redirect(base_url('admin/app'),'refresh');
	}
	public function del($id)
	{
		$this->db->where(['ad_id'=>$id])->delete('advertise_app');
		$this->session->set_flashdata('msg', 'Advertisement Deleted ');
		redirect(base_url('admin/app'),'refresh');

	}
	public function edit($id)
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
			$this->form_validation->set_rules('end_date','End Date', 'trim|required');
			$this->form_validation->set_rules('amount', 'Amount', 'trim|required');
			$this->form_validation->set_rules('type', 'Position', 'trim|required');
			$this->form_validation->set_rules('phone', 'Mobile', 'trim|min_length[10]|max_length[13]');
			if ($this->form_validation->run() == FALSE) {
				$data['view'] = 'admin/app/edit_advertise';
				$this->load->view('admin/layout', $data);
			} else {
				$config['upload_path'] = './grubag/advertise_image/';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $this->load->library('upload', $config);  
                if(!$this->upload->do_upload('userfile'))  
                {  
                	$post = $this->input->post();
                	unset($post['submit']);
                   	$post = $this->security->xss_clean($post);
					$result = $this->adverrtise->edit_advertise($post,$id);
					if($result){
							$this->session->set_flashdata('msg', 'Advertisement is Update Successfully!');
							redirect(base_url('admin/app'));
						}
                }  
                else  
                { 
                	 $data = $this->upload->data();  
                     $config['image_library'] = 'gd2';  
                     $config['source_image'] = './grubag/advertise_image/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '100%';  
                     $config['width'] = 360;  
                     $config['height'] = 240;  
                     $config['new_image'] = './grubag/advertise_image/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                     if($this->image_lib->resize())
                     {
                     	$post = $this->input->post();
						unset($post['submit']);
                        $post['image']=$data['file_name'];
                     	$post = $this->security->xss_clean($post);
						$result = $this->adverrtise->edit_advertise($post,$id);
						if($result){
							$this->session->set_flashdata('msg', 'Advertisement is Update Successfully!');
							redirect(base_url('admin/app'));
						}
                     }
                } 
			}	
		}else
		{
			$data['advertise'] =  $this->adverrtise->get_advertise_by_id($id);
			$data['view'] = 'admin/app/edit_advertise';
			$this->load->view('admin/layout', $data);	
		}
		
	}
}

/* End of file Site.php */
/* Location: ./application/controllers/admin/Site.php */