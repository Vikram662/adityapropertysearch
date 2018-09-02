<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{
		$data['view'] = 'agent/project/list';
		$this->load->view('agent/layout', $data, FALSE);	
	}

	public function add_new()
    {
        $data['view'] = 'agent/project/new';
        $this->load->view('agent/layout', $data, FALSE);
    }
    public function add($id="")
    {
    	 $post = $this->input->post();
         $post['user_id'] = $this->session->userdata('id');
        $name = 'aditya-property'.time();

        if($id){
            if(!empty($_FILES['fet']['name'])){
                $name = 'aditya-property'.time();
                $config['upload_path'] = './uploads/';
                $config['file_name'] = $name.'.jpg';
                $config['file_path'] = './uploads/'.$name.'.jpg';
                $config['max-size'] = 2000;
                $config['overwrite'] = TRUE;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fet')){

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }else{
                    $resize['source_image'] = '/uploads/'.$config['file_name'];
                    $resize['new_image'] = './uploads/';
                    $resize['file_path'] = './uploads/'.$name.'.jpg';
                    $resize['create_thumb'] = false;
                    $resize['maintain_ratio'] = true;
                    $resize['width'] = 350;
                    $resize['quality'] = '70%';
                    $resize['height'] = 300;
                    $resize['overwrite'] = TRUE;
                    $this->load->library('image_lib', $resize);
                    $this->image_lib->resize();
                    $this->load->library('upload', $resize);
                    $post['featured_image']=$resize['file_path'];
                   
                }
             }
             if(!empty($_FILES['banner']['name'])){
                $name = 'aditya-property'.time();
                $config['upload_path'] = './uploads/';
                $config['file_name'] = $name.'.jpg';
                $config['file_path'] = './uploads/'.$name.'.jpg';
                $config['max-size'] = 2000;
                $config['overwrite'] = TRUE;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('banner')){

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }else{
                    $resize['source_image'] = '/uploads/'.$config['file_name'];
                    $resize['new_image'] = './uploads/';
                    $resize['file_path'] = './uploads/'.$name.'.jpg';
                    $resize['create_thumb'] = false;
                    $resize['maintain_ratio'] = true;
                    $resize['width'] = 1980;
                    $resize['quality'] = '70%';
                    $resize['height'] = 800;
                    $resize['overwrite'] = TRUE;
                    $this->load->library('image_lib', $resize);
                    $this->image_lib->resize();
                    $this->load->library('upload', $resize);
                    $post['banner_image']=$resize['file_path'];
                   
                }
             }
              $this->db->where('id',$id)->update('project',$post);
               redirect(base_url('agent/project/project_detail/'.$id));
        }else{
            
           if(!empty($_FILES['fet']['name'])){
                $name = 'aditya-property'.time();
                $config['upload_path'] = './uploads/';
                $config['file_name'] = $name.'.jpg';
                $config['file_path'] = './uploads/'.$name.'.jpg';
                $config['max-size'] = 2000;
                $config['overwrite'] = TRUE;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fet')){

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }else{
                    $resize['source_image'] = '/uploads/'.$config['file_name'];
                    $resize['new_image'] = './uploads/';
                    $resize['file_path'] = './uploads/'.$name.'.jpg';
                    $resize['create_thumb'] = false;
                    $resize['maintain_ratio'] = true;
                    $resize['width'] = 350;
                    $resize['quality'] = '70%';
                    $resize['height'] = 300;
                    $resize['overwrite'] = TRUE;
                    $this->load->library('image_lib', $resize);
                    $this->image_lib->resize();
                    $this->load->library('upload', $resize);
                    $post['featured_image']=$resize['file_path'];
                   
                }
             }
             if(!empty($_FILES['banner']['name'])){
                $name = 'aditya-property'.time();
                $config['upload_path'] = './uploads/';
                $config['file_name'] = $name.'.jpg';
                $config['file_path'] = './uploads/'.$name.'.jpg';
                $config['max-size'] = 2000;
                $config['overwrite'] = TRUE;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('banner')){

                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }else{
                    $resize['source_image'] = '/uploads/'.$config['file_name'];
                    $resize['new_image'] = './uploads/';
                    $resize['file_path'] = './uploads/'.$name.'.jpg';
                    $resize['create_thumb'] = false;
                    $resize['maintain_ratio'] = true;
                    $resize['width'] = 1920;
                    $resize['quality'] = '70%';
                    $resize['height'] = 800;
                    $resize['overwrite'] = TRUE;
                    $this->load->library('image_lib', $resize);
                    $this->image_lib->resize();
                    $this->load->library('upload', $resize);
                    $post['banner_image']=$resize['file_path'];
                   
                }
             }
             $post['date'] = date('Y-m-d');
              $this->db->insert('project',$post);
              $id=$this->db->insert_id();
               redirect(base_url('agent/project/project_detail/'.$id));
        }
    }
    
    public function project_detail($id="")
    {
    	$data['view'] = 'agent/project/project_detail';
    	$this->load->view('agent/layout', $data, FALSE);
    }

    public function delete($id='')
    {
        if($this->db->where(['id'=>$id])->delete('project')){
            $this->session->set_flashdata('msg', 'Project Delete Successfully');
          
           return redirect(base_url('agent/project'),'refresh');
        }else{
            $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('agent/project'),'refresh');
        }
    }

    public function status($id='',$st="")
    {
        $q= $this->db->where('id',$id)->update('project',['status'=>$st]);
            if($q){
                $this->session->set_flashdata('msg', 'Status Change Successfully');
            }else{
                    $this->session->set_flashdata('err', 'Serror Error');
            }
        redirect(base_url('agent/project'),'refresh');
    }
}

/* End of file Project.php */
/* Location: ./application/controllers/agent/Project.php */