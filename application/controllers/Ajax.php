<?php
defined("BASEPATH") or exit("No direct script access allowed");
class ajax extends CI_controller
{
    public function products()
    {
        $res = $this->input->post('query');
        $result = $this->db->like("product_name", $res)
            ->or_like("grade", $res)
            ->or_like("quality", $res)
            ->get("products")->result();

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
    public function vendorProducts()
    {
        $res = $this->input->post('query');
        $vendor = $this->input->post('vendor');

        $results = $this->db->join("products", "product_id")
            ->join("users", "users.id=vendor_pref.vendor_id")
            ->where("vendor_id", $vendor)
            ->get("vendor_pref")
            ->result();
        $table_header = ["Name", "Grade", "Quality", "Actions"];
        $template = [
            'table_open' => '<table class="table table-bordered text-center">',
        ];
        $this->table->set_heading($table_header)->set_template($template);
        foreach ($results as $result) {
            if (preg_match("/$res/", strtolower($result->product_name)) || preg_match("/$res/", strtolower($result->grade)) || preg_match("/$res/", strtolower($result->quality))) {

                $this->table->add_row($result->product_name, $result->grade, $result->quality, '<i onclick="addSearch(' . $result->product_id . ')" class="fas fa-check text-success" ></i>' . nbs(2) . '<i onclick="clearSearch()" class="fas fa-times text-danger"></i>');
            }
        }
        echo $this->table->generate();
    }
    public function orderList()
    {
        $product_id = $this->input->post("product_id");
        $vendor = $this->input->post("vendor");
        $result = $this->db->join("products", "product_id")->where(["product_id" => $product_id, "vendor_id" => $vendor])->get("vendor_pref");
        $table_header = ["Name", "Grade", "Quality", "Length", "Width", "Thickness", "Pcs", "Remark", "Actions"];
        $template = [
            'table_open' => '<table class="table table-bordered text-center">',
        ];
        $this->table->set_heading($table_header)->set_template($template);
        echo $this->table->generate($result);
    }
    public function addPref()
    {
        $product_id = $this->input->post("product_id");
        $result = $this->db->where("product_id", $product_id)->get("products")->result();
        $table_header = ["Name", "Grade", "Quality", "Rate", "Unit", "GST", "Remark", "Actions"];
        $template = [
            'table_open' => '<table class="table table-bordered text-center">',
        ];
        $this->table->set_heading($table_header)->set_template($template);
        foreach ($result as $row) {
            $this->table->add_row(
                form_hidden(["value" => $row->product_id]) .
                $row->product_name,
                $row->grade,
                $row->quality,
                form_input(["value" => $row->sale_rate, "class" => "text-center form-control"]),
                $row->unit,
                $row->gst_rate,
                form_input(["value" => $row->remark, "class" => "text-center form-control"]),
                '<i  class="fas fa-check text-success" ></i>'
                . nbs(2) .
                '<i  class="fas fa-times text-danger"></i>');
        }
        echo $this->table->generate();
    }
    public function savePref()
    {
        $vendor = $this->input->post("vendor");
        $product_id = $this->input->post("id");
        $rate = $this->input->post("rate");
        $remark = $this->input->post("remark");
        $data = [
            "vendor_id" => $vendor,
            "product_id" => $product_id,
            "product_rate" => $rate,
            "product_remark" => $remark,
        ];
        if ($this->db->insert("vendor_pref", $data)) {
            return $this->vendorPref($vendor);
        };

    }
    public function vendorPref($vendor)
    {
        $data = $this->db->join("products", "product_id")->where("vendor_id", $vendor)->get("vendor_pref")->result();
        echo "<pre>";

        $table_header = ["Name", "Grade", "Quality", "Rate", "GST", "Remark", "Actions"];
        $template = [
            'table_open' => '<table class="table table-bordered text-center">',
        ];
        $this->table->set_heading($table_header)->set_template($template);
        foreach ($data as $row) {
            $this->table->add_row(
                $row->product_name,
                $row->grade,
                $row->quality,
                $row->product_rate . "/" . $row->unit,
                $row->gst_rate,
                $row->product_remark,
                form_hidden(["value" => $row->p_in]) .
                '<i  class="fas fa-times text-danger"></i>',
            );
        }
        echo $this->table->generate();

    }
    public function delPref()
    {
        $p_in = $this->input->post("p_in");
        $vendor = $this->input->post("vendor");
        $data = ["p_in" => $p_in];
        $this->db->delete("vendor_pref", $data);
        return $this->vendorPref($vendor);
    }
    public function statusChange()
    {
        if ($this->input->post("status") == 1) {
            echo "disabled";
        } else {
            echo "enabled";
        }
    }
}
