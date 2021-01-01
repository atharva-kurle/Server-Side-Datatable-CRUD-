<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $data = array();
    
    public function layout()
	{
        $this->template['header'] = $this->load->view('templates/header', $this->data, TRUE);
        $this->template['navbar'] = $this->load->view('templates/navbar', $this->data, TRUE);
        $this->template['sidebar'] = $this->load->view('templates/sidebar', $this->data, TRUE);
        
        $this->template['page'] = $this->load->view($this->page, $this->data, TRUE);
        $this->load->view('templates/main', $this->template);
	}
	
}