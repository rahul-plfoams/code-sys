<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="text-uppercase ls-1 mb-1">Order No.<?=$order->row()->order_id?></h2>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
        <?php
if (!empty($order->result())) {
    $table_header = ["product_pref", "rate","remark","length", "Width","Thickness","Quantity","Remark"];
    $template = ['table_open' => '<table class="table table-bordered text-center" id="orderTable">'];
    $this->table->set_heading($table_header)->set_template($template);
    $order_data=unserialize($order->row()->order_details); 
    foreach ($order_data as $item) {
        $product=$this->db->join("vendor_pref","product_id")->get("products")->row();
        $this->table->add_row(
            $product->product_name,
            $product->product_rate,
            $product->product_remark,
            $item["length"],
            $item["width"],
            $item["thickness"],
            $item["pcs"],
            $item["remark"]
        );
    }
    echo $this->table->generate();
} else {
    echo "No records Found";
}

?>
      </div>

    </div>
   
  </div>
</div>
<script>
$(()=>{
    $("#orderTable").DataTable();
});
</script>