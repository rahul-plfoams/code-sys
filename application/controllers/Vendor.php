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
        $data["products"] = $this->Vendor_model->products($data["user"]->id);
        $data["orders"] = $this->Vendor_model->order_details($data["user"]->id);
        $this->load->view('vendor/index', $data);
        $this->load->view('templates/footer');
    }
}
