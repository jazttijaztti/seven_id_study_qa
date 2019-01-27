<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('common');
        $this->load->library('form_validation');
        $this->load->model("Admin_model");
        $this->load->library('pagination');  
        $this->load->library('session');
        $s_id = $this->session->userdata('s_id');
        if (empty($s_id)) {
            redirect('login/index');
        }
    }

    //adminの一覧ページ
	public function index($page = 0)
    {

        //ページングのためのライブラリを読み込みます。
        $page_config['base_url'] = base_url('admin/index');
        $page_config['total_rows'] = $this->Admin_model->count_admin();
        $page_config['per_page'] = 10;
        $this->pagination->initialize($page_config);


        //一覧取得のためのパラメータをモデルに渡します。
        $param['limit'] = $page_config['per_page'];
        $param['offset'] = $page * $page_config['per_page'];
        $data['admin'] = $this->Admin_model->get_admin($param);
        //viewに値を渡します.
		$this->load->view('admin_index',$data);
	}

    //QAの入力画面
    public function create(){
		$this->load->view('admin_create');
    }

    //QAの登録処理
    public function register(){

           $data['username'] = $this->input->post('username');
           $data['password'] = $this->input->post('password');
           $data['email'] = $this->input->post('email');
           $data['hobby'] = $this->input->post('hobby');
           $this->db->insert('admin', $data);
           $this->load->view('admin_register');

    }


    //QAの詳細画面
    public function detail($id) {
        $param["id"] = $id;
        $res = $this->Admin_model->get_admin($param);
        
        $data = $res[0];
        if (!empty($res[0])) {
           $data = $res[0];
           $this->load->view('admin_detail',$data); 
        } else {
           redirect('admin/index');
           exit;
        }
    }

    //QAの編集画面
    public function edit($id) {
        $param["id"] = $id;
        $res = $this->Admin_model->get_admin($param);
        
        if (!empty($res[0])) {
           $data = $res[0];
           $this->load->view('admin_edit',$data);
        } else {
           redirect('admin/index');
           exit;
        }

    }
    
    //QAの更新処理
    public function update(){
           $data['username'] = $this->input->post('username');
           $data['email'] = $this->input->post('email');
           $data['hobby'] = $this->input->post('hobby');
           $id              = $this->input->post('id');
           $this->db->where("id",$id);
           $this->db->update('admin', $data);
           redirect('admin/index');
    }

    //削除
    public function delete($id = false){
        if (!$id) {
           redirect('admin/index');
        }
        $data['delete_flg'] = 1;
        $this->db->where('id',$id);
        $res = $this->db->update('admin',$data);
        if($res) {
           redirect('admin/index');
        } else {
           echo "削除できませんでした";
           exit;
        }
    }

   public function search() {
        $keyword = $this->input->post('search');
        $data['admin'] = $this->Admin_model->search_keyword($keyword);

        //viewに値を渡します.
		$this->load->view('admin_index',$data);
      
   }

}
