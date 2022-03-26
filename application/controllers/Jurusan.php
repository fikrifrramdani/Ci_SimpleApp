<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Daftar Jurusan";
		$data['jurusan'] = $this->Jurusan_model->getAllJurusan();

		$this->load->view('templates/header', $data);
		$this->load->view('jurusan/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = "Forms Tambah Data Jurusan";

		$this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('jurusan/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->Jurusan_model->tambahDataJurusan();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('jurusan');
		}
	}

	public function hapus($id)
	{
		$this->Jurusan_model->hapusDataJurusan($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('jurusan');
	}
}

/* End of file Mahasiswa.php */
