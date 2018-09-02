<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function signup($data)
    {
        $data['password']= $this->encryption->encrypt( $data['password']);
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function get_user($id)
    {
        return $this->db->get_where('users',['id'=>$id])->row();
    }

    public function chcek_user($data)
    {
       $q = $this->db->get_where('users',['email'=>$data['email']])->row();
       if($q){
            if($data['password']==$this->encryption->decrypt($q->password) && $q->status==0){
                $this->db->where(['id'=>$q->id])->update('users',['last_login'=>date('Y-m-d H:i:s')]);
                return $q->id;
            }else{
                return false;
            }
       }else{
        return false;
       }
        
    }

    public function get_user_email($data)
    {
        return $this->db->get_where('users',['email'=>$data])->row();
    }

}

/* End of file Login_model.php */
 
