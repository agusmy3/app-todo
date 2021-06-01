<?php
class Model_todo extends CI_Model{
    function get_todo(){
		return $this->db->get("tbl_todo");
	}

    function get_todo_by_id($id){
		return $this->db->get_where("tbl_todo",array("todo_id"=>$id));
	}

    function get_todo_by_sts($sts){
		return $this->db->get_where("tbl_todo",array("todo_sts"=>$sts));
	}

    function todo_tambah(){
        $data_todo = array(
            "todo_name" => $this->input->post("name"),
            "todo_desc" => $this->input->post("ket")
        );
        if($this->db->insert("tbl_todo",$data_todo)){
            return true;
        }else{
            return false;
        }
    }

    function todo_ubah(){
        $id			= $this->input->post("id");
        $data_todo = array(
            "todo_name" => $this->input->post("name"),
            "todo_desc" => $this->input->post("ket")
        );
        if($this->db->update("tbl_todo",$data_todo,array("todo_id"=>$id))){
            return true;
        }else{
            return false;
        }
    }

    function todo_hapus($id){
        if($this->db->delete("tbl_todo",array("todo_id"=>$id))){
            return true;
        }else{
            return false;
        }
    }
}
?>