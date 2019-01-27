<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
    }

    //ログインのフォームのページ
	public function index()
    {
        $this->load->view('login_index');
    }
    //ログインの実行処理
	public function exec()
    {
        $param['email'] = $this->input->post('email');
        $param['password'] = $this->input->post('password');
        $this->load->model('Admin_model');
        $username = $this->Admin_model->search_admin($param);
        if (!empty($username[0][username])) {
            //ログインさせる
             $sessions['username'] = "yamamoto";
             $sessions['hobby']    = "biliyard";
             $sessions['s_id']      = $this->session->session_id;
             $this->session->set_userdata($sessions);  
             redirect('qa/index');
        } else {
             $this->index();
        }

    }
}

?>
