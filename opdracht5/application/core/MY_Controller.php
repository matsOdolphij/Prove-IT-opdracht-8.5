<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->session->set_flashdata('lastpage', $this->uri->uri_string());
        if ($this->session->userdata('logged_in') == TRUE) {
            $this->data['user'] = $this->session->userdata;
        } else {
            $this->data['user'] = FALSE;
        }
    }

    function redirectLastPage() {
        redirect(base_url() . $this->session->flashdata('lastpage'));
    }

    function isLoggedIn() {
        return $this->session->userdata('logged_in');
    }

}
?>
