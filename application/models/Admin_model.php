<?php
class Admin_model extends CI_Model
{
    //users
    public function getusers()
    {
        return $this->db->join("vendor_details", "id")
            ->get("users");

    }
    public function new_user($name, $mobile, $user_type, $email, $password)
    {
        $logindata = ["name" => $name, "mobile" => $mobile, "user_type" => $user_type, "email" => $email, "password" => $password];
        $this->db->insert("users", $logindata);
        $this->db->insert("vendor_details", ["status" => 1]);
    }
    public function delete_user($id)
    {
        $data = ["id" => $id];
        $this->db->delete("users", $data);
        $this->db->delete("vendor_details", $data);
    }
    public function update_user($data)
    {
        $query = $this->db->where("name", $data["name"])->update("users", $data);
    }

    //products
    public function insert_product($data)
    {
        $this->db->insert("products", $data);
    }
    public function list_products()
    {
        return $this->db->get("products");
    }
}
