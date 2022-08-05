<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Model
{
  protected $table = 'berita';

  //Menampilkan data Berita berdasarkan idBerita
  public function getById($idBerita)
  {
    return $this->db->get_where(
      $this->table,
      ["idBerita" => $idBerita]
    )->row();
    //query diatas seperti halnya query pada mysql 
    //select * from berita where idBerita='$idBerita'
  }
  
  //Menampilkan gambarBerita berdasarkan idBerita
  public function gambarById($idBerita)
  {
    $this->db->select('gambarBerita');
    $this->db->from($this->table);
    $this->db->where(["idBerita" => $idBerita]);
    $query = $this->db->get();
    return $query->result();
    //query diatas seperti halnya query pada mysql 
    //select gambarBerita from berita where idBerita='$idBerita'
  }

  //Menampilkan semua data berita yang tersimpan
  public function getAll()
  {
    $this->db->from($this->table);
    $this->db->order_by("idBerita", "desc");
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select * from berita order by idBerita desc
  }

  //Menampilkan jumlah data yang tersimpan
  public function count()
  {
    $this->db->count_all($this->table);
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select count * from berita
  }

  //Menyimpan berita baru
  public function simpan()
  {
    $data = array(
      "judul" => $this->input->post('judul'),
      "deskripsi" => $this->input->post('deskripsi'),
      "tanggal" => $this->input->post('tanggal'),
      "gambarBerita" => $this->input->post('gambarBerita')
    );
    return $this->db->insert(
      $this->table,
      $data
    );
  }

  //Mengedit data berita
  public function edit()
  {
    $data = array(
      "judul" => $this->input->post('judul'),
      "deskripsi" => $this->input->post('deskripsi'),
      "tanggal" => $this->input->post('tanggal'),
      "gambarBerita" => $this->input->post('gambarBerita')
    );
    return $this->db->update(
      $this->table,
      $data,
      array(
        'idBerita' => $this->input->post('idBerita')
      )
    );
  }

  //Menghapus data berita
  public function hapus($idBerita)
  {
    return $this->db->delete(
      $this->table,
      array("idBerita" => $idBerita)
    );
  }
}
