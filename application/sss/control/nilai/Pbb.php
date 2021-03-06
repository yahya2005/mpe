<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pbb extends My_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('M_biodata');
		$this->load->model('M_login');

	}
	public function index()
	{
		if($this->M_login->logged_id()){
			$data['title'] = "Tabel";
			$data['biodata'] = $this->M_biodata->view();
			$this->tema('table',$data);
		}else{
			redirect('login');
		}
		
	}
}
