<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'Tambah Artikel';

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('artikel/index');
			$this->load->view('templates/footer');
		} else {
			$this->Artikel_model->addArtikel();
			redirect('home');
		}
	}
	public function delete($id)
	{
		$this->Artikel_model->deleteArtikelById($id);
		redirect('home');
	}

	public function update($id)
	{
		$data['judul'] = 'Edit Artikel';
		$data['ubah_artikel'] = $this->Artikel_model->getArtikelById($id);
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('artikel/update', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Artikel_model->updateArtikel($id);
			redirect('home');
		}
	}

	public function details($id)
	{
		$data['judul'] = 'Detail Artikel';
		$data['detail'] = $this->Artikel_model->getArtikelById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('artikel/detail', $data);
		$this->load->view('templates/footer');
	}
}
