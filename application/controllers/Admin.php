<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Admin extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
    }
    public function index()
    {
        $data['users'] = $this->users();
        $this->default_view("admin/index", $data);
    }
    public function default_view($file, $data)
    {
        $this->load->view('templates/header');
        $this->load->view("templates/nav");
        $this->load->view($file, $data);
        $this->load->view('templates/footer');
    }
    public function create_user()
    {
        if ($this->form_validation->run("newuser")){
        $name = $this->input->post("name");
        $mobile = $this->input->post("mobile");
        $user_type = $this->input->post("user_type");
        $email = $this->input->post("email");
        $password = $this->input->post("password_1");
        $this->Admin_model->new_user($name, $mobile, $user_type, $email, $password);
        return redirect("admin");
    }
    else{
        return $this->index();
    }
    }
    public function users()
    {
        return $users = $this->Admin_model->getUsers()->result();
    }
    public function delete($id)
    {
        $this->Admin_model->delete_user($id);
        return redirect("admin");
    }
    public function edit($id)
    {
        $data["user"] = $this->db->join("vendor_details", "id")->where("id", $id)->get("users")->row();
        $this->default_view("admin/edit", $data);
    }
    public function update($data)
    {
        $this->Admin_model->update_user($data);
    }
    public function products()
    {

        $data["products"] = $this->Admin_model->list_products();
        $this->default_view('admin/products', $data);
    }
    public function add_product()
    {
        if($this->form_validation->run("addproduct")){
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
        return $this->products();}
        else{
            return $this->products();
        }
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
        $billing_country=$this->input->post("billing_country");
        $billing_state=$this->input->post("billing_state");
        $billing_city=$this->input->post("billing_city");
        $billing_address=$this->input->post("billing_address");
        $billing_pincode=$this->input->post("billing_pincode");
        $credit_limit=$this->input->post("credit_limit");
        $credit_days=$this->input->post("credit_days");
        $billing_distance=$this->input->post("billing_distance");
        $id = $this->input->post("id");
        $data = [
"billing_country"=>$billing_country,
"billing_state"=>$billing_state,
"billing_city"=>$billing_city,
"billing_address"=>$billing_address,
"billing_pincode"=>$billing_pincode,
"credit_limit"=>$credit_limit,
"credit_days"=>$credit_days,
"billing_distance"=>$billing_distance
        ];
        $this->update($data);
        return redirect("admin/edit/$id");
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
