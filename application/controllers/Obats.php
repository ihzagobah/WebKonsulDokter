<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Obats extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("obat_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["obats"] = $this->obat_model->getAll();
        $this->load->view("admin/obat/list", $data);
    }

    public function add()
    {
        $obat = $this->obat_model;
        $validation = $this->form_validation;
        $validation->set_rules($obat->rules());

        if ($validation->run()) {
            $obat->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/obat/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('obats');
       
        $obat = $this->obat_model;
        $validation = $this->form_validation;
        $validation->set_rules($obat->rules());

        if ($validation->run()) {
            $obat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["obat"] = $obat->getById($id);
        if (!$data["obat"]) show_404();
        
        $this->load->view("admin/obat/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->obat_model->delete($id)) {
            redirect(site_url('obats'));
        }
    }
}
