<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vendor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Vendor_model");
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $data["user"] = $this->Vendor_model->get_details()->row();
        $this->load->view('vendor/index', $data);
        $this->load->view('templates/footer');
    }
}
