<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller {

	public function index()
	{
		$data['view'] = 'admin/city';
		$this->load->view('admin/layout', $data, FALSE);
	}
	public function status($st='',$id="")
    {
        $q= $this->db->where('city_id',$id)->update('city',['status'=>$st]);
            if($q){
                $this->session->set_flashdata('msg', 'Status Change Successfully');
            }else{
                    $this->session->set_flashdata('err', 'Serror Error');
            }
         // echo $this->db->last_query();
        redirect(base_url('admincp/place'),'refresh');
    }

    public function locality($id="")
    {
    	$data['view'] = 'admin/locality';
		$this->load->view('admin/layout', $data, FALSE);	
    }
    public function delete_loc($id="")
    {
    	 if($this->db->where(['id'=>$id])->delete('locality')){
            $this->session->set_flashdata('msg', 'locality Delete Successfully');
          
           return redirect(base_url('admincp/place/locality/'.$id),'refresh');
        }else{
            $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('admincp/place/locality/'.$id),'refresh');
        }
    }

    public function new_loc($id="")
    {
    	$post = $this->input->post();
    	$q = $this->db->insert('locality', $post);
    	if($q){
    		 $this->session->set_flashdata('msg', 'locality Added Successfully');
          
           return redirect(base_url('admincp/place/locality/'.$id),'refresh');
    	}else{
    		 $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('admincp/place/locality/'.$id),'refresh');
    	}
    }
    public function edit_loc($id="",$loc="")
    {
    	$post = $this->input->post();
    	$q = $this->db->where('id',$loc)->update('locality', $post);
    	if($q){
    		 $this->session->set_flashdata('msg', 'locality Update Successfully');
          
           return redirect(base_url('admincp/place/locality/'.$id),'refresh');
    	}else{
    		 $this->session->set_flashdata('err', 'Server Error');
            return redirect(base_url('admincp/place/locality/'.$id),'refresh');
    	}
    }
}

/* End of file Place.php */
/* Location: ./application/controllers/admincp/Place.php */