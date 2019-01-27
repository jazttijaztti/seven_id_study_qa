<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seven extends CI_Controller {
    public function __construct() {
       parent::__construct();
       $this->load->helper('url');
       $this->load->helper('form');
       $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('yamashita_index');
	}

    public function input(){ 
        $this->load->view('seven_input');
    }

    public function result(){
        
        $this->form_validation->set_rules('name', 'ユーザ名', 'required',array('required'=>'%sは必須'));
        $this->form_validation->set_rules('age', '年', 'required' , array('required'=>'%sは必須です'));
        
        $kekka = $this->form_validation->run();

        if ($kekka == false) { 
          $this->load->view('seven_input');
        } else { 
          $name = $this->input->post('name');
          $res = $this->check_name($name);
          $this->load->view('seven_result');
        }
    }

    public function check_name($name) {
       if ($name == 'yokoyama') {
          $ret = '私は'. $name;
       }
       return $ret;
    }


}
