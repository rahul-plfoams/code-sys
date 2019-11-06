<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('login_view');
        $this->load->view('templates/footer');
    }
    public function login_action()
    {
        // echo "login action test";
    }
}
