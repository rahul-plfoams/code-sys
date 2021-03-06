<?php
class Vendor_model extends CI_Model
{
    public function get_details($id)
    {
        return $this->db->join("vendor_details", "id")->where("id",$id)->get("users");
    }
    public function products($vendor)
    {
        return $this->db->join("users", "users.id=vendor_pref.vendor_id")
            ->join("products", "product_id")
            ->where("vendor_id", $vendor)
            ->get("vendor_pref");
    }
    public function order_details($vendor_id)
    {
        return $this->db->where("vendor_id", $vendor_id)->get("orders");
    }
    public function place_order($data){
        return $this->db->insert("orders",$data);
    }
    
}
