<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventmanager extends CI_Controller {

    public $permission_status = "";
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
        $this->permission_status = $this->session->userdata('permission_status');
        if (empty($s_id)) {
            redirect('login/index');
        }
    }

    
    //イベントの入力画面
    public function create(){
        if ($this->permission_status != 1) {
           redirect('qa/index');
        }
		$this->load->view('admin/event_create');
    }
    
    //イベントの登録
    public function register(){

        //postmの値を受け取る
        $param['hotel_id']    = $this->input->post('hotel_id');
        $param['eventdate']   = $this->input->post('eventdate');
        $param['title']       = $this->input->post('title');
        $param['link']        = $this->input->post('link');
        $param['description'] = $this->input->post('description');

        //外部リンクが設定されていたらリンク先にリダイレクトして飛ばしてしまう
        if (!empty($link)) {
            redirect($link);
        }
        $this->load->model('event_model');
        $new_event_id = $this->event_model->insert($param);
         //画像
        $config['upload_path']   = 'uploads/event';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite']     = TRUE; 
        $this->load->library('upload');
        $this->upload->initialize($config); 
        if (!$this->upload->do_upload('event_img'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/event_create', $error);
        }
        else
        {
            $img_res = array('upload_data' => $this->upload->data());
            if (!empty($img_res['upload_data']['orig_name'])){
               $img_param['event_image'] = $img_res['upload_data']['orig_name'];
               $img_param['event_id'] = $new_event_id;
               $this->event_model->update_image($img_param);
               $config_resize['image_library'] = 'gd2';
               $config_resize['source_image']	= 'uploads/event'.$img_res['upload_data']['orig_name'];
               $config_resize['create_thumb'] = TRUE;
               $config_resize['maintain_ratio'] = TRUE;
               $config_resize['width']  = 296;
               $config_resize['height'] = 218;

               $this->load->library('image_lib', $config_resize); 
               $this->image_lib->resize();
            }
        }
         //insertする
         //完了
         $this->load->view('admin_register');

    }





/*
    //adminの一覧ページ
	public function index($page = 0)
    {

        //ページングのためのライブラリを読み込みます
/*
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
        if ($this->permission_status != 1) {
           redirect('qa/index');
        }
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
*/
}
