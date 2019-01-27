<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
    }

    //質問一覧
	public function index()
	{
        $data['qa'] = $this->db->select('*')->from('qa')->get()->result_array();
		$this->load->view('question_index',$data);
	}

    //質問入力
    public function input(){

		$this->load->view('question_input');
    }


    //質問入力
    public function register(){

        $this->form_validation->set_rules('question' ,'質問','required');
        $this->form_validation->set_rules('answer' ,'回答','required');
        $this->form_validation->set_rules('hotel_id' ,'ホテル','required');
        
        $res = $this->form_validation->run();

        if ($res){
          $data['question'] = $this->input->post('question');
          $data['answer'] = $this->input->post('answer');
          $data['hotel_id'] = $this->input->post('hotel_id');
          $res = $this->db->insert('qa', $data);
          if ($res) {
		      $this->load->view('question_regsiter');
          } else {
              echo "失敗したんご";
              exit;
          }
        } else {
		  $this->load->view('question_input');
        }
    }
    

}
