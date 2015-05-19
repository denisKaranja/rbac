<?
#load views here
/*header*/
$this->load->view("inc/header");

/*Data passed as array*/
$this->session->userdata("is_logged_in") ? $this->load->view($account) : $this->load->view($account);

/*footer*/
$this->load->view("inc/footer");