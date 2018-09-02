<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms {

        public function testmsg($msg_paid='',$url='')
        {
        	if($url==1)
			{
				$username = 'adityasoni';
				$password = 'aditya1';
				$senderid = 'ADITYA';
				$url_paid = 'http://buzz.cloudsmsindia.com/http-api.php?username='.$username.'&password='.$password.'&senderid='.$senderid.'&route=7&number=8824398932&message='.urlencode($msg_paid);				
			}elseif($url==2)
			{
				$url_paid = 'http://198.24.149.4/API/pushsms.aspx?loginID=soni234&password=123456&mobile=8824398932&text='.urlencode($msg_paid).'&senderid=ADITYA&route_id=2&Unicode=0';
				
			}
			
			 $msg1 = curl_init();
			curl_setopt( $msg1, CURLOPT_URL, $url_paid );
			curl_setopt( $msg1, CURLOPT_RETURNTRANSFER, true );		
			 $result = curl_exec( $msg1 );
        }
       public function ackmsg($msg="", $no='')
       {
       		$username = 'adityasoni';
				$password = 'aditya1';
				$senderid = 'ADITYA';
				$url_paid = 'http://buzz.cloudsmsindia.com/http-api.php?username='.$username.'&password='.$password.'&senderid='.$senderid.'&route=7&number='.$no.'&message='.urlencode($mdg);	
				 $msg1 = curl_init();
			curl_setopt( $msg1, CURLOPT_URL, $url_paid );
			curl_setopt( $msg1, CURLOPT_RETURNTRANSFER, true );		
			 $result = curl_exec( $msg1 );
       }

       public function sendsms($msg_paid='',$no='')
       {
       		$username = 'adityasoni';
			$password = 'aditya1';
			$senderid = 'ADITYA';
			$url_paid = 'http://buzz.cloudsmsindia.com/http-api.php?username='.$username.'&password='.$password.'&senderid='.$senderid.'&route=7&number='.$no.'&message='.urlencode($msg_paid);	
			 $msg1 = curl_init();
			curl_setopt( $msg1, CURLOPT_URL, $url_paid );
			curl_setopt( $msg1, CURLOPT_RETURNTRANSFER, true );		
			 $result = curl_exec( $msg1 );	
			 return $result;
       }
     
}