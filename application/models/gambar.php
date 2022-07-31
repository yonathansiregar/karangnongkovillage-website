<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gambar extends CI_Model
{
  private $table = 'gambar';

  //Mengembalikan nama gambar berdasarkan idGambar
  public function getById($idGambar)
  {
    return $this->db->get_where(
      $this->table,
      ["idGambar" => $idGambar]
    )->row();
    //query diatas seperti halnya query pada mysql 
    //select * from umkm where idGambar='$idGambar'
  }

  //Menyimpan nama Gambar baru
  public function save()
  {
    $data = array(
      "namaGambar" => $this->input->post('namaGambar')
    );
    return $this->db->insert(
      $this->table,
      $data
    );
  }

  //Mengedit nama Gambar
  public function edit()
  {
    $data = array(
      "namaGambar" => $this->input->post('namaGambar')
    );
    return $this->db->update(
      $this->table,
      $data,
      array(
        'idGambar' => $this->input->post('idGambar')
      )
    );
  }

  //Menghapus nama Gambar
  public function delete($idGambar)
  {
    return $this->db->delete(
      $this->table,
      array("idGambar" => $idGambar)
    );
  }
}
