<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {

    public function __construct(){
       //継承元のconstructを読み込んでいる
       parent::__construct();
       //URL系の便利なやつが使えるようになる
       $this->load->helper('url');
       //form系の便利なやつが使えるようになる
       $this->load->helper('form');
       //バリデーションを使えるようになるやつ    
       $this->load->library('form_validation');

    }


	public function index()
	{
		$this->load->view('restaurant_index');
	}


    public function kikka(){

		$this->load->view('restaurant_kikka');
    }


    public function well(){

		$this->load->view('restaurant_well');
    }

    public function kikka_result(){

        //バリデーションチェック
        $this->kikka_validation();

        //$this->form_validation->run()はバリデーションがOKならtrue、ダメならNG
        $validation = $this->form_validation->run();

        if ($validation == FALSE) {
            //ダメだったケース
            $this->load->view('restaurant_kikka');
        } else {
            //OKだったケース
            $data['name']   = $this->input->post('name');
            $data['gender'] = $this->input->post('gender');
            $data['age']    = $this->input->post('age');
            $this->load->view('restaurant_result');
        }

    }



    public function kikka_validation(){

        $this->form_validation->set_rules('name', 'ユーザ名', 'required',array('required'=>'%sは必須です'));
        $this->form_validation->set_rules('gender', '性別', 'required',array('required'=>'%sは必須です'));
        $this->form_validation->set_rules('age', '年齢', 'required|min_length[2]' , array('required'=>'%sは必須です。','min_length'=>'%sは２文字以上で頼みます'));


    }


}
