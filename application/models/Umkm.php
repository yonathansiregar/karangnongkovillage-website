<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm extends CI_Model
{
  private $table = 'umkm';

  //Menampilkan data umkm berdasarkan idUmkm
  public function getById($idUmkm)
  {
    return $this->db->get_where(
      $this->table,
      ["idUmkm" => $idUmkm]
    )->row();
    //query diatas seperti halnya query pada mysql 
    //select * from umkm where idUmkm='$idUmkm'
  }

  //Menampilkan gambarBerita berdasarkan idUmkm
  public function gambarById($idUmkm)
  {
    $this->db->select('gambarUmkm');
    $this->db->from($this->table);
    $this->db->where(["idUmkm" => $idUmkm]);
    $query = $this->db->get();
    return $query->result();
    //query diatas seperti halnya query pada mysql 
    //select gambarUmkm from umkm where idUmkm='$idUmkm'
  }

  //Menampilkan semua data umkm yang tersimpan
  public function getAll()
  {
    $this->db->from($this->table);
    $this->db->order_by("idUmkm", "desc");
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select * from umkm order by idUmkm desc
  }

  //Menampilkan jumlah data yang tersimpan
  public function count()
  {
    $this->db->count_all($this->table);
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select count * from umkm
  }

  //Menyimpan umkm baru
  public function simpan()
  {
    $data = array(
      "namaUmkm" => $this->input->post('namaUmkm'),
      "pemilikUmkm" => $this->input->post('pemilikUmkm'),
      "jenisProduk" => $this->input->post('jenisProduk'),
      "deskripsi" => $this->input->post('deskripsi'),
      "lokasi" => $this->input->post('lokasi'),
      "nomorWa" => $this->input->post('nomorWa'),
      "olshop" => $this->input->post('olshop'),
      "gambarUmkm" => $this->input->post('gambarUmkm')
    );
    return $this->db->insert(
      $this->table,
      $data
    );
  }

  //Mengedit data umkm
  public function edit()
  {
    $data = array(
      "namaUmkm" => $this->input->post('namaUmkm'),
      "pemilikUmkm" => $this->input->post('pemilikUmkm'),
      "jenisProduk" => $this->input->post('jenisProduk'),
      "deskripsi" => $this->input->post('deskripsi'),
      "lokasi" => $this->input->post('lokasi'),
      "nomorWa" => $this->input->post('nomorWa'),
      "olshop" => $this->input->post('olshop'),
      "gambarUmkm" => $this->input->post('gambarUmkm')
    );
    return $this->db->update(
      $this->table,
      $data,
      array(
        'idUmkm' => $this->input->post('idUmkm')
      )
    );
  }

  //Menghapus data umkm
  public function hapus($idUmkm)
  {
    return $this->db->delete(
      $this->table,
      array("idUmkm" => $idUmkm)
    );
  }
}