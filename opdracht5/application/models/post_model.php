<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model {

	var $data;

	public function __construct(){
		parent::__construct();
	}

	public function insert_post($data){
		$this->db->insert('posts', $data);
	}
}
?>