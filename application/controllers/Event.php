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
        $this->load->library('pagination');  
        $this->load->library('session');
        $s_id = $this->session->userdata('s_id');
        if (empty($s_id)) {
            redirect('login/index');
        }
        $this->hobby    = $this->session->userdata('hobby');
        $this->username = $this->session->userdata('username');
    }

    
    public function index(){
         

       $data['test'] = 'test';
       //loading view
       $this->load->view('event/index',$data);
   }    



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
