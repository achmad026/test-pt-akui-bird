<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('form_validation');
        if ($this->form_validation->run() == false) {
            $data['tittle'] = 'Login';
            $this->load->view('layout/header', $data);
            $this->load->view('pages/login');
            $this->load->view('layout/footer');
        } else {
            $this->login();
        }
    }

    public function login()
    {
        $this->load->library('form_validation');
        $nama = $this->input->post('nama');
        $departemen = $this->input->post('departemen');
        $user = $this->db->get_where('user', ['nama' => $nama])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if ($user['level_grade'] == 5 ) {
                    if ($user['nama'] == $nama && $user['departemen'] == $departemen ) {
                        $data = [
                            'nama' => $user['nama'],
                            'level_grade' => $user['level_grade']
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin/dashboardHR');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Ada Isian yang salah!</div>');
                        redirect('admin');
                    }
                } else if ($user['level_grade'] != 5 ) {
                    if ($user['nama'] == $nama && $user['departemen'] == $departemen ) {
                        $data = [
                            'nama' => $user['nama'],
                            'level_grade' => $user['level_grade']
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin/dashboard');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Ada Isian yang salah!</div>');
                        redirect('admin');
                    }
                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Ada isian yang salah!</div>');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda sudah tidak pekerja disini!</div>');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda bukan pekerja disini!</div>');
            redirect('admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('level_grade');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Logout!</div>');
        redirect('admin');
    }

    public function dashboardHR()
    {
        $data1['admin'] = $this->Madmin->getAdmin();
        $data2['data'] = $this->Madmin->getKaryawan();
        $data3['tittle'] = 'Sistem Peminjaman';
        $this->load->view('layout/header', $data3);
        $this->load->view('layout/sidebarHR');
        $this->load->view('layout/topbar', $data1);
        $this->load->view('pages/indexHR', $data2);
        $this->load->view('layout/footer', $data3);
    }

    public function dashboard()
    {
        $data1['admin'] = $this->Madmin->getAdmin();
        $data2['data'] = $this->Madmin->getKaryawan();
        $data3['tittle'] = 'Sistem Peminjaman';
        $this->load->view('layout/header', $data3);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar', $data1);
        $this->load->view('pages/index', $data2);
        $this->load->view('layout/footer', $data3);
    }

    public function tentang()
    {
        $data1['admin'] = $this->Madmin->getAdmin();
        $data3['tittle'] = 'Sistem Peminjaman';
        $this->load->view('layout/header', $data3);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar', $data1);
        $this->load->view('pages/tentang');
        $this->load->view('layout/footer', $data3);
    }


    public function tambahKaryawan()
    {
        $data1['admin'] = $this->Madmin->getAdmin();
        $data3['tittle'] = 'Sistem Peminjaman';
        $this->load->view('layout/header', $data3);
        $this->load->view('layout/sidebarHR');
        $this->load->view('layout/topbar', $data1);
        $this->load->view('pages/tambah_karyawan');
        $this->load->view('layout/footer', $data3);
    }

    public function prosesTambahKaryawan()
    {
        $this->Madmin->insertKaryawan();
        redirect('admin/dashboardHR');
    }

    public function hapusKaryawan($id)
    {
        $id = $this->Madmin->hapusDataKaryawan($id);
        redirect('admin/dashboardHR');
    }

    public function editKaryawan($id) {
        // Mendapatkan data berdasarkan ID untuk diedit
        $data1['admin'] = $this->Madmin->getAdmin();
        $data['data'] = $this->Madmin->editKaryawan($id);
        $data3['tittle'] = 'Sistem Peminjaman';
        $this->load->view('layout/header', $data3);
        $this->load->view('layout/sidebarHR');
        $this->load->view('layout/topbar', $data1);
        $this->load->view('pages/edit_karyawan', $data);
        $this->load->view('layout/footer', $data3);
    }

    public function updateKaryawan($id) {
        // Mendapatkan data yang dikirim dari form
        
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nik' => $this->input->post('nik'),
            'ttl' => $this->input->post('ttl'),
            'pendidikan' => $this->input->post('pendidikan'),
            'status' => $this->input->post('status'),
            'departemen' => $this->input->post('departemen'),
            'level_grade' => $this->input->post('level_grade'),
        );

        // Memperbarui data berdasarkan ID
        $updated = $this->Madmin->updateKaryawan($id, $data);
        redirect('admin/dashboardHR');
    }
}

