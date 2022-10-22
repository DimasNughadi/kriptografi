<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Rumus extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function LuasSegitiga($alas,$tinggi) {
		return 0.5*$alas*$tinggi;
	}
	
	public function LuasPersegi($sisi) {
		return $sisi*$sisi;
	}
	
	public function LuasPersegiPanjang($p,$l) {
		return $p*$l;
	}

}