<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kkn extends CI_Model
{
  protected $table = 'KKN';

  //Menampilkan data KKN berdasarkan idPD
  public function getById($idKKN)
  {
    return $this->db->get_where(
      $this->table,
      ["idKKN" => $idKKN]
    )->row();
    //query diatas seperti halnya query pada mysql 
    //select * from KKN where idKKN='$idKKN'
  }

  //Menampilkan semua data KKN yang tersimpan
  public function getAll()
  {
    $this->db->from($this->table);
    $this->db->order_by("idKKN", "asc");
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select * from KKN order by idKKN asc
  }

  //Menampilkan semua data KKN yang tersimpan
  public function getAllDesc()
  {
    $this->db->from($this->table);
    $this->db->order_by("idKKN", "desc");
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select * from KKN order by idKKN asc
  }

  //Menampilkan jumlah data yang tersimpan
  public function count()
  {
    $this->db->count_all($this->table);
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select count * from KKN
  }

  //Menyimpan KKN baru
  public function simpan()
  {
    $data = array(
      "namaKKN" => $this->input->post('namaKKN'),
      "jabatanKKN" => $this->input->post('jabatanKKN'),
      "gambarKKN" => $this->input->post('gambarKKN')
    );
    return $this->db->insert(
      $this->table,
      $data
    );
  }

  //Mengedit data KKN
  public function edit($idKKN)
  {
    $data = array(
      "namaKKN" => $this->input->post('namaKKN'),
      "jabatanKKN" => $this->input->post('jabatanKKN'),
      "gambarKKN" => $this->input->post('gambarKKN')
    );
    return $this->db->update(
      $this->table,
      $data,
      array(
        'idKKN' => $idKKN
      )
    );
  }

  //Menghapus data KKN
  public function hapus($idKKN)
  {
    return $this->db->delete(
      $this->table,
      array("idKKN" => $idKKN)
    );
  }
}
