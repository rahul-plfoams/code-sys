<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Staff extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        $this->load->view('data');
        $this->load->view('templates/footer');
    }
}
