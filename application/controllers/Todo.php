<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model(array('Model_todo'));
	}

    public function index()
	{
        $data['todo_list'] = $this->Model_todo->get_todo()->result();
		$this->load->view('todo',$data);
	}

    public function todo_tambah()
	{
        if($_POST){
            if($this->Model_todo->todo_tambah()===true){
                redirect("todo");
            }
        }else{
            $this->load->view('todo_tambah');
        }
		
	}

    public function todo_ubah()
	{

        if($_POST){
            if($this->Model_todo->todo_ubah()===true){
                redirect("todo");
            }
        }else{
            $todo_id = $this->uri->segment(3);
            $data['todo'] = $this->Model_todo->get_todo_by_id($todo_id)->row_array();
            $this->load->view('todo_ubah',$data);
        }
		
	}

    public function todo_hapus()
	{
        $todo_id = $this->uri->segment(3);
        if($this->Model_todo->todo_hapus($todo_id)){
            redirect("todo");
        }
            
	}

    public function todo_checklist()
	{
        $data['todo_list'] = $this->Model_todo->get_todo_by_sts(0)->result();
        $data['todo_list_finished'] = $this->Model_todo->get_todo_by_sts(1)->result();
		$this->load->view('todo_checklist',$data);
	}

    public function todo_ubah_sts(){
        $this->db->update("tbl_todo",array("todo_sts"=>$this->input->post("sts")),array("todo_id"=>$this->input->post("id")));
    }

}
?>