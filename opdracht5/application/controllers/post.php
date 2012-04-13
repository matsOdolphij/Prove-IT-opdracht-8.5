<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends MY_Controller {

	public function index(){
		$this->load->helper('form');
		$data['main_content'] = 'post_view';
		$this->load->view('_includes/template', $data);
	}

	public function addPost(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('addpost_content', 'addpost_content', 'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			parent::redirectLastPage();
		} else {

			$data = array(
				'text' => $this->input->post('addpost_content'),
				'user_id' => '0',
				'date' => date('d-m-Y H:i:s')
				);

			$this->load->model('post_model', 'temp');
			$this->temp->insert_post($data);
		}

	}
}

/* End of file Controllername.php */
/* Location: ./application/controllers/Controllername.php */