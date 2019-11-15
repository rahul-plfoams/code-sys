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
                $this->table->add_row($row->product_name, $row->grade, $row->quality, '<i class="fas fa-check text-success" product_id=' . $row->product_id . '></i>' . nbs(2) . '<i onclick="clearsearch()" class="fas fa-times text-danger"></i>');
            }
            echo $this->table->generate();
        } else {
            echo "No records";
        }
    }
}
