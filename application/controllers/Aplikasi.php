<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasi extends MY_Controller {
	public function index(){
		$data = $this->db->order_by('nama')->get('aplikasi')->result();
		$this->twig->display('aplikasi/beranda', compact('data'));
	}
}
