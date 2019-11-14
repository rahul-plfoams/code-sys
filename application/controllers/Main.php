<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index()
    {
        if ($this->form_validation->run("login")) {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $userData = $this->login_model->isvalidate($username, $password);
            if ($userData) {
                switch ($userData->user_type) {
                    case "admin":
                        foreach ($userData as $key => $value) {
                            $this->session->set_userdata($key, $value);
                        }
                        return redirect("admin");

                        break;
                    case "staff":
                        foreach ($userData as $key => $value) {
                            $this->session->set_userdata($key, $value);
                        }
                        return redirect("staff");
                        break;
                    case "vendor":
                        foreach ($userData as $key => $value) {
                            $this->session->set_userdata($key, $value);
                        }
                        return redirect("vendor");
                        break;
                    default:
                        echo "user_type not defined";
                        break;
                }
            } else {
                $this->session->sess_destroy();
                return redirect("main");
            }
        } else {
            $this->login();
        }
    }

    public function login()
    {
        $this->load->view('templates/header');
        $this->load->view('login_view');
        $this->load->view('templates/footer');
    }

    public function signin()
    {
        $this->load->view('signin');
    }

    public function data()
    {
        if ($this->session->userdata('currently_logged_in')) {
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('data');
            $this->load->view('templates/footer');
        } else {
            redirect('Main/invalid');
        }
    }

    public function invalid()
    {
        $this->load->view('invalid');
    }

    public function login_action()
    {

        if ($this->form_validation->run()) {
            $data = array(
                'username' => $this->input->post('username'),
                'currently_logged_in' => 1,
            );
            $this->session->set_userdata($data);
            redirect('Main/data');
        } else {
            redirect('Main');
        }
    }

    public function validation()
    {
        $this->load->model('login_model');

        if ($this->login_model->log_in_correctly()) {

            return true;
        } else {
            $this->form_validation->set_message('validation', 'Incorrect username/password.');
            return false;
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        return redirect('login');
    }

}
