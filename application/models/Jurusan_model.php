<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
	function getAllJurusan()
	{
		return $this->db->get('jurusan')->result_array();
	}

	function tambahDataJurusan()
	{
		$data = [
			'nama_jurusan' => $this->input->post('nama_jurusan', true)
		];

		$this->db->insert('jurusan', $data);
	}

	public function hapusDataJurusan($id)
	{
		$this->db->where('id_jurusan', $id);
		$this->db->delete('jurusan');
	}
}
