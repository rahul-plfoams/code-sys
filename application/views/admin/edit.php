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
                <!-- <form id="frm1" action="" method="POST"> -->
                <div id="overview" class="container tab-pane active">
                <!-- <?=form_open("admin/update", ["id" => "frm1"])?> -->
                    <!-- <form action="updateuser.php" method="post" id="frm1"> -->
                        <div class="form-group row">
                            <?=form_label("Company Name", "company_name", "class='col-sm-2 col-form-label'")?>
                            <?=form_input(["class" => "form-control col-sm-10", "id" => "company_name", "name" => "company_name", "placeholder" => "Type Company Name here", "value" => $user->company_name])?>
                        </div>
                        <div class="form-group row">
                            <?=form_label("Name", "name", "class='col-sm-2 col-form-label'")?>
                            <?=form_input(["class" => "form-control col-sm-10", "id" => "name", "name" => "name", "placeholder" => "Type Name here", "value" => $user->name])?>
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
                            <?=form_button(["id" => "toggleEdit", "class" => "btn btn-dark button btnPush btnBlueGreen", "content" => "Edit"])?>
                            <?=form_button(["class" => "btn btn-success button btnPush btnBlueGreen", "type" => "submit", "name" => "update", "content" => "Save", "disabled" => "true"], )?>
                        </div>
                    <!-- </form> -->
                </div>
                <div id="billing" class="container tab-pane fade">
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
                </div>
                <div id="shipping" class="container tab-pane fade">
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
                </div>
                <div id="contact" class="container tab-pane fade">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <?=form_label("Mobile", "mobile", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "mobile", "name" => "mobile", "placeholder" => "Type mobile here..", "value" => $user->mobile])?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Email", "email", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "email", "name" => "email", "placeholder" => "Type email here..", "value" => $user->email])?>
                        </div>
                        <!-- <div class="col-sm-4">
                            <?=form_label("Phone", "phone", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "phone", "name" => "phone", "placeholder" => "Type phone here..", "value" => $user->phone])?>
                        </div> -->
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
                </div>
                <div id="gst" class="container tab-pane fade">
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
                            <?=form_input(["class" => "form-control", "id" => "account_no", "name" => "account_no", "placeholder" => "Type account_no here..", "value" => $user->gst_no])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <?=form_label("Bank Name", "bank_name", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "bank_name", "name" => "bank_name", "placeholder" => "Type bank_name here..", "value" => $user->gst_no])?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("A/C Type", "account_type", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "account_type", "name" => "account_type", "placeholder" => "Type account_type here..", "value" => $user->gst_no])?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <?=form_label("Branch", "branch", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "branch", "name" => "branch", "placeholder" => "Type branch here..", "value" => $user->gst_no])?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("IFSC", "ifsc", "class='col-form-label'")?>
                            <?=form_input(["class" => "form-control", "id" => "ifsc", "name" => "ifsc", "placeholder" => "Type ifsc here..", "value" => $user->gst_no])?>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
                <div id="ledger" class="container tab-pane fade">
                    <div id="importFrm">

                        <?=form_open("importdata.php?id=")?>
                        <?=$this->table->add_row(form_upload(["class" => "chooseFileInput", "name" => "file"]), form_submit(["class" => "btn btn-primary", "name" => "importSubmit", "value" => "IMPORT"]))->generate();?>
                        <?=form_close()?>
                        <?=$this->table->set_heading(["date", "particulars", "remark", "voucher_type", "voucher_no", "debit", "credit"])->generate();?>
                        <!-- <table id=" customers" class="unfiltered table table-bordered ">
                            <tr>
                                <th>date</th>
                                <th>particulars</th>
                                <th>remark</th>
                                <th>voucher_type</th>
                                <th>voucher_no</th>
                                <th>debit</th>
                                <th>credit</th>
                            </tr>
                            <tr>
                                <td class="align-middle"></td>
                                <td class="align-middle"></td>
                                <td class="align-middle"></td>
                                <td class="align-middle"></td>
                                <td class="align-middle"></td>
                                <td class="align-middle"></td>
                                <td class="align-middle"></td>
                            </tr>
                        </table> -->
                        <!-- pagination list -->
                        <ul class="pagination">
                        </ul>
                        --------------------------
                        <!-- pagination end -->
                    </div>
                </div>
                <div id="products" class="container tab-pane fade row">
                    <div class="col-lg-12">
                        <form>
                            <div class="form-group row">
                                <div class="col-lg-5 mx-auto mt-4">
                                    <input type="text" size="30" placeholder="search product here..."
                                        class="searching form-control" onkeyup="showResult(this.value)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <div id="livesearch">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <form action="storePref.php?id=" method="post"> -->
                        <?=form_open("storePref.php?id=")?>
                        <?php $table_header = ["Sr. No", "Name", "Grade", "Quality", "Rate", "Unit", "GST", "remark"]?>
                        <?=$this->table->set_heading($table_header)->generate()?>
                        <!-- <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <td class="align-middle">Sr. No</td>
                                    <td class="align-middle">Name</td>
                                    <td class="align-middle">Grade</td>
                                    <td class="align-middle">Quality</td>
                                    <td class="align-middle">Rate</td>
                                    <td class="align-middle">Unit</td>
                                    <td class="align-middle">GST</td>
                                    <td class="align-middle">remark</td>
                                </tr>
                            </thead>
                            <tbody id="showProduct">
                            </tbody>
                        </table> -->
                        <?=form_submit(["value" => "Save", "class" => "btn btn-primary"])?>
                        <?=form_close()?>
                        <!-- <table id="listProducts" class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <td class="align-middle">Sr. No</td>
                                    <td class="align-middle">Name</td>
                                    <td class="align-middle">Grade</td>
                                    <td class="align-middle">Quality</td>
                                    <td class="align-middle">Rate</td>
                                    <td class="align-middle">Unit</td>
                                    <td class="align-middle">GST</td>
                                    <td class="align-middle">remark</td>
                                    <td class="align-middle">actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle"></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle">
                                        <a class="btn btn-info" onclick="editVendorProduct(this)" href="#"
                                            data-p_in="">Edit</a>
                                        <a class="btn btn-danger" href="delProduct.php?id=">delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
                        <?=$this->table->set_heading($table_header)->generate()?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 id="editProductName">demo</h2>
        </div>
        <div class="modal-body">
            <form action="" method="post" onsubmit="editVendorProduct(this); return false;">
                <label for="editProductRate">Rate</label>
                <input type="number" name="" id="editProductRate">
                <label for="editProductRemark">Remark</label>
                <input type="Text" name="" id="editProductRemark">
                <input type="submit" value="save" onclick="">
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=base_url("assets/js/edit.js")?>"></script>