<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nswitch extends CI_Controller
{
	public function index()
	{
		$data['barang'] = $this->model_kategori->data_switch()->result();
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$this->load->view('nswitch',$data);
		$this->load->view('footer');
	} 
}	