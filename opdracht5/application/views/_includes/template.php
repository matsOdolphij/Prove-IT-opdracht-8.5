<?php

$header['nav_menu'] = $this->init_model->get_nav();

$this->load->view('_includes/header', $header);

$this->load->view($main_content);

$this->load->view('_includes/footer');

?>