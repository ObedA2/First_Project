<?php

class User_model extends CI_Model{

	public function create(){

		$id = $this->input->post("ID");


		$name = $this->input->post("name");


		$email = $this->input->post("email");


		$username = $this->input->post("username");


		$password = $this->input->post("password");


		$data = array(
			'ID' => $id,
			'name' => $name,
			'email' => $email,
			'username' => $username,
			'password' => $password );


		$result = $this->db->insert('users', $data);
		return $result;

	}

	public function build(){

		$title = $this->input->post("title");

		$author = $this->input->post("author");


		$info = array(
			'title' => $title,
			'author' => $author);
			
		$result = $this->db->insert('info', $info);
		return $result;

	}




	public function getdata(){

		$query =$this->db->get("users");

		$results = $query->result_array();

		return $results;
	}



	public function login($username,$password){

		$data = array('username' => $username , 'password' => $password );

		$query =$this->db->get_where('users', $data);

		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
}	



 ?>