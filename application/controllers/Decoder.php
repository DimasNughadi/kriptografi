<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Decoder extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('decoder_model');
    }

	public function index()
	{
		$data['ciphertext'] = null;
		$data['key'] = null;
		$data['algokey'] = "Pilih Jenis Algoritma";
		$data['hasil'] = null;
		$this->load->view('header');
		$this->load->view('decoder', $data);
		$this->load->view('footer');
	}

	public function decode()
	{	
		$algo = $this->input->post('algo');
		$ciphertext = $this->input->post('ciphertext');
		if($algo == 'Caesar'){
			$key = $this->input->post('key1');
			$data['hasil'] = $this->decoder_model->$algo($ciphertext, $key);
			$data['ciphertext'] = $ciphertext;
			$data['algokey'] = $algo ." | ".$key;
		}elseif($algo == 'Vigenere'){
			$key = $this->input->post('key2');
			$data['hasil'] = $this->decoder_model->$algo($ciphertext, $key);
			$data['ciphertext'] = $ciphertext;
			$data['algokey'] = $algo ." | ".$key;
		}
		elseif($algo == 'Hill'){
			$a = 3;
		}
		elseif($algo == 'Transposisi'){
			$a = 4;
		}
		elseif($algo == 'Affine'){
			$key1 = $this->input->post('key5');
			$key2 = $this->input->post('key55');
			$data['hasil'] = $this->decoder_model->$algo($ciphertext, $key1, $key2);
			$data['ciphertext'] = $ciphertext;
			$data['algokey'] = $algo ." | ".$key1." | ".$key2." | ";
		}
		elseif($algo == 'Playfair'){
			$a = 6;
		}

		$this->load->view('header');
		$this->load->view('decoder', $data);
		$this->load->view('footer');
	}
}