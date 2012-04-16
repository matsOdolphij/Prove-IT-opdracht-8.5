<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends MY_Controller {

	public function index(){
		$this->load->helper('form');
		$data['main_content'] = 'post_view';
		$this->load->view('_includes/template', $data);
	}

	public function addPost(){
		$this->load->helper(array('form', 'url', 'file'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('addpost_content', 'addpost_content', 'trim|required|xss_clean');
		$this->form_validation->set_rules('temp_name', 'temp_name', 'trim|required|xss_clean');


		if($this->form_validation->run() == FALSE){
			parent::redirectLastPage();
		} else {

			$data = array(
				'text' => $this->input->post('addpost_content'),
				'temp_name' => $this->input->post('temp_name'),
				'user_id' => '0',
				'date' => date('d-m-Y H:i:s')
				);

			$this->load->model('post_model', 'temp');
			$this->temp->insert_post($data);

			$this->do_upload();

			parent::redirectLastPage();
		}

	}

	private function do_upload() {
		$config['upload_path'] = './_pictures';
		$config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = ''; //2 meg
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->load->library('image_lib');
        //Upload error flag
        $error = FALSE;

        foreach ($_FILES as $key => $value) {
        	if (!empty($value['name'])) {
        		if ($this->upload->do_upload($key)) {
        			$uploaded = $this->upload->data();

                    //Create Thumbnail
        			$config['image_library'] = 'GD2';
        			$config['source_image'] = $uploaded['full_path'];
        			$config['create_thumb'] = TRUE;
        			$config['thumb_marker'] = '_tn';
        			$config['master_dim'] = 'width';
        			$config['quality'] = 75;
        			$config['maintain_ratio'] = TRUE;
        			$config['width'] = 175;
        			$config['height'] = 175;

        			$this->image_lib->clear();
        			$this->image_lib->initialize($config);
        			$this->image_lib->resize();

        			$imagename = substr($uploaded['file_name'], 0, -4) . "_tn" . $uploaded['file_ext'];
        			$timestamp = time();

                    //Add Pic Info To Database
        			$this->db->select_max('id');
        			$query = $this->db->get('posts')->_fetch_assoc();

        			$max_id = $query['id'];

        			$this->db->set('path', $uploaded['file_name']);
        			$this->db->set('post_id', $max_id);
                    //Insert Info Into Database
        			$this->db->insert('pictures');
        		} else {
        			$error = TRUE;
        		}
        	}
        }
    }

    public function postOverview(){

    }
}

/* End of file Controllername.php */
/* Location: ./application/controllers/Controllername.php */