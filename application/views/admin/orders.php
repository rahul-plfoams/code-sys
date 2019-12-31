<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="text-uppercase ls-1 mb-1">All Orders</h2>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
        <?php
if (!empty($orders->result())) {
    $table_header = ["Order No", "Company","Date", "Status","Actions"];
    $template = ['table_open' => '<table class="table table-bordered text-center" id="orderTable">'];
    $this->table->set_heading($table_header)->set_template($template);
    foreach ($orders->result() as $order) {
      $date=date_create($order->order_generated);
        $this->table->add_row(
            $order->order_id, 
            $order->company_name,
            date_format($date,"dS M Y"),
            $order->order_status,
            "<a class='btn btn-info' href='".base_url("admin/order_view/$order->order_id")."'>View</a>
            <a class='btn btn-success' disabled>Update</a>
            <a class='btn btn-danger' disabled>Delete</a>"  
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