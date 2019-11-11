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

                    this is ledger section
                </div>
                <div id="products" class="container tab-pane fade row">
                    this is products section
                </div>
                <div id="order" class="container tab-pane fade row">
                    this is order history section
                </div>
                <div id="placeorder" class="container tab-pane active row">
                    this is products section
                </div>

            </div>
        </div>
    </div>
</div>