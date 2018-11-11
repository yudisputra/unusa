<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view("Home/home");
	}

	public function search()
	{
		$this->load->view("Home/search");
	}

	public function hasil()
	{
		$this->load->model('searchmodel');
		$keyword=$this->input->post('submit');
        $data['mahasiswa']=$this->searchmodel->search($keyword);
        $this->load->view('Home/hasil', $data);
	}

	public function test()
	{
		$this->load->view("Home/base_start");
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */