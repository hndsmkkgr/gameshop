<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platform extends CI_Controller {
	/*

	public function PC(){
		$data['barang'] = $this->model_kategori->data_PC()->result();
		$this->load->view('PS4',$data);
	} 
	
*/

	public function index(){
	$data['barang'] = $this->model_barang->tampil_data()->result();
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$this->load->view('platforms',$data);
		$this->load->view('footer');

	}

	public function keranjang($id)
	{
		if($this->session->isLoggedin)
		{
			$barang = $this->model_barang->find($id);
			
			$data = array(
			'id'      => $barang->id_brg,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg
			
			);

			$this->cart->insert($data);
			
			// var_dump($this->session); die();
			//$insert = $this->load->view('header');
			redirect('platform');
		}
		else
		{
			echo "<script>
                alert('Please log in before purchasing!');
			</script>";
			redirect(base_url('platform'), 'refresh');
		}
	}

	public function detail_keranjang()
	{
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$this->load->view('cart');
		$this->load->view('footer'); 
	}

}	