<?php $this->table->set_template([
    'table_open' => '<table id=" customers" class="unfiltered table table-bordered ">',
    'thead_open' => '<thead>',
    'thead_close' => '</thead>']);?>
<div class="container mt--7">
    <div class="card">
        <div class="card-header">
            <div class="d-flex">
                Overview
                <pre>
                <span><?=$user->company_name?></span>
                <span><?=$user->name?></span>
                <span><?=$user->mobile?></span>
                </pre>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">
            </p>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <!-- <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
                </!-->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#billing">Billing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#shipping">Shipping</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#contact">Contact/Ref</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#gst">GST/Bank</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#ledger">Ledger</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#products">Items / Goods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#order">orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#placeorder">Place orders</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="billing" class="container tab-pane fade">
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Country", "billing_country", 'class="col-form-label"')?>
                            <?=form_label($user->billing_country, "billing_country", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("State", "billing_state", 'class="col-form-label"')?>
                            <?=form_label($user->billing_state, "billing_state", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("City", "billing_city", 'class="col-form-label"')?>
                            <?=form_label($user->billing_city, "billing_city", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-8">
                            <?=form_label("Address", "billing_address", 'class="col-form-label"')?>
                            <?=form_label($user->billing_address, "billing_address", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Pincode", "billing_pincode", 'class="col-form-label"')?>
                            <?=form_label($user->billing_pincode, "billing_pincode", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Credit Limit", "credit_limit", 'class="col-form-label"')?>
                            <?=form_label($user->credit_limit, "credit_limit", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Credit days", "credit_days", 'class="col-form-label"')?>
                            <?=form_label($user->credit_days, "credit_days", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Distance", "billing_distance", 'class="col-form-label"')?>
                            <?=form_label($user->billing_distance, "billing_distance", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                </div>
                <div id="shipping" class="container tab-pane fade">
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Country", "country", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_country, "country", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("State", "state", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_state, "state", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("City", "city", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_city, "city", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-8">
                            <?=form_label("Address", "address", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_address, "address", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Pincode", "pincode", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_pincode, "pincode", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Distance", "kilometer", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_distance, "kilometer", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                </div>
                <div id="contact" class="container tab-pane fade">
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Mobile", "mobile", "class='col-form-label'")?>
                            <?=form_label($user->mobile, "mobile", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Email", "email", "class='col-form-label'")?>
                            <?=form_label($user->email, "email", "class=' col-form-label text-dark'")?>
                        </div>
                        <!-- <div class="col-sm-4">
                            <?=form_label("Phone", "phone", "class='col-form-label'")?>
                            <?=form_label($user->phone, "phone", "class=' col-form-label text-dark'")?>
                        </div> -->
                    </div>
                    <div class=" row">
                        <div class="col-sm-8">
                            <?=form_label("Website", "website", "class='col-form-label'")?>
                            <?=form_label($user->website, "website", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Reference", "reference", "class='col-form-label'")?>
                            <?=form_label($user->reference, "reference", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-12">
                            <?=form_label("Owner", "owner", "class='col-form-label'")?>
                            <?=form_label($user->owner, "owner", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                </div>
                <div id="gst" class="container tab-pane fade">
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("GST place", "gst_place", "class='col-form-label'")?>
                            <?=form_label($user->gst_place, "gst_place", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("state code", "state_code", "class='col-form-label'")?>
                            <?=form_label($user->state_code, "state_code", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("GST No", "gst_no", "class='col-form-label'")?>
                            <?=form_label($user->gst_no, "gst_no", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-6">
                            <?=form_label("A/C Holder Name", "owner", "class='col-form-label'")?>
                            <?=form_label($user->owner, "owner", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("Permanent A/c no.", "account_no", "class='col-form-label'")?>
                            <?=form_label($user->gst_no, "account_no", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-6">
                            <?=form_label("Bank Name", "bank_name", "class='col-form-label'")?>
                            <?=form_label($user->bank_name, "bank_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("A/C Type", "account_type", "class='col-form-label'")?>
                            <?=form_label($user->account_type, "account_type", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-6">
                            <?=form_label("Branch", "branch", "class='col-form-label'")?>
                            <?=form_label($user->branch, "branch", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("IFSC", "ifsc", "class='col-form-label'")?>
                            <?=form_label($user->ifsc, "ifsc", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                </div>
                <div id="ledger" class="container tab-pane fade">
                    this is ledger section
                </div>
                <div id="products" class="container tab-pane fade row">
                    <?php $table_header = ["Name", "Grade", "Quality", "Remark"];
$template = ['table_open' => '<table class="table table-bordered text-center">'];
$this->table->set_heading($table_header)->set_template($template);foreach ($products->result() as $row) {$this->table->add_row($row->product_name, $row->grade, $row->quality, $row->product_remark);}?>
                    <?=$this->table->generate();?>
                </div>
                <div id="order" class="container tab-pane fade row">
<?php
if (!empty($orders->result())) {
    $table_header = ["Order No", "Date", "Status"];
    $template = ['table_open' => '<table class="table table-bordered text-center">'];
    $this->table->set_heading($table_header)->set_template($template);
    foreach ($orders->result() as $order) {
        $date=date_create($order->order_generated);
        $this->table->add_row($order->order_id, date_format($date,"dS M Y"), $order->order_status);
    }
    echo $this->table->generate();
} else {
    echo "No records Found";
}

?>
                </div>
                <div id="placeorder" class="container tab-pane active row">
                    <?=form_input(["id" => "searchBox", "class" => "mx-auto col-4 form-control", "placeholder" => "Search Here For placing Order"])?>
                    <div id="liveSearch">
                    </div>
                    <div id="orderForm">
                    </div>
                    <div id="test">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(() => {
        vendor=<?=$this->session->id?>;
        $("#products table,#order table,#orderForm table").DataTable();
        $("#searchBox").keyup(()=>{
            val=$("#searchBox").val();
            if (val.length === 0) {
            $("#liveSearch").html("").css("border", 0);
        } else {
            $.post("<?=base_url('ajax/vendorProducts')?>", {
                    query:val,
                    vendor:vendor
                },
                (res) => {
                    $("#liveSearch").html(res)
                });
        }});
        clearSearch = () => 
            {
                $("#liveSearch").html("");
                $("#searchBox").val("");
            }
    addSearch = (product_index) => {
        $.post("<?=base_url('ajax/orderList')?>", {
                product_index: product_index,
                table_list_count: $("#orderForm table tr").length>0 ? $("#orderForm table tr").length : 0
            },
            (res) => {
                if($("#orderForm table tr").length>0)
                {
                    $("#orderForm table").append(res);
                }
                else
                {
                     $("#orderForm").html(res);
                }
                        $("#orderForm table").DataTable();
                        $("#orderForm table input[type='text'],#orderForm table textarea").parents("td").addClass("p-0 m-0");
            });
            clearSearch();
    }
    })
</script>