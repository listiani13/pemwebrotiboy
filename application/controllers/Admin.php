<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$crud = new grocery_CRUD();
        // pilih tabel yang akan digunakan
        $crud->set_table('login');
        // custom field
        $crud->columns('id_user','username','nama');
        // simpan hasilnya kedalam variabel output
        $output = $crud->render();
        // tampilkan di view 
        $this->load->view('admin/admin_account', $output);
	}
	public function employees() {
        // instance object
        
    }
    public function bread()
	{
		$crud_roti = new grocery_CRUD();
		$crud_roti -> set_table('msroti');
		$crud_roti->display_as('id_roti','Bread ID');
		$crud_roti->display_as('nama_roti','Bread Name');
		$crud_roti->display_as('harga_pokok','COGS');
		$crud_roti->display_as('harga_jual','Sales Price');
		$crud_roti->display_as('id_tiperoti','Bread Type');
		$crud_roti->set_relation('id_tiperoti','mstiperoti','nama_tiperoti');
		$output = $crud_roti->render();
        // tampilkan di view 
        $this->load->view('admin/admin_bread', $output);
	}
	public function report(){
		$this->load->view('admin/admin_report');
	}
}
