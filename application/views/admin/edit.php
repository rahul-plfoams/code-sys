<?php $this->table->set_template([
    'table_open' => '<table id=" customers" class="unfiltered table table-bordered ">',
    'thead_open' => '<thead>',
    'thead_close' => '</thead>']);?>
<div class="container mt--7">
    <div class="card">
        <div class="card-header">
            <div class="d-flex">
                Overview
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">
            </p>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
                </li>
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
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="overview" class="container tab-pane active">
                    <?=form_open("admin/overview", ["id" => "form_overview"])?>
                    <?=form_hidden(["id" => "$user->id"]);?>
                    <div class="form-group row">
                        <?=form_label("Company Name", "company_name", "class='col-sm-2 col-form-label'")?>
                        <?=form_input(["class" => "form-control col-sm-10", "id" => "company_name", "name" => "company_name", "placeholder" => "Type Company Name here", "value" => $user->company_name])?>
                    </div>
                    <div class="form-group row">
                        <?=form_label("Name", "name", "class='col-sm-2 col-form-label'")?>
                        <?=form_input(["class" => "form-control col-sm-10", "id" => "name", "name" => "name", "placeholder" => "Type Name here", "value" => $user->name]);?>
                        
                    </div>
                    <div class="form-group row">
                        <?=form_label("Mobile", "mobile", "class='col-sm-2 col-form-label'")?>
                        <?=form_input(["class" => "form-control col-sm-10", "id" => "mobile", "name" => "mobile", "placeholder" => "Type Mobile No here", "value" => $user->mobile])?>
                    </div>
                    <div class="form-group row">
                        <?=form_label("Role", "role", "class='col-sm-2 col-form-label'")?>
                        <?=form_input(["class" => "form-control col-sm-10", "id" => "role", "name" => "role", "placeholder" => "Type user role here", "value" => $user->user_type])?>
                    </div>
                    <div class="btn-grp">
                        <?=form_button(["class" => "btn btn-dark button btnPush btnBlueGreen", "content" => "Edit"])?>
                        <?=form_button(["class" => "btn btn-success button btnPush btnBlueGreen", "type" => "submit", "name" => "update", "content" => "Save", "disabled" => "true"])?>
                    </div>
                    <?=form_close()?>
                </div>
                <div id="billing" class="container tab-pane fade">
                    <?=form_open("admin/billing", ["id" => "form_billing"])?>
                    <?=form_hidden(["id" => "$user->id"]);?>
                    <?=form_hidden(["id" => "$user->id"]);?>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <?=form_label("Country", "billing_country", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "billing_country", "id" => "billing_country", "placeholder" => "Type country here..", "value" => $user->billing_country])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("State", "billing_state", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "billing_state", "id" => "billing_state", "placeholder" => "Type state here..", "value" => $user->billing_state])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("City", "billing_city", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "billing_city", "id" => "billing_city", "placeholder" => "Type city here..", "value" => $user->billing_city])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <?=form_label("Address", "billing_address", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "billing_address", "id" => "billing_address", "placeholder" => "Type address here..", "value" => $user->billing_address])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Pincode", "billing_pincode", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "billing_pincode", "id" => "billing_pincode", "placeholder" => "Type pincode here..", "value" => $user->billing_pincode])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <?=form_label("Credit Limit", "credit_limit", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "credit_limit", "id" => "credit_limit", "placeholder" => "Type credit limit here..", "value" => $user->credit_limit])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Credit days", "credit_days", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "credit_days", "id" => "credit_days", "placeholder" => "Type credit days here..", "value" => $user->credit_days])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Distance", "billing_distance", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "billing_distance", "id" => "billing_distance", "placeholder" => "Type kilometer here..", "value" => $user->billing_distance])?>
                        </div>
                    </div>
                    <div class="btn-grp">
                        <?=form_button(["class" => "btn btn-dark button btnPush btnBlueGreen", "content" => "Edit"])?>
                        <?=form_button(["class" => "btn btn-success button btnPush btnBlueGreen", "type" => "submit", "name" => "update", "content" => "Save", "disabled" => "true"])?>
                    </div>
                    <?=form_close()?>
                </div>
                <div id="shipping" class="container tab-pane fade">
                    <?=form_open("admin/shipping", ["id" => "form_shipping"])?>
                    <?=form_hidden(["id" => "$user->id"]);?>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <?=form_label("Country", "country", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "shipping_country", "id" => "shipping_country", "placeholder" => "Type shipping_country here..", "value" => $user->shipping_country])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("State", "state", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "shipping_state", "id" => "shipping_state", "placeholder" => "Type shipping_state here..", "value" => $user->shipping_state])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("City", "city", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "shipping_city", "id" => "shipping_city", "placeholder" => "Type shipping_city here..", "value" => $user->shipping_city])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <?=form_label("Address", "address", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "shipping_address", "id" => "shipping_address", "placeholder" => "Type shipping_address here..", "value" => $user->shipping_address])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Pincode", "pincode", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "shipping_pincode", "id" => "shipping_pincode", "placeholder" => "Type shipping_pincode here..", "value" => $user->shipping_pincode])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <?=form_label("Distance", "kilometer", 'class="col-form-label"')?>
                            <?=form_input(["class" => "form-control", "name" => "shipping_distance", "id" => "shipping_distance", "placeholder" => "Type shipping_distance here..", "value" => $user->shipping_distance])?>
                        </div>
                    </div>
                    <div class="btn-grp">
                        <?=form_button(["class" => "btn btn-dark button btnPush btnBlueGreen", "content" => "Edit"])?>
                        <?=form_button(["class" => "btn btn-success button btnPush btnBlueGreen", "type" => "submit", "name" => "update", "content" => "Save", "disabled" => "true"])?>
                    </div>
                    <?=form_close()?>
                </div>
                <div id="contact" class="container tab-pane fade">
                    <?=form_open("admin/contact", ["id" => "form_contact"])?>
                    <?=form_hidden(["id" => "$user->id"]);?>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <?=form_label("Mobile", "mobile", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "mobile", "name" => "mobile", "placeholder" => "Type mobile here..", "value" => $user->mobile])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Email", "email", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "email", "name" => "email", "placeholder" => "Type email here..", "value" => $user->email])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <?=form_label("Website", "website", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "website", "name" => "website", "placeholder" => "Type website here..", "value" => $user->website])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Reference", "reference", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "reference", "name" => "reference", "placeholder" => "Type reference here..", "value" => $user->reference])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <?=form_label("Owner", "owner", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "owner", "name" => "owner", "placeholder" => "Type owner here..", "value" => $user->owner])?>
                        </div>
                    </div>
                    <div class="btn-grp">
                        <?=form_button(["class" => "btn btn-dark button btnPush btnBlueGreen", "content" => "Edit"])?>
                        <?=form_button(["class" => "btn btn-success button btnPush btnBlueGreen", "type" => "submit", "name" => "update", "content" => "Save", "disabled" => "true"])?>
                    </div>
                    <?=form_close()?>
                </div>
                <div id="gst" class="container tab-pane fade">
                    <?=form_open("admin/gst", ["id" => "form_gst"])?>
                    <?=form_hidden(["id" => "$user->id"]);?>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <?=form_label("GST place", "gst_place", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "gst_place", "name" => "gst_place", "placeholder" => "Type gst_place here..", "value" => $user->gst_place])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("state code", "state_code", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "state_code", "name" => "state_code", "placeholder" => "Type state_code here..", "value" => $user->state_code])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("GST No", "gst_no", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "gst_no", "name" => "gst_no", "placeholder" => "Type gst_no here..", "value" => $user->gst_no])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <?=form_label("A/C Holder Name", "owner", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "owner", "name" => "owner", "placeholder" => "Type owner here..", "value" => $user->owner])?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("Permanent A/c no.", "account_no", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "account_no", "name" => "account_no", "placeholder" => "Type account_no here..", "value" => $user->account_no])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <?=form_label("Bank Name", "bank_name", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "bank_name", "name" => "bank_name", "placeholder" => "Type bank_name here..", "value" => $user->bank_name])?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("A/C Type", "account_type", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "account_type", "name" => "account_type", "placeholder" => "Type account_type here..", "value" => $user->account_type])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <?=form_label("Branch", "branch", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "branch", "name" => "branch", "placeholder" => "Type branch here..", "value" => $user->branch])?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("IFSC", "ifsc", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "ifsc", "name" => "ifsc", "placeholder" => "Type ifsc here..", "value" => $user->ifsc])?>
                        </div>
                    </div>
                    <div class="btn-grp">
                        <?=form_button(["class" => "btn btn-dark button btnPush btnBlueGreen", "content" => "Edit"])?>
                        <?=form_button(["class" => "btn btn-success button btnPush btnBlueGreen", "type" => "submit", "name" => "update", "content" => "Save", "disabled" => "true"])?>
                    </div>
                    <?=form_close()?>
                </div>
                <div id="ledger" class="container tab-pane fade">
                    <div id="importFrm">
                        <?=form_open("importData.php?id=")?>
                        <?=form_hidden(["id" => "$user->id"]);?>
                        <?=$this->table->add_row(form_upload(["class" => "chooseFileInput", "name" => "file"]), form_submit(["class" => "btn btn-primary", "name" => "importSubmit", "value" => "IMPORT"]))->generate();?>
                        <?=form_close()?>
                        <?=$this->table->set_heading(["date", "particulars", "remark", "voucher_type", "voucher_no", "debit", "credit"])->generate();?>
                    </div>
                </div>
                <div id="products" class="container tab-pane fade row">
                    <div class="col-lg-12">
                        <form>
                            <div class="form-group row">
                                <div class="col-lg-5 mx-auto mt-4">
                                    <input type="text" id="searchBox" size="30" placeholder="search product here..." class="searching form-control" onkeyup="showResult(this.value)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <div id="liveSearch">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="addPref">
                    </div>
                   <div id="savePref">
