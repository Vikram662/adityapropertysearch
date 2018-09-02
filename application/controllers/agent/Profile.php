<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('auth');
         $this->auth->agent();
	}

    public function index()
    {
        $data['view'] = 'agent/profile';
        $this->load->view('agent/layout', $data, FALSE);
        
    }
    public function update($id="")
    {
        $data = $this->input->post();
        $data['password']= $this->encryption->encrypt( $data['password']);
        if(!empty($_FILES['img']['name'])){
                $name = '-users'.time();
                $config['upload_path'] = './uploads/users';
                $config['file_name'] = $name.'.jpg';
                $config['file_path'] = './uploads/users/'.$name.'.jpg';
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
                    $resize['source_image'] = '/uploads/users/'.$config['file_name'];
                    $resize['new_image'] = './uploads/users';
                    $resize['file_path'] = './uploads/users/'.$name.'.jpg';
                    $resize['create_thumb'] = false;
                    $resize['maintain_ratio'] = true;
                    $resize['width'] = 350;
                    $resize['quality'] = '70%';
                    $resize['height'] = 300;
                    $resize['overwrite'] = TRUE;
                    $this->load->library('image_lib', $resize);
                    $this->image_lib->resize();
                    $this->load->library('upload', $resize);
                    $data['img']=$resize['file_path'];
                   $q=  $this->db->where('id',$id)->update('users', $data);
                 if($q){
                      $this->session->set_flashdata('msg', 'Profile Update');
                 }else{
                       $this->session->set_flashdata('err', 'error in submission');
                 }
                 
                  redirect(base_url('agent/profile'),'refresh');
                          }
             }else{
              $q=  $this->db->where('id',$id)->update('users', $data);
             if($q){
                  $this->session->set_flashdata('msg', 'Profile Update');
             }else{
                   $this->session->set_flashdata('err', 'error in submission');
             }
             
        redirect(base_url('agent/profile'),'refresh');
             }
       
    }

}

/* End of file Profile.php */
