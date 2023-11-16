<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{
    function getAdmin()
    {
        return $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
    }

    public function getKaryawan()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function insertKaryawan()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "nik" => $this->input->post('nik'),
            "ttl" => $this->input->post('ttl'),
            "pendidikan" => $this->input->post('pendidikan'),
            "status" => $this->input->post('status'),
            "departemen" => $this->input->post('departemen'),
            "level_grade" => $this->input->post('level_grade')
        ];

        $this->db->insert('karyawan', $data);
    }

    public function hapusDataKaryawan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('karyawan');
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function editKaryawan($id) {
        return $this->db->get_where('karyawan', array('id' => $id))->row();
    }

    // Fungsi untuk memperbarui data berdasarkan ID
    public function updateKaryawan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('karyawan', $data); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
