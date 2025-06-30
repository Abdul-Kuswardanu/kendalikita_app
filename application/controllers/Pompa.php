<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pompa extends CI_Controller {

    public function dashboard() {
        $data['pompa_list'] = $this->db->get('tb_pompa')->result_array();
        $this->load->view('pompa/dashboard', $data);
    }

    public function list() {
        $data['pompa_list'] = $this->db->get('tb_pompa')->result_array();
        $this->load->view('pompa/list', $data);
    }

    public function jadwal() {
        $this->db->select('tb_jadwal_pompa.*, tb_pompa.nama_pompa');
        $this->db->from('tb_jadwal_pompa');
        $this->db->join('tb_pompa','tb_pompa.id_pompa=tb_jadwal_pompa.id_pompa');
        $data['jadwal_list'] = $this->db->get()->result_array();

        $data['pompa_list'] = $this->db->get('tb_pompa')->result_array();
        $this->load->view('pompa/jadwal', $data);
    }

    public function log() {
        $this->db->select('tb_log_pompa.*, tb_pompa.nama_pompa');
        $this->db->from('tb_log_pompa');
        $this->db->join('tb_pompa','tb_pompa.id_pompa=tb_log_pompa.id_pompa');
        $data['log_list'] = $this->db->get()->result_array();
        $this->load->view('pompa/log', $data);
    }

    // === Fungsi CRUD ===
    public function tambah() {
        $nama = $this->input->post('nama_pompa');
        $kode = $this->input->post('kode_pompa');
        $this->db->insert('tb_pompa', [
            'nama_pompa' => $nama,
            'kode_pompa' => $kode,
            'status' => 'OFF'
        ]);
        redirect('pompa/list');
    }

    public function hapus($id) {
        $this->db->delete('tb_pompa', ['id_pompa' => $id]);
        redirect('pompa/list');
    }

    public function tambah_jadwal() {
        $this->db->insert('tb_jadwal_pompa', [
            'id_pompa' => $this->input->post('id_pompa'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'hari' => $this->input->post('hari'),
            'status' => 'aktif'
        ]);
        redirect('pompa/jadwal');
    }

    public function hapus_jadwal($id) {
        $this->db->delete('tb_jadwal_pompa', ['id_jadwal' => $id]);
        redirect('pompa/jadwal');
    }

    public function kontrol($id, $aksi) {
        $this->db->where('id_pompa', $id)->update('tb_pompa', ['status' => $aksi]);
        // Simpan ke log
        $this->db->insert('tb_log_pompa', [
            'id_pompa' => $id,
            'aksi' => $aksi
        ]);
        redirect('pompa/dashboard');
    }
}
