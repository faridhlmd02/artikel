<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
	public function getAllArtikel()
	{
		return $this->db->get('tb_artikel')->result_array();
	}

	public function deleteArtikelById($id)
	{
		return $this->db->delete('tb_artikel', ['id' => $id]);
	}

	public function getArtikelById($id)
	{
		return $this->db->get_where('tb_artikel', ['id' => $id])->row_array();
	}

	public function addArtikel()
	{
		$judul = htmlspecialchars($this->input->post('judul', true));
		$isi = htmlspecialchars($this->input->post('isi', true));
		$penulis = htmlspecialchars($this->input->post('penulis', true));
		$tanggal  = htmlspecialchars($this->input->post('tanggal', true));
		$gambar = $_FILES['gambar'];

		if (empty($gambar)) { } else {
			$config['upload_path']		= './assets/img';
			$config['allowed_types']	= 'png|jpg|gif';
			$config['max_size']			= 1024;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "upload gagal";
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}

			$data = [
				'judul' 	=> $judul,
				'isi'		=> $isi,
				'penulis'	=> $penulis,
				'tanggal'	=> $tanggal,
				'gambar' 	=> $gambar
			];

			$this->db->insert('tb_artikel', $data);
		}
	}

	public function updateArtikel($id)
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');
		$tanggal = $this->input->post('tanggal');

		$upload_gambar = $_FILES['gambar']['name'];
		if ($upload_gambar) {
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']		 = '1024';
			$config['upload_path']   = './assets/img/';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('gambar', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}

		$this->db->set('judul', $judul);
		$this->db->set('isi', $isi);
		$this->db->set('penulis', $penulis);
		$this->db->set('tanggal', $tanggal);
		$this->db->where('id', $id);
		$this->db->update('tb_artikel');
	}
}
