<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
	function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

	function tambahDataMahasiswa()
	{
		$data = [
			'nama' => $this->input->post('nama', true),
			'nim' => $this->input->post('nim', true),
			'email' => $this->input->post('email', true),
			'jurusan' => $this->input->post('jurusan', true)
		];

		$this->db->insert('mahasiswa', $data);
	}

	public function hapusDataMahasiswa($id)
	{
		$this->db->where('id_mhs', $id);
		$this->db->delete('mahasiswa');
	}

	function getMahasiswaById($id)
	{
		return $this->db->get_where('mahasiswa', ['id_mhs' => $id])->row_array();
	}

	function ubahDataMahasiswa()
	{
		$data = [
			'nama' => $this->input->post('nama', true),
			'nim' => $this->input->post('nim', true),
			'email' => $this->input->post('email', true),
			'jurusan' => $this->input->post('jurusan', true)
		];

		$this->db->where('id_mhs', $this->input->post('id_mhs', true));
		$this->db->update('mahasiswa', $data);
	}

	function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);

		$this->db->like('nama', $keyword);
		$this->db->or_like('nim', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('jurusan', $keyword);

		return $this->db->get('mahasiswa')->result_array();
	}
}
