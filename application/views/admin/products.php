<div class="container mt--5">
    <div class="card shadow">
        <div class="card-header">
            Products
        </div>
        <div class="card-body text-center">
            <?=form_open("products/add_product", ["id" => "form_products"])?>
<?=form_hidden("product_id")?>
            <div class="form-group row">
                <div class="col-lg-1 p-1">
                    <?=form_label("Name", "product_name", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_name", "name" => "product_name", "placeholder" => "Type Name here"])?>
                    <?=form_error("product_name")?>
                </div>
                <div class="col-lg-2 p-1">
                    <?=form_label("Grade", "product_grade", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_grade", "name" => "product_grade", "placeholder" => "Type Grade here"])?>
                    <?=form_error("product_grade")?>
                </div>
                <div class="col-lg-2 p-1">
                    <?=form_label("Quality", "product_quality", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_quality", "name" => "product_quality", "placeholder" => "Type Quality here"])?>
                    <?=form_error("product_quality")?>
                </div>
                <div class="col-lg-1 p-1">
                    <?=form_label("Rate", "product_sale_rate", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_sale_rate", "name" => "product_sale_rate", "placeholder" => "Type Rate here"])?>
                    <?=form_error("product_sale_rate")?>
                </div>
                <div class="col-lg-1 p-1">
                    <?=form_label("GST", "product_gst_rate", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_gst_rate", "name" => "product_gst_rate", "placeholder" => "Type GST here"])?>
                    <?=form_error("product_gst_rate")?>
                </div>
                <div class="col-lg-2 p-1">
                    <?=form_label("Remark", "product_remark", "class='col col-form-label'")?>
                    <?=form_input(["class" => "form-control col", "id" => "product_remark", "name" => "product_remark", "placeholder" => "Type Remark here"])?>
                    <?=form_error("product_remark")?>
                </div>
                <div class="col-lg-1 p-1">
                    <?=form_label("Unit", "product_unit", "class='col col-form-label'")?>
                    <?=form_dropdown("units", ["mm"=>"mm", "kg"=>"kg", "Sq.Ft"=>"Sq.Ft", "Pcs"=>"Pcs", "Meter"=>"Meter"], "mm", "class='form-control' id='product_unit'")?>
                </div>
                <div class="col-lg-2 p-0">
                    <?=form_label("Actions", "actions", "class='col-form-label'")?>
                    <div class=" btn-grp">
                        <?=form_button(["type" => "submit", "class" => "btn btn-dark button btnPush btnBlueGreen", "content" => "Save"])?>
                        <?=form_button(["class" => "btn btn-success button btnPush btnBlueGreen", "type" => "reset", "name" => "update", "content" => "Clear"])?>
                    </div>
                </div>
            </div>
            <?=form_close()?>
            <?php
$this->table->set_heading("ID", "Name", "Grade", "Quality", "Unit", "Sale", "GST", "Remark", "Actions");
$template = ['table_open' => '<table id="myTbl" class="table table-bordered">'];
$this->table->set_template($template);
foreach ($products->result() as $product) {
    $this->table->add_row(
        $product->product_id,
        $product->product_name,
        $product->grade,
        $product->quality,
        $product->unit,
        $product->sale_rate,
        $product->gst_rate,
        $product->remark,
        "<i class='text-info fas fa-edit' onclick='editProduct($product->product_id)'></i>" . nbs(2) . "<i class='text-danger fas fa-trash-alt' onclick='deleteProduct($product->product_id)'></i>");}?>
            <?=$this->table->generate()?>
        </div>
    </div>

</div>
<script>
    function editProduct(id) {
       $.post("<?=base_url('products/getProduct')?>",{product_id:id},function(data){
            product_info=JSON.parse(data);
            $("#product_name").val(product_info.product_name);
            $("#product_grade").val(product_info.grade);
            $("#product_quality").val(product_info.quality);
            $("#product_sale_rate").val(product_info.sale_rate);
            $("#product_gst_rate").val(product_info.gst_rate);
            $("#product_remark").val(product_info.remark);
            $("#product_unit").val(product_info.unit);
            $("[name='product_id']").val(product_info.product_id);
            $(".btn-grp [type='submit']").text("update").addClass("btn-info").removeClass("btn-dark");
            $("#form_products").attr("action","<?=base_url('products/updateProduct')?>");
        });
    }
    function deleteProduct(id){
        $.post("<?=base_url('products/deleteProduct')?>",{product_id:id},function(){
            
        });
        $(`td:contains(${id})`).parents("tr").remove();
    }
    $(() => {

        $('#myTbl').DataTable({
            dom: 'lfrtipB'
        });

    });
</script>