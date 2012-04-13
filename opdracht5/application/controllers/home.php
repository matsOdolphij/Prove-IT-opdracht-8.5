<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
  	}

	public function index(){
		$data['main_content'] = 'welkom_view';
        $this->load->view('_includes/template', $data);
	}
}
?>