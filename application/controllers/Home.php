<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view("Home/beranda");
	}

	public function search()
	{
		$this->load->view("Home/search");
	}
	// public function beranda()
	// {
	// 	$this->load->view("Home/beranda");
	// }


	public function hasil()
	{
		$this->load->helper('url','form');
	    $this->load->library('form_validation');
		$this->load->model('searchmodel');
		$nim=$this->input->post('nim');
        $data['mahasiswa']=$this->searchmodel->search($nim);
        $this->load->view('Home/hasil', $data);
	}

	public function test()
	{
		$this->load->view("Home/base_start");
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */