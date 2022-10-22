<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matematika extends CI_Controller {
	
	function __construct() {
	   parent::__construct();
	   $this->load->model('Rumus');
	}

	public function index(){
		echo "Hitung Luas Bangun Datar";
	}
	
	public function segitiga(){
		$a = 5; // alas
		$t = 3; // tinggi
		$data['luas'] = $this->Rumus->LuasSegitiga($a,$t);
		$this->load->view('Hasil',$data);
	}
	
	public function persegi(){
		$s = 5; // sisi
		$data['luas'] = $this->Rumus->LuasPersegi($s);
		$this->load->view('Hasil',$data);
	}
	
	public function persegipanjang(){
		$p = 5; // panjang
		$l = 6; // lebar
		$data['luas'] = $this->Rumus->LuasPersegiPanjang($p,$l);
		$this->load->view('Hasil',$data);
	}
	
}