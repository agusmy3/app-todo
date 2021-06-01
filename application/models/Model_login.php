<?php
class Model_login extends CI_Model{
    function get_user(){
		$un 	= $this->input->post('un');
		$pw 	= sha1($this->input->post('pw'));
		return $this->db->get_where("tbl_user",array("username"=>$un,"password"=>$pw));
	}

    function login(){
		$num = $this->get_user()->num_rows();
			
		if($num==1){
			$user 		= $this->get_user()->row_array();
            
			$sess_user = array(
				'id'	    => $user['user_id'],
				'nama'	    => $user['user_name'],
				'username'	=> $user['username'],
				'log_as'    => $user['user_role']
			);
			$this->session->set_userdata($sess_user);
			return true;
		}else{
			return false;
		}
	}
}
?>