<?php 
defined("BASEPATH") or exit("No direct script access allowed");
class Products extends CI_controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_model");
    }
    function index(){
        $this->products();
        
    }
    public function default_view($file, $data)
    {
        $this->load->view('templates/header');
        $this->load->view("templates/nav");
        $this->load->view($file, $data);
        $this->load->view('templates/footer');
    }
    public function products()
    {

        $data["products"] = $this->Product_model->list_products();
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
        $this->Product_model->insert_product([
            "product_name" => $product_name,
            "grade" => $product_grade,
            "quality" => $product_quality,
            "sale_rate" => $product_sale_rate,
            "gst_rate" => $product_gst_rate,
            "remark" => $product_remark,
            "unit" => $product_unit,
        ]);
        return redirect("products");}
        else{
            return redirect("products");
        }
    }
    function getProduct(){
         $product_id=$this->input->post("product_id");
        echo json_encode($this->Product_model->get_single_product($product_id));
    }
    function updateProduct(){
        $product_id=$this->input->post("product_id");
        $data=[
            "product_name"=>$this->input->post("product_name"),
            "grade"=>$this->input->post("product_grade"),
            "quality"=>$this->input->post("product_quality"),
            "sale_rate"=>$this->input->post("product_sale_rate"),
            "gst_rate"=>$this->input->post("product_gst_rate"),
            "remark"=>$this->input->post("product_remark"),
            "unit"=>$this->input->post("units")
        ];
         $this->Product_model->update_product($product_id,$data);
         return redirect("products");
    }
    function deleteProduct(){
        $id=$this->input->post("product_id");
        echo json_encode($this->Product_model->remove_product($id)->result());
    }
}
