<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Artikel CodeIgniter';
		$data['artikel'] = $this->Artikel_model->getAllArtikel();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}
