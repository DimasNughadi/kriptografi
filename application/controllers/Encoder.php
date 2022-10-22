<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encoder extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('encoder_model');
    }

	public function index()
	{
		$data['plaintext'] = null;
		$data['key'] = null;
		$data['algokey'] = "Pilih Jenis Algoritma";
		$data['hasil'] = null;
		$this->load->view('header');
		$this->load->view('encoder', $data);
		$this->load->view('footer');
	}

	public function encode()
	{
		$algo = $this->input->post('algo');
		$plaintext = $this->input->post('plaintext');
		if($algo == 'Caesar'){
			$key = $this->input->post('key1');
			$data['hasil'] = $this->encoder_model->$algo($plaintext, $key);
			$data['plaintext'] = $plaintext;
			$data['algokey'] = $algo ." | ".$key;
		}elseif($algo == 'Vigenere'){
			$key = $this->input->post('key2');
			$data['hasil'] = $this->encoder_model->$algo($plaintext, $key);
			$data['plaintext'] = $plaintext;
			$data['algokey'] = $algo ." | ".$key;
		}
		elseif($algo == 'Hill'){
			$key1 = $this->input->post('key3');
			$key2 = $this->input->post('key33');
			$key3 = $this->input->post('key333');
			$key4 = $this->input->post('key3333');
			$data['hasil'] = $this->encoder_model->$algo($plaintext, $key1, $key2, $key3, $key4);
			$data['plaintext'] = $plaintext;
			$data['algokey'] = $algo ." | ".$key1." | ".$key2." | ".$key3." | ".$key4;
		}
		elseif($algo == 'Transposisi'){
			$a = 4;
		}
		elseif($algo == 'Affine'){
			$key1 = $this->input->post('key5');
			$key2 = $this->input->post('key55');
			$data['hasil'] = $this->encoder_model->$algo($plaintext, $key1, $key2);
			$data['plaintext'] = $plaintext;
			$data['algokey'] = $algo ." | ".$key1." | ".$key2." | ";
		}
		elseif($algo == 'Playfair'){
			$a = 6;
		}
		// $key2 = $this->input->post('key'.$b);


		$this->load->view('header');
		$this->load->view('encoder', $data);
		$this->load->view('footer');
	}
}