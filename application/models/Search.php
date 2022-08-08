<?php
defined('BASEPATH') or exit('No direct script access allowed');

class search extends CI_Model
{
    protected $Berita = 'berita';
    protected $Umkm = 'umkm';
    protected $PerangkatDesa = 'perangkatDesa';

    // Menampilkan data pencarian berita
    public function searchBerita($keyword = null) {
        $this->db->from($this->Berita);
        $this->db->like('judul', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        $query = $this->db->get();
        return $query->result();
    }

    // Menampilkan data pencarian Umkm
    public function searchUmkm($keyword = null) {
        $this->db->from($this->Umkm);
        $this->db->like('namaUmkm', $keyword);
        $this->db->or_like('jenisProduk', $keyword);
        $this->db->or_like('pemilikUmkm', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        $this->db->or_like('nomorWa', $keyword);
        $query = $this->db->get();
        return $query->result();
    }
    
    // Menampilkan data pencarian Perangkat Desa
    public function searchPD($keyword = null) {
        $this->db->from($this->PerangkatDesa);
        $this->db->like('namaPD', $keyword);
        $this->db->or_like('jabatanPD', $keyword);
        $query = $this->db->get();
        return $query->result();
    }
}