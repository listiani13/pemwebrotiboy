<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Admin extends CI_Model{

  // Read Student
  public function getUser(){
    $query = $this->db->get('login');
    return $query;
  }

 public function addLevel($id_level, $nama_level){
    $data = array(
        'id_level' => $id_level,
        'nama_bagian'=> $nama_level
    );
    $this->db->insert('mslevel', $data);
    redirect('Admin/index');
  }


    public function addUser($id, $email, $pass, $id_level, $username,$nama,$alamat,$ttl,$jenkel){
      $data = array(
          'id_user' => $id,
          'email'=> $email,
          'pass'=>$pass,
          'id_level'=>$id_level,
          'username'=> $username,
          'nama'=>$nama,
          'alamat'=>$alamat,
          'ttl'=>$ttl,
          'jenkel'=>$jenkel
      );
      $this->db->insert('login', $data);
      redirect('Admin/index');
    }
    public function editUser($id, $email, $pass, $id_level, $username,$nama,$alamat,$ttl,$jenkel){
      $this->db->set('email',$email);
      $this->db->set('pass',$pass);
      $this->db->set('id_level',$id_level);
      $this->db->set('username',$username);
      $this->db->set('nama',$nama);
      $this->db->set('alamat',$alamat);
      $this->db->set('ttl',$ttl);
      $this->db->set('jenkel',$jenkel);
      $this->db->where('id_user',$id);
      $this->db->update('login');
    }
    public function deleteUser($id){
      $this->db->where('id_user', $id);
      $this->db->delete('login');
    }

  /* UNTUK ROTI */
    public function getBread(){
      /*$query = $this->db->get('msroti');
      return $query;*/
      $this->db->select('id_roti, nama_roti,harga_pokok, harga_jual,nama_tiperoti');
      $this->db->from('msroti');
      $this->db->join('mstiperoti', 'msroti.id_tiperoti = mstiperoti.id_tiperoti');
      $query = $this->db->get('');
      return $query;
    }

    public function addType($id, $nama){
      $data = array(
          'id_tiperoti' => $id,
          'nama_tiperoti'=> $nama
      );
      $this->db->insert('mstiperoti', $data);
      redirect('Admin/Bread');
    }
    public function tambahRoti($id_roti,$nama_roti,$harga_pokok,$harga_jual,$id_tiperoti){
      $data = array(
        'id_roti'=>$id_roti,
        'nama_roti'=>$nama_roti,
        'harga_pokok'=>$harga_pokok,
        'harga_jual'=>$harga_jual,
        'id_tiperoti'=>$id_tiperoti
        );
      $this->db->insert('msroti', $data);
      redirect('Admin/Bread');
    }
  public function deleteRoti($id)
    {
      $this -> db -> delete("msroti",array('id_roti'=>$id));
    }
  public function editRoti($id,$nama,$harga_jual){
      $query = $this->db->query("UPDATE `msroti` SET `nama_roti`='$nama',`harga_pokok`='$harga_jual',`harga_jual`='2000' WHERE `id_roti` = 'id'");
      /*$this->db->set('harga_jual',$harga_jual);
      $this->db->set('nama_roti',$nama);
      $this->db->where('id_roti',$id);
      $this->db->update('msroti');*/
    }



  }

  


?>
