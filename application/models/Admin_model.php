<?php
class Admin_model extends CI_Model
{
    public function getusers()
    {
        return $this->db->join("vendor_details", "id")
            ->get("users");
           
    }
    public function new_user($name, $mobile, $user_type, $email, $password)
    {
        $logindata = ["name" => $name, "username" => $mobile, "user_type" => $user_type, "email" => $email, "password" => $password];
        $vendor_details = ["mobile" => $mobile];
        $this->db->insert("users", $logindata);
        $this->db->insert("vendor_details", $vendor_details);
    }
    public function delete_user($id)
    {
        $this->db->delete("users", ["id" => $id]);
        $this->db->delete("vendor_details", ["id" => $id]);
    }
    public function list_products()
    {
        return $this->db->get("products");
    }
}
