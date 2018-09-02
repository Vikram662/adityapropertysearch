<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail {

	public function __construct()
	{
		 $this->CI =& get_instance();
		
	}

	public function send($to="",$sub="",$msg="")
	{
		 $config = Array(        
            'protocol' => 'smtp',
            'smtp_host' => 'server.adityarealgroup.com',
            'smtp_port' => 25,
            'smtp_user' => 'vikram@darachyeta.in',
            'smtp_pass' => 'pS8239110447',
            'smtp_timeout' => '4',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );       
		 $config['newline'] = "\r\n";
			$config['crlf'] = "\r\n";
		     $this->CI->load->library('email', $config);
			 $this->CI->email->set_newline("\r\n");
	         $this->CI->email->from('info@adityapropertysearch.com ', 'Adiya Property');
	         $this->CI->email->to($to); 
	         $this->CI->email->subject($sub);
	         $this->CI->email->message($msg);  
	        if( $this->CI->email->send()){return TRUE ;}else{return FALSE;}

	}

}

/* End of file Email_send.php */
/* Location: .//C/Users/Admin/AppData/Local/Temp/fz3temp-3/Email_send.php */