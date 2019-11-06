<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Employee extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('employee/index');
        $this->load->view('templates/footer');
    }

}
