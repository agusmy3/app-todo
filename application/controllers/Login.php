<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('Model_login'));
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		if($this->Model_login->login()===true){
			if($this->session->userdata('log_as')=='Manajer'){
				redirect('todo');
			}else{
				redirect('todo/todo_checklist');
			}
			
		}else{
			redirect('Login');
		}
	}
}
