<?php
class Email_model extends CI_Model {

  public function send_email($title, $message, $data){
    $this->load->library('email');

$this->email->initialize(array(
  'protocol' => 'sendmail'
));
    $this->email->from($data['email'], $data['name']);
    $this->email->to('info@7garden.co.jp');
    $this->email->subject($title);
    $this->email->message($message);

    $res = $this->email->send();
    return $res;
  }          

}
?>
