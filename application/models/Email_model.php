<?php
class Email_model extends CI_Model {

         
        public function send_email($title, $message, $email){
            $this->load->library('email');

            $this->config->load('email');
            $from = $this->config->item('from');
            $from_name = $this->config->item('from_name');

            $this->email->from($from, $from_name );
          
            if(is_array($email) && !empty($email)){
                implode(',', $email);
            }

            $this->email->to($email);

            $this->email->subject($title);
            $this->email->message($message);

            $res = $this->email->send();
            return $res;
        }


}
?>
