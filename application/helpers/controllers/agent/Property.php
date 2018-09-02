<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
         $this->load->model('Admin_model');
           $this->load->library('auth');
         $this->auth->agent();
        $this->load->model('agent_model');
    }

    public function index()
    {
        $data['view'] = 'agent/property/property_list';
        $this->load->view('agent/layout', $data, FALSE);
        
    }
    public function add_new()
    {
        $data['view'] = 'agent/property/addproperty';
        $this->load->view('agent/layout', $data, FALSE);
    }
    
    public function add($id='')
    {
        $post = $this->input->post();
         $post['user_id'] = $this->session->userdata('id');
        $name = 'aditya-property'.time();

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
              $this->agent_model->update_detail($post,$id);
               redirect(base_url('agent/property/property_detail/'.$id));
        }else{
            
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
                $resize['width'] = 350;
                $resize['quality'] = '70%';
                $resize['height'] = 300;
                $resize['overwrite'] = TRUE;
                $this->load->library('image_lib', $resize);
                $this->image_lib->resize();
                $this->load->library('upload', $resize);
                $post['featured_image  ']=$resize['file_path'];
                $post['create_date']=date('Y-m-d H:i:s');
                $id=  $this->agent_model->add_porperty($post);
                redirect(base_url('agent/property/property_detail/'.$id));
            }
        }
    }
    public function property_detail($id='')
    {
       $data['view'] = 'agent/property/property_detail';
        $this->load->view('agent/layout', $data, FALSE);   
    }
    public function update($id='')
    {
            $post = $this->input->post();
            $this->admin_model->update_detail($post,$id);
        
            $cpt = count($_FILES['img']['name']);
           
              $data = array();
        // If file upload form submitted
        if(!empty($_FILES['img']['name'])){
             $filesCount = count($_FILES['img']['name']);

            for($i = 0; $i < $filesCount; $i++){
               
                $_FILES['file']['name']     = $_FILES['img']['name'][$i];
                $_FILES['file']['type']     = $_FILES['img']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['img']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['img']['error'][$i];
                $_FILES['file']['size']     = $_FILES['img']['size'][$i];
               
                // File upload configuration
                $name = 'aditya-property'.time().$i;
                $config['upload_path'] = './uploads/';
                $config['file_name'] = $name.'.jpg';
                $config['file_path'] = './uploads/'.$name.'.jpg';
                $config['max-size'] = 2000;
                $config['overwrite'] = TRUE;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['remove_spaces'] = true;
                $config['max_width'] = 2000;
                $config['max_height'] = 3000;
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('file')){

                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
            }else{
                $resize['source_image'] = '/uploads/'.$config['file_name'];
                $resize['new_image'] = './uploads/';
                $resize['file_path'] = './uploads/'.$name.'.jpg';
                $resize['create_thumb'] = false;
                $resize['maintain_ratio'] = true;
                $resize['quality'] = '70%';
                $resize['width'] = 350;
                $resize['height'] = 300;
                $resize['overwrite'] = TRUE;
                $this->load->library('image_lib', $resize);
                $this->image_lib->resize();
                $this->load->library('upload', $resize);
                $img['image']=$resize['file_path'];
                $img['property_id']=$id;
                $img['create_date'] = date('y-m-d H:i:s');
                $this->agent_model->add_gallery($img);
               
              }
                // Upload file to server

            }
           
        }
    
         redirect(base_url('agent/property/more_filter/'.$id));
    }

    public function test()
    {
         echo  $img['create_date'] = date('y-m-d H:i:s');
    }
    public function delete($id='')
    {
        if($this->db->where(['id'=>$id])->delete('property')){
            $this->session->set_flashdata('msg', 'Property Delete Successfully');
          
           return redirect(base_url('agent/property'),'refresh');
        }else{
            $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('agent/property'),'refresh');
        }
        

    }

   public function more_filter($id="")
    {
         $data['view']='agent/property/more_filter';
        $this->load->view('agent/layout', $data, FALSE);
    }
    public function view($id="")
    {
        $data['view']='agent/property/view';
        $this->load->view('agent/layout', $data, FALSE);
    }
    public function edit($id="")
    {
        $data['view']='agent/property/edit';
        $this->load->view('agent/layout', $data, FALSE);
    }
    public function status($id='',$st="")
    {
        $q= $this->db->where('id',$id)->update('property',['status'=>$st]);
            if($q){
                $this->session->set_flashdata('msg', 'Status Change Successfully');
            }else{
                    $this->session->set_flashdata('err', 'Serror Error');
            }
        redirect(base_url('agent/property'),'refresh');
    }

    public function gallery_del($id="")
    {
         if($this->db->where(['g_id'=>$id])->delete('property_gallery')){
            $this->session->set_flashdata('msg', 'Gallery Delete Successfully');
           return redirect(base_url('agent/property'),'refresh');
        }else{
            $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('agent/property'),'refresh');
        }
        
   
    }
     public function update_filter($id="")
    {
        $post = $this->input->post();
       
       $post['Amenities'] = implode(',', $post['Amenities']);

        $q= $this->admin_model->update_detail($post,$id);
        if($q) 
        { 
            $this->session->set_flashdata('msg', 'Property Fully added Successfully');
           return redirect(base_url('agent/property'),'refresh');
        }else{
            $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('agent/property'),'refresh');
        }
    }
}

/* End of file Property.php */
