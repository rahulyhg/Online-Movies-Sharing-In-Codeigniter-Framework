<?php
class Submit extends CI_Controller {

	function Submit()
	{
		parent::__construct();
	}
	
	function Index()
	{
		$this->session->set_flashdata('msg','<div class="error_message">This feature has been temporarily disabled.</div>');
		redirect(base_url());
		exit(0);
	}
}