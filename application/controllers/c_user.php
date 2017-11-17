<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this -> load -> model("m_user");
		
	}

	public function index()
	{
		
	}

	public function sign_in() {
		$username= $this->input->post('username');
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$data= $this -> m_user -> sign_in($username,$email,$password);
		if ($data) {
			$this -> load -> view ("v_back_log_in");
		}
	}

	public function log_in () {
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		$data=$this -> m_user -> log_in($username,$password);
		if ($data -> num_rows() == 1) {
			$user['data']= $this -> m_user -> get_game_data();
			$user['fixed_name']= $username;

				$this -> load -> view ("v_user_home",$user);
			
			

		}
		else {
			echo "not done";
		}

	}


	public function review ($id,$fixed_name) {
		//$data['movie']= $this -> m_user -> selection_movie ($id);
		$data['m_id']= $id;
		$data['fixed_name']= $fixed_name ;
		$this -> load -> view ("v_submit_review",$data);

	}

	public function submit_review ($m_id,$fixed_name) {

		

		$id= $m_id;
		$review= $_POST ['review'];
		$rating= $_POST ['ratings'];

		$movie_name= $this -> m_user -> selection_movie ($id);

		$chek_re= $this -> m_user -> check_review ($movie_name['name'],$fixed_name) ; 

		if ( $chek_re -> num_rows() == 0 ) {
			

			$done=$this -> m_user -> sub_review ($review,$fixed_name,$movie_name['name'],$rating); 
		if ($done) {
			echo "Successfully reviwed";
		} 

		}
		else  {
			echo "<h1>You have entered a review for this Movie before</h1>" ;
			

		} 



		

		}



		public function show_review ($id) {
			$big_data['h_game']=$this -> m_user -> show_all_game ();

			
			$big_data['g_name']=$this -> m_user -> selection_movie ($id); 
			
			
			$this -> load -> view ("v_show_review",$big_data);
		}



}

