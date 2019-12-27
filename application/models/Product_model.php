<?php
class Product_model extends CI_Model
{

    //products
    public function list_products()
    {
        return $this->db->get("products");
    }
    public function insert_product($data)
    {
        $this->db->insert("products", $data);
    }
    public function remove_product($id)
    {
        $this->db->where("product_id", $id)->delete("products");
        return $this->list_products();
    }
   function update_product($id,$data){
       $this->db->where("product_id",$id)->update("products",$data);
   }
    
    public function get_single_product($id){
return $this->db->where("product_id",$id)->get("products")->row_array();
    }

}
