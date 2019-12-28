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
        $this->db->insert("vendor_details",["owner"=>$name]);
    }
    public function delete_user($id)
    {
        $data = ["id" => $id];
        $this->db->delete("users", $data);
        $this->db->delete("vendor_details", $data);
    }
    public function update_user($data)
    {
        $query = $this->db->where("id",$data["id"])->update("users", $data);
    }
public function update_user_details($data){
    $query = $this->db->where("id",$data["id"])->update("vendor_details",$data);
}
    
}
