<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
    }
    public function index()
    {
        $this->form_validation->set_rules("username", "User Name", "required");
        $this->form_validation->set_rules("password", "Pass Code", "required");
        $this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

        $this->load->view('templates/header');
        $this->load->view("templates/nav");
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }
    public function create_user()
    {
        $name = $this->input->post("name");
        $mobile = $this->input->post("mobile");
        $user_type = $this->input->post("user_type");
        $email = $this->input->post("email");
        $password = $this->input->post("password_1");
        $this->Admin_model->new_user($name, $mobile, $user_type, $email, $password);
        return redirect("admin");
    }
    public function users()
    {
        $users = $this->Admin_model->getusers()->result();
        foreach ($users as $user) {
            echo "<tr>
                <td>$user->username</td>
                <td>$user->mobile</td>
                <td>$user->user_type</td>
                <td> <a href='admin/edit/$user->id'>Edit</a>/<a href='admin/delete/$user->id'>Delete</a> </td>
                <td>$user->status</td>
                </tr>";
        }
    }
    public function delete($id)
    {
        echo $this->Admin_model->delete_user($id);
        return redirect("admin");
    }
    public function edit($id)
    {
        $this->load->view('templates/header');
        $this->load->view("templates/nav");
        $this->load->view('admin/edit');
        $this->load->view('templates/footer');
    }
    public function products()
    {
        $products = $this->Admin_model->list_products()->result();
        foreach ($products as $product) {
            echo "<pre>";
            print_r($product->product_name);
        }
    }
    public function orders()
    {
        return redirect("orders");
    }
}
