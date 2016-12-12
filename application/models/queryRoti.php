<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class queryRoti extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function displayBread()
	{
		$hasil = $this -> db -> get("mirrorwarehouse");
		return $hasil;
		//$this->load->view('warehouse/ware_see_stock');
	}
	
	public function processAdd($id,$quantity)
	{
		$this->db->select('stok');
		$this->db->where('id_roti', $id);
		$q = $this->db->get('msgudang');
		$data = $q->result_array();

		//echo($data[0]['stok']);
		$stokawal = $data[0]['stok'];
		$stokakhir = $stokawal + $quantity;
		echo $stokakhir;
		
		$data = array
		(	
			'id_roti' => $id,
			'stok' => $stokakhir
		);
		$this -> db -> set ($data);
		$this -> db -> where ('id_roti',$id);
		$this -> db -> update("msgudang");
	}
	
	public function processMinus($id,$quantity)
	{
		$this->db->select('stok');
		$this->db->where('id_roti', $id);
		$q = $this->db->get('msgudang');
		$data = $q->result_array();
		echo $quantity;
		//echo($data[0]['stok']);
		$stokawal = $data[0]['stok'];
		echo $stokawal;
		$stokakhir = $stokawal - $quantity;
		echo $stokakhir;
		
		$data = array
		(	
			'id_roti' => $id,
			'stok' => $stokakhir
		);
		$this -> db -> set ($data);
		$this -> db -> where ('id_roti',$id);
		$this -> db -> update("msgudang");
	}
	
	public function deleteRoti($id)
	{
		$this -> db -> delete("msgudang",array('id_roti'=>$id));
	}
	
	public function inputBread($id,$name,$quantity)
	{
		$data = array
		(	
			'id_roti' => $id,
			'nama_roti' => $name,
			'stok' => $quantity
		);
		$this -> db -> insert ("msgudang",$data);
	}
	
	public function getBreadById($id)
	{
		$hasil = $this -> db -> get_where("msgudang",array('id_roti'=>$id));
		return $hasil -> result_array();
	}
	public function setBreadById($id,$stok)
	{
		$data = array
		(	
			'id_roti' => $id,
			'stok' => $stok
		);
		$this -> db -> set ($data);
		$this -> db -> where ('id_roti',$id);
		$this -> db -> update("msgudang");
	}
}
