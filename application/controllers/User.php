<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');

    }

    public function login() {
        $where = [
            'email' => $this->input->post('email'),
            'katasandi' => $this->input->post('katasandi'),
        ];
        $user = $this->UserModel->getUser($where);

        if ($user->num_rows() > 0) {
            $this->session->set_userdata('user', $user->row_array());
            $this->session->set_flashdata('message', 'Login success');
            redirect('page/home');
        } else {
            $this->session->set_flashdata('message', 'Login fail');
            redirect('page/login');
        }

    }

    public function register() {
        $data = [
            'nama' => $this->input->post('nama'),
            'nomorhp' => $this->input->post('nomorhp'),
            'email' => $this->input->post('email'),
            'katasandi' => $this->input->post('katasandi'),
            'alamat' => $this->input->post('alamat'),
            'tanggal' => $this->input->post('tanggal'),
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
        ];
        $this->UserModel->addUser($data);

        $this->session->set_flashdata('message', 'Register success');
        redirect('page/login');
    }

    public function logout() {
        $this->session->unset_userdata('user');
        $this->session->set_flashdata('message', 'Logout success');
        redirect('page/login');
    }
	
	public function editakun(){
		$data = [
            'nama' => $this->input->post('nama'),
            'katasandi' => $this->input->post('katasandi'),
        ];
        $this->UserModel->edit_akun($data);

        $this->session->set_flashdata('message', 'Update success');
        redirect('Page/akun');
	}
	
	public function hapusakun()
	{
		$this->UserModel->hapusakun($data);
		redirect('page/login');
	}

	public function tambahobat(){
		$data = [
            'nama' => $this->input->post('nama'),
            'nama_obat' => $this->input->post('nama_obat'),
            'harga' => $this->input->post('harga'),
			];
		$this->UserModel->addPembayaran($data);
		redirect('page/home');
	}

	public function hapusobat()
	{
		$data['namaobat'] = '';
		$data['hargaobat'] = '';
		$data['namauser'] = '';
		$this->load->view("page_header");
		$this->load->view('page_pembayaran', $data);
	}


}