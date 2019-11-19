<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Orders extends CI_controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view("templates/nav");
        $this->load->view("admin/orders");
        $this->load->view('templates/footer');
    }
}
