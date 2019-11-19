<?php
defined("BASEPATH") or exit("No direct script access allowed");
class ajax extends CI_controller
{
    public function products()
    {
        $res = $this->input->post('query');
        $result = $this->db->like("product_name", $res)->get("products")->result();
        // echo "<pre>";
        // print_r($result);
        if (!empty($result)) {
            $table_header = ["Name", "Grade", "Quality", "Actions"];
            $template = [
                'table_open' => '<table class="table table-bordered text-center">',
            ];
            $this->table->set_heading($table_header)->set_template($template);
            foreach ($result as $row) {
                $this->table->add_row($row->product_name, $row->grade, $row->quality, '<i onclick="addSearch(' . $row->product_id . ')" class="fas fa-check text-success" ></i>' . nbs(2) . '<i onclick="clearSearch()" class="fas fa-times text-danger"></i>');
            }
            echo $this->table->generate();
        } else {
            echo "No records";
        }
    }
    public function addPref()
    {
        $product_id = $this->input->post("product_id");
        $result = $this->db->where("product_id", $product_id)->get("products")->result();
        $table_header = ["ID", "Name", "Grade", "Quality", "Rate", "Unit", "GST", "Remark", "Actions"];
        $template = [
            'table_open' => '<table class="table table-bordered text-center">',
        ];
        $this->table->set_heading($table_header)->set_template($template);
        foreach ($result as $row) {
            $this->table->add_row(
                $row->product_id,
                $row->product_name,
                $row->grade,
                $row->quality,
                form_input(["value" => $row->sale_rate, "class" => "text-center form-control"]),
                $row->unit,
                $row->gst_rate,
                form_input(["value" => $row->remark, "class" => "text-center form-control"]),
                '<i onclick="addToList()" class="fas fa-check text-success" ></i>'
                . nbs(2) .
                '<i onclick="delFromList()" class="fas fa-times text-danger"></i>');
        }
        echo $this->table->generate();
        // echo "<pre>";
        // print_r($result);
    }
    public function savePref()
    {
        $this->input->post("");
    }
    public function delPref()
    {
        $this->input->post("");
    }
}
