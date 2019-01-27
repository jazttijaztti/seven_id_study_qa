<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yamashita extends CI_Controller {

	public function index()
	{
		$this->load->view('yamashita_index');
	}
    public function aichi(){
       $this->load->view('yamashita_aichi');
    }
    public function nenene(){
        echo "nene";
        exit;

    }

}
