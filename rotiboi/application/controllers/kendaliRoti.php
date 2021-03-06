<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kendaliRoti extends CI_Controller {

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
	public function index()
	{
		$this->load->model("queryRoti");
		$data['rotiku'] = $this -> queryRoti -> displayBread();
		$this->load->view('warehouse/ware_see_stock',$data);
	}
	
	public function receiveBread()
	{
		$this -> load -> view ('warehouse/ware_receive');
	}
	
	public function releaseBread()
	{
		$this -> load -> view ('warehouse/ware_release');
	}
	
	public function processAdd()
	{
		$id = $this -> input -> post('id');
		//$name = $this -> input -> post('name');
		$quantity = $this -> input -> post('qty');
		$this->load->model("queryRoti");
		$this->queryRoti->processAdd($id,$quantity);
		redirect();
		
	}
	
	public function processMinus()
	{
		$id = $this -> input -> post('id');
		//$name = $this -> input -> post('name');
		$quantity = $this -> input -> post('qty');
		$this->load->model("queryRoti");
		$this->queryRoti->processMinus($id,$quantity);
		redirect();
		
	}
	
	public function deleteRoti($id)
	{
		$this -> load -> model("queryRoti");
		$this -> queryRoti -> deleteRoti($id);
		redirect();
	}
	
	public function displayInput()
	{
		$this -> load -> view("warehouse/ware_input");
	}
	
	/*public function displayPo()
	{
		$this -> load -> view("warehouse/ware_po");
	}*/
	public function displayUser()
	{
		$this -> load -> view("warehouse/ware_acc");
	}
	
	public function inputBread()
	{
		$id = $this -> input -> post('id');
		$name = $this -> input -> post('name');
		$quantity = $this -> input -> post('qty');
		$this -> load -> model('queryRoti');
		$this -> queryRoti -> inputBread($id,$name,$quantity);
		redirect();
	}
	
	public function displayEdit($id)
		{
			$data['id_roti']=$id;
			$this -> load -> model('queryRoti');
			$hasil = $this -> queryRoti -> getBreadById($id);
			foreach($hasil as $row)
			{
				$data['id']= $row['id_roti'];
				$data['name']= $row['nama_roti'];
				$data['qty']= $row['qty'];
			}
			$this->load->view('warehouse/ware_edit_item',$data);
			
		}
		
	public function edit($id)
	{
		$id = $this -> input -> post('id');
		$nama = $this -> input -> post('nama');
		$qty = $this -> input -> post('qty');
		echo $id;
		$this -> load -> model('queryRoti');
		$this -> queryRoti -> setBreadById($id,$nama,$qty);
	}
}
