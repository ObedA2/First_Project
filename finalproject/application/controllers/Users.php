<?php
	
	class Users extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('user_model');
		}	

		public function create(){

			if($this->user_model->create()){

				$data['signup'] = "successful";
				
				$this->load->view('login', $data);

			}
			else{
				
				echo "Something went wrong. Please try again";
				}	

		}

		public function build(){

			if($this->user_model->build()){
			
				echo "Book added successfully";
			}
			else{
				
				echo "Something went wrong. Please try again";
				}	

		}


		public function index(){

			$this->load->view('signup');


		}

		public function getUserData(){

			$data['users'] = $this->user_model->getdata();


			$this->load->view('information', $data);
		}	

		

		public function userLogin(){

			$username =$this->input->post('username');
			$password =$this->input->post('password');
 
			$result =$this->user_model->login($username, $password);

			if($result){
				echo "login successful";

				$this->load->view('dashboard');
			}
			else{
				echo "Login failed. Please sign up first or enter correct credentials";
			}
		}
	}

	


 ?>