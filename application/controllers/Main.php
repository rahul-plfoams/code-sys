<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules("username", "User Name", "required");
        $this->form_validation->set_rules("password", "Pass Code", "required");
        $this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");
        if ($this->form_validation->run()) {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $userData = $this->login_model->isvalidate($username, $password);
            if ($userData) {
                switch ($userData->user_type) {
                    case "admin":
                        $this->session->set_userdata(["id" => $userData->id, "username" => $userData->username, "password" => $userData->password]);
                        $this->session->userdata("username");
                        return redirect("admin");
                        break;
                    case "staff":
                        return redirect("staff");
                        break;
                    case "vendor":
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
        $this->load->helper('security');
        $this->load->library('form_validation');

        // $this->form_validation->set_rules('username', 'Username:', 'required|trim|xss_clean|callback_validation');
        // $this->form_validation->set_rules('password', 'Password:', 'required|trim');

        if ($this->form_validation->run()) {
            $data = array(
                'username' => $this->input->post('username'),
                'currently_logged_in' => 1,
            );
            $this->session->set_userdata($data);
            redirect('Main/data');
        } else {
            redirect('Main');
            // $this->load->view('templates/header');
            // $this->load->view('login_view');
            // $this->load->view('templates/footer');
        }
    }

    public function signin_validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|xss_clean|is_unique[signup.username]');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique', 'username already exists');

        if ($this->form_validation->run()) {
            echo "Welcome, you are logged in.";
        } else {

            $this->load->view('signin');
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
        redirect('Main');
    }

}
