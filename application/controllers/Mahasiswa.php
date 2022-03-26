<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Daftar Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = "Forms Tambah Data Mahasiswa";
		$data['jurusan'] = $this->Jurusan_model->getAllJurusan();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
		$this->form_validation->set_rules('email', 'e-Mail', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('mahasiswa');
		}
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('mahasiswa');
	}

	public function detail($id)
	{
		$data['title'] = "Detail Data Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['title'] = "Forms Ubah Data Mahasiswa";
		$data['jurusan'] = $this->Jurusan_model->getAllJurusan();
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
		$this->form_validation->set_rules('email', 'e-Mail', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('mahasiswa');
		}
	}
}

/* End of file Mahasiswa.php */
