<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
      parent::__construct();
 
	/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper('url');
	/* ------------------ */ 
 
		$this->load->library('grocery_CRUD');
	}

	public function mahasiswa()
	{
		$crud = new grocery_CRUD();


 		$crud->set_subject('Mahasiswa');
		$crud->set_table('mahasiswa');
		

		$output = $crud->render();
 	
		$this->output_view($output);                
	}

	function output_view($output = null)
	{
		$this->load->view('admin/data_table.php',$output);    
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */