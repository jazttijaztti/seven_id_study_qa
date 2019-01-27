<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yokoyama extends CI_Controller {

	public function index()
	{
        $data['namae'] = '横山';
        $data['age'] = '21';
        $data['test'] = "テスト";
        $test['person'] = $data;
		$this->load->view('yokoyama_index',$test);
	}
    public function sada(){

		$this->load->view('yokoyama_sada');
    }

}