<?php
$data = $this->db->join("products", "product_id")->where("vendor_id", $user->id)->get("vendor_pref")->result();
echo "<pre>";
$table_header = ["Name", "Grade", "Quality", "Rate", "GST", "Remark", "Actions"];
$template = [
    'table_open' => '<table class="table table-bordered text-center">',
];
$this->table->set_heading($table_header)->set_template($template);
foreach ($data as $row) {
    $this->table->add_row(
        $row->product_name,
        $row->grade,
        $row->quality,
        $row->product_rate . "/" . $row->unit,
        $row->gst_rate,
        $row->product_remark,
        form_hidden(["value" => $row->p_in]) .
        '<i  class="fas fa-times text-danger"></i>'
    );
}
echo $this->table->generate();
?>
                   </div>
<div id="test">
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
const vendor=<?=$user->id?>;
(function ($) {
    $.fn.toggleReadonly = function () {
        return this.each(function () {
            var $this = $(this);
            if ($this.attr("readonly")) $this.removeAttr("readonly");
            else $this.attr("readonly", "readonly");
        });
    };
})(jQuery);
$(document).ready(function () {
    $('#savePref pre table').DataTable();
    $("[id^=form_] input:text").prop("readonly", true);
    $("input.searching").attr("readonly", false);
    $("button:contains('Edit')").click(function () {
        $("[id^=form_] input:text").toggleReadonly();
        $("[type='submit']").removeAttr("disabled");
    });
    showResult = (val) => {
        if (val.length === 0) {
            $("#liveSearch").html("").css("border", 0);
        } else {
            $.post("<?=base_url('ajax/products')?>", {
                    query: val
                },
                (res) => {
                    $("#liveSearch").html(res)
                });
        }
    }
    clearSearch = () => {
        $("#liveSearch").html("");
        $("#searchBox").val("");
    }
    addSearch = (product_id) => {
        $.post("<?=base_url('ajax/addPref')?>", {
                product_id: product_id
            },
            (res) => {
                $("#addPref").html(res);
            });
            clearSearch();
    }
    $("#addPref").click((event) => {
        if ($(event.target).hasClass("fa-check")) {
            $("#addPref").html("");
            const [id, rate, remark] = $(event.target).parents("tr").children("td").children("input");
            $.post("<?=base_url('ajax/savePref')?>", {
                    vendor: vendor,
                    id: $(id).val(),
                    rate: $(rate).val(),
                    remark: $(remark).val()
                },
                (res) => {
                    $("#savePref").html(res);
                    $('#savePref pre table').DataTable();
                });
        }
    });
    $("#savePref").click((event) => {
        if ($(event.target).hasClass("fa-times")) {
            const [p_in] = $(event.target).parents("tr").children("td").children("input");
            $.post("<?=base_url('ajax/delPref')?>", {p_in:$(p_in).val(),vendor:vendor},
                (res) => {
                    $("#savePref").html(res);
                    $('#savePref pre table').DataTable();
                }
            )
        }
    });


})
</script>
