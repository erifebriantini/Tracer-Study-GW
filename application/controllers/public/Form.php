<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("data/Data_models","dataN");
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
    public function show()
	{
		$this->load->view('public/header');
		$this->load->view('public/form_view');
		$this->load->view('public/footer');
	}

	public function proses()
	{
		$data=$this->input->post();
		$create = $this->dataN->create($data);
		if($create){
			echo"Sukses";
		}
		
	}

	public function tampil()
	{
		$this->load->view('public/header');
		//$ids=array(4);
		$database=$this->dataN->get();
		//echo"<pre>";
		//var_dump($database);
		$data['list']=$database;
		$this->load->view('public/data_list',$data);		
		$this->load->view('public/footer');
	}
	
	public function detail($id)
	{
		$database=$this->dataN->get($id)[0];
		$data['detail']=$database;
		//echo"<pre>";
		//var_dump($data);
		$this->load->view('public/form_detail',$data);		

	}

	
}
