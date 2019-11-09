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
                <!-- <div id="overview" class="container tab-pane active">
                    <div class=" row">
                        <?=form_label("Company Name", "company_name", "class='col-sm-2 col-form-label'")?>
                        <?=form_label($user->company_name, "company_name", "class='col-sm-10 col-form-label text-dark'")?>
                    </div>
                    <div class=" row">
                        <?=form_label("Name", "name", "class='col-sm-2 col-form-label'")?>
                        <?=form_label($user->name, "company_name", "class='col-sm-10 col-form-label text-dark'")?>
                    </div>
                    <div class=" row">
                        <?=form_label("Mobile", "mobile", "class='col-sm-2 col-form-label'")?>
                        <?=form_label($user->mobile, "company_name", "class='col-sm-10 col-form-label text-dark'")?>
                    </div>
                    <div class=" row">
                        <?=form_label("Role", "role", "class='col-sm-2 col-form-label'")?>
                        <?=form_label($user->user_type, "company_name", "class='col-sm-10 col-form-label text-dark'")?>
                    </div>

                </div> -->
                <div id="billing" class="container tab-pane fade">
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Country", "billing_country", 'class="col-form-label"')?>
                            <?=form_label($user->billing_country, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("State", "billing_state", 'class="col-form-label"')?>
                            <?=form_label($user->billing_state, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("City", "billing_city", 'class="col-form-label"')?>
                            <?=form_label($user->billing_city, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-8">
                            <?=form_label("Address", "billing_address", 'class="col-form-label"')?>
                            <?=form_label($user->billing_address, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Pincode", "billing_pincode", 'class="col-form-label"')?>
                            <?=form_label($user->billing_pincode, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Credit Limit", "credit_limit", 'class="col-form-label"')?>
                            <?=form_label($user->credit_limit, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Credit days", "credit_days", 'class="col-form-label"')?>
                            <?=form_label($user->credit_days, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Distance", "billing_distance", 'class="col-form-label"')?>
                            <?=form_label($user->billing_distance, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>

                </div>
                <div id="shipping" class="container tab-pane fade">
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Country", "country", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_country, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("State", "state", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_state, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("City", "city", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_city, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-8">
                            <?=form_label("Address", "address", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_address, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Pincode", "pincode", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_pincode, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Distance", "kilometer", 'class="col-form-label"')?>
                            <?=form_label($user->shipping_distance, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                </div>
                <div id="contact" class="container tab-pane fade">
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("Mobile", "mobile", "class='col-form-label'")?>
                            <?=form_label($user->mobile, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Email", "email", "class='col-form-label'")?>
                            <?=form_label($user->email, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <!-- <div class="col-sm-4">
                            <?=form_label("Phone", "phone", "class='col-form-label'")?>
                            <?=form_label($user->phone, "company_name", "class=' col-form-label text-dark'")?>
                        </div> -->
                    </div>
                    <div class=" row">
                        <div class="col-sm-8">
                            <?=form_label("Website", "website", "class='col-form-label'")?>
                            <?=form_label($user->website, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("Reference", "reference", "class='col-form-label'")?>
                            <?=form_label($user->reference, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-12">
                            <?=form_label("Owner", "owner", "class='col-form-label'")?>
                            <?=form_label($user->owner, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                </div>
                <div id="gst" class="container tab-pane fade">
                    <div class=" row">
                        <div class="col-sm-4">
                            <?=form_label("GST place", "gst_place", "class='col-form-label'")?>
                            <?=form_label($user->gst_place, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("state code", "state_code", "class='col-form-label'")?>
                            <?=form_label($user->state_code, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-4">
                            <?=form_label("GST No", "gst_no", "class='col-form-label'")?>
                            <?=form_label($user->gst_no, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-6">
                            <?=form_label("A/C Holder Name", "owner", "class='col-form-label'")?>
                            <?=form_label($user->owner, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("Permanent A/c no.", "account_no", "class='col-form-label'")?>
                            <?=form_label($user->gst_no, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-6">
                            <?=form_label("Bank Name", "bank_name", "class='col-form-label'")?>
                            <?=form_label($user->gst_no, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("A/C Type", "account_type", "class='col-form-label'")?>
                            <?=form_label($user->gst_no, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm-6">
                            <?=form_label("Branch", "branch", "class='col-form-label'")?>
                            <?=form_label($user->gst_no, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                        <div class="col-sm-6">
                            <?=form_label("IFSC", "ifsc", "class='col-form-label'")?>
                            <?=form_label($user->gst_no, "company_name", "class=' col-form-label text-dark'")?>
                        </div>
                    </div>
                </div>
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
                <div id="products" class="container tab-pane active row">
                    <div class="col-lg-12">
                        <form>
                            <div class=" row">
                                <div class="col-lg-5 mx-auto mt-4">
                                    <input type="text" size="30" placeholder="search product here..."
                                        class="searching form-control" onkeyup="showResult(this.value)">
                                </div>
                            </div>
                            <div class=" row">
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