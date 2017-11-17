<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this -> load -> model("m_user");
		
	}

	public function index() {
		$user['data']= $this -> m_user -> get_game_data();
		//$user['rating']= $this -> m_user -> avg_rating ();
		$user['all']= $this -> m_user -> show_all_game ();
		$this -> load -> view ("v_home",$user);
	}

	public function log_in () {
		$this ->  load -> view ("v_log_in");
	}

	public function sign_in () {
		$this -> load -> view ("v_sign_in");
	}



}
