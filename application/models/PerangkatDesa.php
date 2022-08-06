<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PerangkatDesa extends CI_Model
{
  protected $table = 'perangkatDesa';

  //Menampilkan data perangkatDesa berdasarkan idPD
  public function getById($idPD)
  {
    return $this->db->get_where(
      $this->table,
      ["idPD" => $idPD]
    )->row();
    //query diatas seperti halnya query pada mysql 
    //select * from perangkatDesa where idPD='$idPD'
  }

  //Menampilkan gambarBerita berdasarkan idPD
  public function gambarById($idPD)
  {
    $this->db->select('gambarPD');
    $this->db->from($this->table);
    $this->db->where(["idPD" => $idPD]);
    $query = $this->db->get();
    return $query->result();
    //query diatas seperti halnya query pada mysql 
    //select gambarPD from perangkatDesa where idPD='$idPD'
  }

  //Menampilkan semua data perangkatDesa yang tersimpan
  public function getAll()
  {
    $this->db->from($this->table);
    $this->db->order_by("idPD", "asc");
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select * from perangkatDesa order by idPD asc
  }

  //Menampilkan semua data perangkatDesa yang tersimpan
  public function getAllDesc()
  {
    $this->db->from($this->table);
    $this->db->order_by("idPD", "desc");
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select * from perangkatDesa order by idPD asc
  }

  //Menampilkan jumlah data yang tersimpan
  public function count()
  {
    $this->db->count_all($this->table);
    $query = $this->db->get();
    return $query->result();
    //fungsi diatas seperti halnya query 
    //select count * from perangkatDesa
  }

  //Menyimpan perangkatDesa baru
  public function simpan()
  {
    $data = array(
      "namaPD" => $this->input->post('namaPD'),
      "jabatanPD" => $this->input->post('jabatanPD'),
      "gambarPD" => $this->input->post('gambarPD')
    );
    return $this->db->insert(
      $this->table,
      $data
    );
  }

  //Mengedit data perangkatDesa
  public function edit()
  {
    $data = array(
      "namaPD" => $this->input->post('namaPD'),
      "jabatanPD" => $this->input->post('jabatanPD'),
      "gambarPD" => $this->input->post('gambarPD')
    );
    return $this->db->update(
      $this->table,
      $data,
      array(
        'idPD' => $this->input->post('idPD')
      )
    );
  }

  //Menghapus data perangkatDesa
  public function hapus($idPD)
  {
    return $this->db->delete(
      $this->table,
      array("idPD" => $idPD)
    );
  }
}
