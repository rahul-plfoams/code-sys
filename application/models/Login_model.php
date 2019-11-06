<?php

class Login_model extends CI_Model
{

    public function isvalidate($username, $password)
    {
        $q = $this->db->where(["mobile" => $username, "password" => $password])
            ->get("users");
        if ($q->num_rows()) {
            return $q->row();
        } else {
            return false;
        }
    }

}
