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
        $data['users'] = $this->users();
        $this->load->view('templates/header');
        $this->load->view("templates/nav");
        $this->load->view('admin/index', $data);
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
        return $users = $this->Admin_model->getusers()->result();
    }
    public function delete($id)
    {
        $this->Admin_model->delete_user($id);
        return redirect("admin");
    }
    public function edit($id)
    {
        $this->load->view('templates/header');
        $this->load->view("templates/nav");
        $data["user"] = $this->db->join("vendor_details", "id")->where("id", $id)->get("users")->row();
        $this->load->view('admin/edit', $data);
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
