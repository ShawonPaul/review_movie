<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {


	public function sign_in ($username,$email,$password){

		$query= $this -> db -> query("INSERT INTO user (user_name,mail_address,password) VALUES ('$username','$email','$password') ");
		return $query;
	}

	public function log_in ($username,$password) {
		$query= $this -> db -> query("SELECT * FROM user WHERE user_name='$username' AND password='$password' ");

		return $query;

	}
	public function get_game_data () {
		 $query = $this->db->get('game');  
         return $query;
	}

	 public function selection_movie ($id) {
	 	$query= $this -> db -> query ( " SELECT * FROM game WHERE id='$id' ") ;
	 	return $query-> row_array();

	 }

	 public function sub_review ($review,$review_user,$movie_name,$rating) {
	 	$query =$this -> db -> query ("INSERT INTO h_game (h_movie_name,user_name,comment,rating) VALUES ( '$movie_name','$review_user','$review','$rating' )  ");
	 	return $query;

	 }

	 public function avg_rating () {
	 	//$query= $this -> db -> query (" SELECT AVG (rating) FROM h_game ");
	 	//$this->db->select_avg('rating');
	 	//$query = $this->db->get('h_game');
	 	$this -> db -> select ('AVG(rating) avg_rate');
	 	return $this->db->get('h_game')->row();
	 	
	 }

	 public function check_review ($h_movie_name,$user_name){

	 	$query=$this->db->query("SELECT * FROM h_game WHERE h_movie_name='$h_movie_name' AND user_name='$user_name' ");
	 	return $query ;
	 }

	public function show_all_game () {
		$query = $this->db->get('h_game');  
         return $query;

	}



	

}

