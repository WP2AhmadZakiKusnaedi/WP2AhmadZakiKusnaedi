<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan extends CI_Controller
{
	public function index()
	{

		$this->load->view('v_home');
		//$this->load->view('view-latihan');
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('m_latihan');

		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->m_latihan->jumlah($n1, $n2);

		$this->load->view('v_latihan', $data);
	}
}
