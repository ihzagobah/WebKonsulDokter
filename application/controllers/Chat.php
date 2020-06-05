<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ChatModel');
	}
	public function addChat(){
		$data = [
			'subjek' => $this->input->post('subjek'),
			'nama' => $this->input->post('nama'),
			'pilihan_dokter' => $this->input->post('pilihan_dokter'),
			'pesan' => $this->input->post('pesan'),
		];
		$this->ChatModel->addChat($data);

		$this->session->set_flashdata('message', 'Pesan berhasil dikirim');
		redirect('page/roomchat');
	}
}
