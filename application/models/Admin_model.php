<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  // Read Student
  public function getReport(){
    $query = $this->db->get('report');
    return $query->result_array();
  }

}

?>
