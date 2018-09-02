<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		  $this->load->library('auth');
        $this->auth->admin();
	}
	public function index()
	{
		$data['view'] = 'admin/adver/ad';
		$this->load->view('admin/layout', $data, FALSE);
	}
	public function addnew()
	{
		$data['view'] = 'admin/adver/newad';
		$this->load->view('admin/layout', $data, FALSE);
	}

	public function edit($id="")
	{
		$data['view'] = 'admin/adver/newad';
		$this->load->view('admin/layout', $data, FALSE);
	}

	public function delete($id="")
	{
		$q=$this->db->where('id',$id)->delete('advertisement');
		 if($q) 
        { $this->session->set_flashdata('msg', 'Advertisement delete Successfully');
           return redirect(base_url('admincp/ad'),'refresh');
        }else{
            $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('admincp/ad'),'refresh');
        }
	}

	public function add($id="")
	{
		$post = $this->input->post();
        $name = 'aditya-property-banner'.time();

        if($id){
            if(!empty($_FILES['img']['name'])){
                $name = 'aditya-property'.time();
                $config['upload_path'] = './uploads/';
                $config['file_name'] = $name.'.jpg';
                $config['file_path'] = './uploads/'.$name.'.jpg';
                $config['max-size'] = 2000;
                $config['overwrite'] = TRUE;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('img')){

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }else{
                    $resize['source_image'] = '/uploads/'.$config['file_name'];
                    $resize['new_image'] = './uploads/';
                    $resize['file_path'] = './uploads/'.$name.'.jpg';
                    $resize['create_thumb'] = false;
                    $resize['maintain_ratio'] = true;
                    $resize['quality'] = '70%';
                    $resize['width'] = 1920;
                    $resize['height'] = 800;
                    $resize['overwrite'] = TRUE;
                    $this->load->library('image_lib', $resize);
                    $this->image_lib->resize();
                    $this->load->library('upload', $resize);
                    $post['banner_image']=$resize['file_path'];
                   
                }
             }
              	$post['s_date']= date('Y-m-d',strtotime($post['s_date']));
		               	$post['e_date']= date('Y-m-d',strtotime($post['e_date']));
               $q=$this->db->where('id',$id)->update('advertisement', $post);
               if($q){
               	$this->session->set_flashdata('msg', 'Update successfully');
               }else{
               		$this->session->set_flashdata('err', 'server error');
               }
             
               redirect(base_url('admincp/ad'));
        }else{
             if(!empty($_FILES['img']['name'])){
             		 $config['upload_path'] = './uploads/';
		            $config['file_name'] = $name.'.jpg';
		            $config['file_path'] = './uploads/'.$name.'.jpg';
		            $config['max-size'] = 2000;
		            $config['overwrite'] = TRUE;
		            $config['allowed_types'] = 'gif|jpg|png|jpeg';
		            $config['remove_spaces'] = true;
		            $config['max_width'] = 2000;
		            $config['max_height'] = 3000;
		            $this->load->library('upload', $config);

		            if ( ! $this->upload->do_upload('img')){

		                    $error = array('error' => $this->upload->display_errors());
		                    print_r($error);
		            }else{
		                $resize['source_image'] = '/uploads/'.$config['file_name'];
		                $resize['new_image'] = './uploads/';
		                $resize['file_path'] = './uploads/'.$name.'.jpg';
		                $resize['create_thumb'] = false;
		                $resize['maintain_ratio'] = true;
		                $resize['width'] = 1920;
		                $resize['height'] = 800;
		                $resize['quality'] = '70%';
		                $resize['overwrite'] = TRUE;
		                $this->load->library('image_lib', $resize);
		                $this->image_lib->resize();
		                $this->load->library('upload', $resize);
		                $post['banner_image']=$resize['file_path'];
		               	$post['s_date']= date('Y-m-d',strtotime($post['s_date']));
		               	$post['e_date']= date('Y-m-d',strtotime($post['e_date']));
		                 $q=$this->db->insert('advertisement', $post);
			               if($q){
			               	$this->session->set_flashdata('msg', 'Add successfully');
			               }else{
			               		$this->session->set_flashdata('err', 'server error');
			               }
			            
			              redirect(base_url('admincp/ad'));
             }
           
            }
        }

		$q= $this->db->insert('advertisement', $post);
	}

}

/* End of file Ad.php */
/* Location: ./application/controllers/admincp/Ad.php */