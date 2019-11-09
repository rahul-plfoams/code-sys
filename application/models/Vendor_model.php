<?php
class Vendor_model extends CI_Model
{
    public function get_details()
    {
        return $this->db->join("vendor_details", "id")->get("users");
    }
}
