<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lp extends CI_Controller {
  
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('common');
        $this->load->library('form_validation');
        $this->load->model("Faq_model");
        $this->load->model('Event_model');
        $this->load->library('pagination');  
        $this->load->library('session');
    }

    
    public function index(){
         
       //loading view
       $this->load->view('lp');
   }

   public function send_email(){
       $this->form_validation->set_rules('fast_name', '姓', 'required', 
                                        array('required' => '%sは必須項目です')
                                        );
       $this->form_validation->set_rules('last_name', '名', 'required', 
                                         array('required' => '%sは必須項目です')
                                         );
       $this->form_validation->set_rules('number', '人数', 'required', 
                                         array('required' =>  '%sは必須項目です')
                                         );
       $this->form_validation->set_rules('checkin_date', 'チェックイン日', 'required', 
                                         array('required' =>  '%sは必須項目です')
                                         );
       $this->form_validation->set_rules('checkout_date', 'チェックアウト日', 'required', 
                                         array('required' => '%sは必須項目です')
                                         );
       $this->form_validation->set_rules('hostel', '宿泊施設', 'required',
                                         array('required' => '%sは必須項目です')
                                         );
       $this->form_validation->set_rules(
           'phone_num', 
           '電話番号', 
           'required|integer',
           array(
             'required' => '%sは必須項目です',
             'integer' =>'%sはハイフン抜きの数字のみで入力してください'
           )
       );
       $this->form_validation->set_rules(
           'mail', 
           'メールアドレス', 
           'required|valid_email',
           array(
             'required' => '%sは必須項目です',
             'valid_email' => 'メールアドレスの形式で入力してください'
           )
       );

       $res = $this->form_validation->run();
       if(!$res){
         $this->load->view('lp');
       }else{
         $data['message'] = 'ご希望情報が送信されました。リクエスト誠にありがとうございます。';
         
         $this->load->library('parser');
     
         $config['protocol'] = 'sendemail';
         $config['mailpath'] = '/usr/sbin/sendemail';
         
         $this->load->library('email', $config);
          
         $this->email->from(set_value('mail'), set_value('fast_name'), set_value('last_name'));
         $this->email->to('info@7garden.co.jp');
         $this->email->subject('7garden | ご予約のお問い合わせです。');
         
         $this->email->message(
             set_value('number'), set_value('checkin_date'), 
             set_value('checkout_date'), set_value('hostel'),
             set_value('phone_num')
         );
        
         $this->email->send();
         $this->load->view('lp_thanks', $data);
       }
   }

 }

?>



