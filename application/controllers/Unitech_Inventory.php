<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unitech_Inventory extends MY_Controller {


    public function index()
	{
		$this->page = "inventory/index";
		$this->layout();
    }
    
    public function add()
    {
        echo "suucess";
    }
    	
}