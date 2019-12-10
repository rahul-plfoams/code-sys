<?php
class Admin_model extends CI_Model
{
    //users
    public function getUsers()
    {
        return $this->db->join("vendor_details", "id")
            ->get("users");

    }
    public function new_user($name, $mobile, $user_type, $email, $password)
    {
        $loginData = ["name" => $name, "mobile" => $mobile, "user_type" => $user_type, "email" => $email, "password" => $password];
        $this->db->insert("users", $loginData);
        $this->db->insert("vendor_details", ["status" => 1]);
    }
    public function delete_user($id)
    {
        $data = ["id" => $id];
        $this->db->delete("users", $data);
        $this->db->delete("vendor_details", $data);
    }
    public function update_user($data,$table)
    {
        $query = $this->db->where("id",$data["id"])->update($table, $data);
        // echo $query;
    }

    //products
    public function insert_product($data)
    {
        $this->db->insert("products", $data);
    }
    public function remove_product($id)
    {
        $this->db->where("product_id", $id)->delete("products");
    }
    public function list_products()
    {
        return $this->db->get("products");
    }
}
