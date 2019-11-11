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
    public function update($data)
    {
        $this->Admin_model->update_user($data);
    }
    public function products()
    {

        $this->load->view('templates/header');
        $this->load->view("templates/nav");
        $data["products"] = $this->Admin_model->list_products();
        $this->load->view('admin/products', $data);
        $this->load->view('templates/footer');
    }
    public function add_product()
    {
        $product_name = $this->input->post("product_name");
        $product_grade = $this->input->post("product_grade");
        $product_quality = $this->input->post("product_quality");
        $product_sale_rate = $this->input->post("product_sale_rate");
        $product_gst_rate = $this->input->post("product_gst_rate");
        $product_remark = $this->input->post("product_remark");
        $product_unit = $this->input->post("units");
        $this->Admin_model->insert_product([
            "product_name" => $product_name,
            "grade" => $product_grade,
            "quality" => $product_quality,
            "sale_rate" => $product_sale_rate,
            "gst_rate" => $product_gst_rate,
            "remark" => $product_remark,
            "unit" => $product_unit,
        ]);
        return $this->products();
    }

    public function delete_product($id)
    {
        $this->Admin_model->remove_product($id);
        return $this->products();
    }

    public function orders()
    {
        return redirect("orders");
    }
    public function overview()
    {
        $company_name = $this->input->post("company_name");
        $name = $this->input->post("name");
        $mobile = $this->input->post("mobile");
        $user_type = $this->input->post("role");
        $id = $this->input->post("id");
        $data = ["id" => $id, "company_name" => $company_name, "name" => $name, "mobile" => $mobile, "user_type" => $user_type];
        $this->update($data);
        return redirect("admin/edit/$id");
    }
    public function billing()
    {

    }
    public function shipping()
    {

    }
    public function contact()
    {

    }
    public function gst()
    {

    }
}
