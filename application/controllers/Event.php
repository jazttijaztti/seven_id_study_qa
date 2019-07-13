<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    public $hobby = "";
    public $username = "";
  
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

    
<<<<<<< HEAD
   public function index($page = 0){
     $param['limit'] = 5;
     $param['order_by'] = 'DESC';
     $data['event'] = $this->Event_model->get_event_top($param);
     $data['finished_event'] = $this->Event_model->get_finished_event_top();
     //loading view
     $this->load->view('event/index',$data); 
   }

   public function space(){
     $this->load->view('event/space_kikka');
   } 

   public function eventIndex($page = 0){
=======
    public function index($page = 0){
         
       //一覧取得のためのパラメータをモデルに渡す
       $param['limit'] = 5;
       $param['order_by'] = 'DESC';
       $data['event'] = $this->Event_model->get_event_top($param);
       $data['finished_event'] = $this->Event_model->get_finished_event_top();
       //loading view
       $this->load->view('event/index',$data);
   }

   public function space(){
       $this->load->view('event/space_kikka');
   }    

   public function eventIndex($page=0){
>>>>>>> a210226716a03d3a834e5dcbb85ba151a18f01e5
       $page_config['base_url'] = base_url('event/eventIndex');
       $where['delete_flg'] = 0;
       $page_config['total_rows'] = $this->Event_model->total_rows($where);
       $page_config['per_page'] = 10;
       $page_config['user_page_numbers'] = TRUE;
       //一覧取得のためのパラメータをモデルに渡す
       $param['limit'] = $page_config['per_page'];
       $param['offset'] = $page;
       $param['order_by'] = 'DESC';
       $data['event'] = $this->Event_model->get_event($param);
       $data['finished_event'] = $this->Event_model->get_finished_event();
       $this->pagination->initialize($page_config);
       $data['page_links'] = $this->pagination->create_links();
       $this->load->view('event/event-index', $data);
   }
<<<<<<< HEAD

   public function contact(){
       $this->load->view('event/contact_form');
   }

   public function confirm(){
     $valid_param = $this->_form_validation();
     if($valid_param == FALSE){
       $this->contact();
       exit;
     }else{
       $this->load->model('Email_model');

       $data = array();
       $data['name']  = $this->input->post('name');
       $data['email'] = $this->input->post('email');
       $data['phone_num'] = $this->input->post('phone_num');
       $data['content'] = $this->input->post('content');

       $this->load->library('parser');
       
       $title = 'イベントサイトよりお問い合わせを受け付けました';
       $message = $this->parser->parse('event/email/contact', $data, TRUE);	
       
       $result = $this->Email_model->send_email($title, $message, $data);
       if(!$result){
         $this->index();
         exit;
       }else{
         $this->index();
       }
     }

   }

   public function _form_validation(){
     $this->form_validation->set_rules('name', 'お名前', 'required');
     $this->form_validation->set_rules('email', 'メールアドレス', 'required');
     $this->form_validation->set_rules('phone_num', '電話番号', 'required');
     $this->form_validation->set_rules('content', 'お問い合わせ内容', 'required');

     $res = $this->form_validation->run();
     return $res;
   }

=======
>>>>>>> a210226716a03d3a834e5dcbb85ba151a18f01e5

/*
    //QAの一覧ページ
	public function index($page = 0)
    {

        //ページングのためのライブラリを読み込みます。
/*
        $page_config['base_url'] = base_url('qa/index');
        $page_config['total_rows'] = $this->Faq_model->count_faq();
        $page_config['per_page'] = 10;
        $this->pagination->initialize($page_config);


        //一覧取得のためのパラメータをモデルに渡します。
        $param['limit'] = $page_config['per_page'];
        $param['offset'] = $page * $page_config['per_page'];
        $data['faq'] = $this->Faq_model->get_faq($param);
        $data['hobby'] = $this->hobby;
        $data['username'] = $this->username;

        //viewに値を渡します.
		$this->load->view('qa_index',$data);
	}

    //QAの入力画面
    public function create(){
		$this->load->view('qa_create');
    }

    //QAの登録処理
    public function register(){
        $this->form_validation->set_rules('question','質問','required');
        $this->form_validation->set_rules('answer','解答','required');

        $res = $this->form_validation->run();
        if ($res) {
           $data['hotel_id'] = $this->input->post('hotel_id');
           $data['question'] = $this->input->post('question');
           $data['answer'] = $this->input->post('answer');

           $this->db->insert('faq', $data);
           $this->load->view('qa_register');
        } else {
           $this->load->view('qa_create');
        }

    }


    //QAの詳細画面
    public function detail($id) {
        $param["id"] = $id;
        $res = $this->Faq_model->get_faq($param);
        
        $data = $res[0];
        if (!empty($res[0])) {
           $data = $res[0];
           $this->load->view('qa_detail',$data); 
        } else {
           redirect('qa/index');
           exit;
        }
    }

    //QAの編集画面
    public function edit($id) {
        $param["id"] = $id;
        $res = $this->Faq_model->get_faq($param);
        
        if (!empty($res[0])) {
           $data = $res[0];
           $this->load->view('qa_edit',$data);
        } else {
           redirect('qa/index');
           exit;
        }

    }
    
    //QAの更新処理
    public function update(){
        $this->form_validation->set_rules('question','質問','required');
        $this->form_validation->set_rules('answer','解答','required');

        $res = $this->form_validation->run();
        if ($res) {
           $data['hotel_id'] = $this->input->post('hotel_id');
           $data['question'] = $this->input->post('question');
           $data['answer'] = $this->input->post('answer');
           $id              = $this->input->post('id');
           $this->db->where("id",$id);
           $this->db->update('faq', $data);
           $this->load->view('qa_register');
        } else {
           $this->load->view('qa_create');
        }
    }

    //削除
    public function delete($id = false){
        if (!$id) {
           redirect('qa/index');
        }
        $data['delete_flg'] = 1;
        $this->db->where('id',$id);
        $res = $this->db->update('faq',$data);
        if($res) {
           redirect('qa/index');
        } else {
           echo "削除できませんでした";
           exit;
        }
    }

   public function search() {
        $keyword = $this->input->post('search');
        $data['faq'] = $this->Faq_model->search_keyword($keyword);

        //viewに値を渡します.
		$this->load->view('qa_index',$data);
      
   }
*/
}
