<?php
$config = [
    "error_prefix" => "<div class='text-danger'>",
    "error_suffix" => "</div>",
    "message"=>"required",
    "login" => [
        ['field' => 'username',
            'label' => 'User name',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
    ],
    "newuser"=>[
        ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'mobile',
            'label' => 'Mobile',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'password_1',
            'label' => 'Password',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'password_2',
            'label' => 'Password Confirmation',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
    ],
    "addproduct"=>[
        ['field' => 'product_name',
            'label' => 'Product Name',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'product_grade',
            'label' => 'Product Grade',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'product_quality',
            'label' => 'Product Quality',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'product_sale_rate',
            'label' => 'Product Rate',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'product_gst_rate',
            'label' => 'Product GST Rate',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
        ['field' => 'product_remark',
            'label' => 'Product Remark',
            'rules' => 'required',
            'errors'=>['required'=>'required']],
    ]

];
