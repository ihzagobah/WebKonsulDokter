<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct(); 
        $this->load->model('AdminModel');
    }

    public function loginadmin() {
        $where = [
            'username' => $this->input->post('username'),
            'katasandi' => $this->input->post('katasandi'),
        ];
        $admin = $this->AdminModel->getAdmin($where);

        if ($admin->num_rows() > 0) {
            $this->session->set_userdata('admin', $admin->row_array());
            $this->session->set_flashdata('message', 'Login success');
            redirect('page/homeadmin');
        } else {
            $this->session->set_flashdata('message', 'Login fail');
            redirect('page/loginadmin');
        }
    }
}
