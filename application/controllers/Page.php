<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('Obat_model');
    }
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
	
	private function checkLogin() {
        if (!$this->session->userdata('user')) {
            redirect('page/login');
        }
    }
	
	private function checkLoginAdmin() {
        if (!$this->session->userdata('admin')) {
            redirect('page/loginadmin');
        }
    }

	public function index() {
        redirect('page/login');
    }
    public function addregister(){
         $data = [
            'nama' => $this->input->post('name'),
            'nomorhp' => $this->input->post('username'),
            'email' => $this->input->post('nomorhp'),
            'sandi' => $this->input->post('sandi'),
            'alamat' => $this->input->post('alamat'),
            'tanggal' => $this->input->post('tanggal'),
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
        ];
        $this->UserModel->addUser($data);

        $this->session->set_flashdata('message', 'Register success');
        redirect('page/home');
    }
    
    public function login() {
        $this->load->view('form_login');
    }
	
	public function loginadmin() {
        $this->load->view('form_loginadmin');
    }

    public function register() {
        $this->load->view('form_registrasi');
    }

    public function home() {
        $this->checkLogin();
        // $data = [
        //     'books' => $this->BookModel->getAllBooks()->result_array(),
        // ];
		$this->load->view('page_header');
        $this->load->view('HomeView');
    }
	
	public function akun(){
		$data_akun = $this->UserModel->Getakun_nama();
		$this->load->view('page_header');
		$this->load->view('page_akun',['data'=>$data_akun]);
	}
    public function obat(){
        $data['obats'] = $this->Obat_model->getAll();
        $this->load->view('page_header');
        $this->load->view("page_obat", $data);
    }
	public function pembayaran(){
		$data['namaobat'] = $this->input->post('nama');
		$data['hargaobat'] = $this->input->post('harga');
		$data['namauser'] = $this->session->user['nama'];;
		$this->load->view('page_header');
		$this->load->view('page_pembayaran',$data);
    }
	public function roomchat(){
		$this->load->view('roomchat');
    }
    public function homeadmin(){
        redirect('obats');
    }
}

